<?php
$conn = new mysqli('localhost','root','','hospital2');
if($conn->connect_errno >0){
    die('Error'.$conn->connect_error);
}
?>
