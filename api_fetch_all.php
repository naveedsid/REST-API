<?php
header('Content-Type: application/json');
header('Access-Control_Allow-Origin: *');
include('conn.php');
$q = "SELECT * FROM `tbl_student`";
$res = $conn->query($q) or die("SQL Query Failed...!");
if($res->num_rows > 0){ 
    $res_arr = $res->fetch_all(MYSQLI_ASSOC);
    echo json_encode($res_arr,JSON_PRETTY_PRINT);
}else{
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>