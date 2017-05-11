<?php include ("db/db_connect.php"); 
session_start();

$username = mysql_real_escape_string($_REQUEST['email']);
$password = mysql_real_escape_string($_REQUEST['password']);
$md5 = md5($password);
$user_check = mysql_num_rows(mysql_query("select * from admin where username='$username' and password = '$md5'"));
if ($user_check == 1) {
echo "1";
$user_fetch1 =mysql_query("select * from admin where username='$username' and password = '$md5'");
$user_fetch=  mysql_fetch_array($user_fetch1);
$_SESSION['user_email'] = $user_fetch['username'];
$_SESSION['user_id']=$user_fetch['id'];

/* echo "<script>window.location.href = 'home.php';</script>"; */
}
else 
{
echo "username or password are wrong.";
}
