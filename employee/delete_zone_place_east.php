<?php 
include ("db/db_connect.php");





$delete_id = $_POST['id'];

mysql_query("delete from service_engineers where id = '$delete_id'");echo "Place Deleted sucessfully";


?>
