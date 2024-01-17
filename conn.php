<?php 
define("HOST","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","test");
$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME) OR die("Connection Failed...!");
// if($conn->connect_errno){
//     die("Connection Failed...!");
// }
?>