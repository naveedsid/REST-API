<?php
header('Content-Type: application/json');
header('Access-Control_Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);
$student_id  = $data['sid'];

include'conn.php';

$q = "DELETE FROM `tbl_student` WHERE S_ID = $student_id";
    echo json_encode(array('message' => 'Record Deleted...', 'status' => true));
if($conn->query($q)){ 
    
}else{
    echo json_encode(array('message' => 'Student Record Not Deleted..', 'status' => false));
}
?>