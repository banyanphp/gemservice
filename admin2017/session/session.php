<?php
 error_reporting('0'); 
session_start();
$emp_code = $_SESSION['user_id'];

if($_SESSION['user_id'] == "")

{

header("Location:../login.php");

session_destroy();

}

?>