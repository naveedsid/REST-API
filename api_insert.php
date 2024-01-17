<?php
header('Content-Type: application/json');
header('Access-Control_Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$s_name  = $data['s_name'];
$s_fname  = $data['s_fname'];
$s_roll_num  = $data['s_roll_num'];

include('conn.php'); 

$q = "INSERT INTO `tbl_student` (`S_NAME`, `S_FNAME`, `S_ROLL_NO`) VALUES ('$s_name', '$s_fname', $s_roll_num)";
if($conn->query($q)){ 
    echo json_encode(array('message' => 'Student Record Inserted..', 'status' => true));
}else{
    echo json_encode(array('message' => 'Stdent Record Not Inserted..', 'status' => false));
}
?>