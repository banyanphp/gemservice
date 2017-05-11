<?php 
include ("db/db_connect.php");




if(isset($_POST['id']))
{
$delete_id = $_POST['id'];
$q=mysql_query("delete from complaints_2017 where id = '$delete_id'");
if($q){
	
echo "Complaint Deleted sucessfully";
}
else{
	echo "Error Occured";
}
}
?>
