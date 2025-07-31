<?php
$SERVER   = "localhost";
$username = "root";
$password = "";
$database = "doctor_name";

$conn = mysql_connect($SERVER,$username,$password,$database);
if($conn){
    echo "success";
}
else{
    die("Error" mysql_connect_error());
}
?>