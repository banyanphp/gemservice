<?php 
include ("db/db_connect.php");




if(isset($_POST['id']))
{
$delete_id = $_POST['id'];
mysql_query("delete from employee where id = '$delete_id'");
echo "Employee Data Deleted sucessfully";
}

?>
