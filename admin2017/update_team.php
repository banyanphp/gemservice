<?php
include ("db/db_connect.php");


$update_ct = $_POST['edit_ct'];
$eid = $_POST['eid'];
$head= $_POST['head'];
mysql_query("update team set team_name = '$update_ct',team_head='$head' where id = '$eid'");

?><script>alert("updated Successfully");
window.location.href='list_team.php';</script>