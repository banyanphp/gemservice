<?php
include ("db/db_connect.php");


$update_ct = $_POST['edit_ct'];
$eid = $_POST['eid'];

mysql_query("update service_place set place = '$update_ct' where id = '$eid'");

?><script>alert("updated Successfully");
window.location.href='list_east_zone.php';</script>