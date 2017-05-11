<?php 
session_start();
include 'db/db_connect.php';

$username = mysql_real_escape_string($_REQUEST['email']);
$password = mysql_real_escape_string($_REQUEST['password']);
$md5 = md5($password);
$user_check = mysql_num_rows(mysql_query("select * from employee where emp_code='$username' and password = '$md5'"));
if ($user_check == 1) {
echo "1";
$user_fetch1 =mysql_query("select * from employee where emp_code='$username' and password = '$md5'");
$user_fetch=  mysql_fetch_array($user_fetch1);
$_SESSION['emp_code'] = $user_fetch['emp_code'];
$_SESSION['user_id']=$user_fetch['id'];
$_SESSION['emp_name']=$user_fetch['emp_name'];
$_SESSION['emp_email']=$user_fetch['email'];

    $_SESSION['users'] = $user_fetch['users'];
    $_SESSION['cms'] = $user_fetch['cms'];
    $_SESSION['news'] = $user_fetch['news'];
    $_SESSION['service'] = $user_fetch['service'];
    $_SESSION['employee'] =$user_fetch['employee'];
    $_SESSION['import'] = $user_fetch['import'];
$_SESSION['complaint'] = $user_fetch['complaint'];
$_SESSION['approval'] = $user_fetch['approval'];
$_SESSION['team'] = $user_fetch['team'];
$_SESSION['pending'] = $user_fetch['pending'];
$_SESSION['reports'] = $user_fetch['reports'];
/* echo "<script>window.location.href = 'home.php';</script>"; */
}
else 
{
echo "username or password are wrong.";
}
