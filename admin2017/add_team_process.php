<?php include ("db/db_connect.php"); 
		$team = $_REQUEST['team'];
		$head = $_REQUEST['head'];

		$ct_ex = mysql_query("select * from team where `team_name`='$team'");
		$ct_result = mysql_num_rows($ct_ex);

		if($ct_result =='0')
		{
		mysql_query("insert into team (id, team_name, team_head) values ('', '$team', '$head')");
		$nam=mysql_fetch_array(mysql_query("select id from team where team_name='$team'"));
		$id=$nam['id'];
echo $q="select * from employee where id='$head'";
$name=mysql_fetch_array(mysql_query($q));
echo $tem=$name['team'];
if($tem==''){
echo $id;
		mysql_query("update employee set team='$id' where id='$head'");
		}
else{
$tem.=",";
$tem.=$id;
mysql_query("update employee set team='$tem' where id='$head'");

}
echo "1";
		} else {
		echo "2";
		}
	
		  ?>