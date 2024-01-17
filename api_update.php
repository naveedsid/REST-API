<?php
header('Content-Type: application/json');
header('Access-Control_Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$s_id  = $data['s_id'];
$s_name  = $data['s_name'];
$s_fname  = $data['s_fname'];
$s_roll_num  = $data['s_roll_num'];

include('conn.php'); 

$q = "UPDATE `tbl_student` SET `S_NAME` = '$s_name', `S_FNAME` = '$s_fname', `S_ROLL_NO` = '$s_roll_num' WHERE `S_ID` = $s_id";
if($conn->query($q)){ 
    echo json_encode(array('message' => 'Student Record Updated..', 'status' => true));
}else{
    echo json_encode(array('message' => 'Stdent Record Not Updated..', 'status' => false));
}
?>