
<?php include ("db/db_connect.php");


$team=$_POST['team'];
$member=$_POST['member'];

$count=count($member);
$q="";
for($i=0;$i<$count;$i++){
	$teammember=$member[$i];
	$q="INSERT INTO `team_members`(`id`, `team_member_id`, `team_members`, `status`) VALUES ('','$team','$teammember','1')";
	$res=mysql_query($q);
}

if($res){
	echo "1";
}
else{
	echo "2";
}
?>