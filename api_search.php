<?php
header('Content-Type: application/json');
header('Access-Control_Allow-Origin: *');

// $data = json_decode(file_get_contents("php://input"),true);
// $search_value  = $data['search'];

$search_value = $_GET['search'];
include'conn.php';

$q = "SELECT * FROM `tbl_student` WHERE S_NAME LIKE '%{$search_value}%'";
$res = $conn->query($q) or die("SQL Query Failed...!");
if($res->num_rows > 0){ 
    $res_arr = $res->fetch_all(MYSQLI_ASSOC);
    echo json_encode($res_arr,JSON_PRETTY_PRINT);
}else{
    echo json_encode(array('message' => 'No Search Found...', 'status' => false));
}
?>