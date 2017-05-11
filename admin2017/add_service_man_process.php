<?php


include ("db/db_connect.php");


$zoneid = $_POST['zone'];
$placeid = $_POST['city'];

$eng_code = $_POST['eng_code'];
$eng_name = $_POST['eng_name'];
$eng_email = $_POST['eng_email'];

 $q="select * from service_engineers where placeid = '$placeid' and zoneid = '$zoneid' and eng_code = '$eng_code' and engineers = '$eng_name'";
$check1 = mysql_query($q);
$check_result = mysql_num_rows($check1);

if($check_result == '')
{
mysql_query("insert into service_engineers (id, engineers, email, eng_code, placeid, zoneid) values ('', '$eng_name', '$eng_email', '$eng_code', '$placeid', '$zoneid')");
echo "1";
} else {
echo "2";
}

?>
