<?php
include ("db/db_connect.php");



$update_ct = $_POST['edit_ct'];
$update_engname = $_POST['edit_engname'];
$update_engemail = $_POST['edit_engemail'];
$eid = $_POST['eid'];


mysql_query("update service_engineers set engineers = '$update_engname', email = '$update_engemail' where id = '$eid'");


?>
<script>alert("updated Successfully");
window.location.href='list_service_palce_north.php';</script>