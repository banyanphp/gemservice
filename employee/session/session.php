<?php
error_reporting('0'); 
session_start();

if($_SESSION['emp_code'] == "")

{


echo "<script>window.location.href='login.php'</script>";
session_destroy();

}

?>