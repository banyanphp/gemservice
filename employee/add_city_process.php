<?php include ("db/db_connect.php"); 
		$zone = $_POST['zone'];
		$place = $_POST['city'];

		$ct_ex = mysql_query("select * from service_place where zoneid = '$zone' and place = '$place'");
		$ct_result = mysql_num_rows($ct_ex);

		if($ct_result =='0')
		{
		mysql_query("insert into service_place (id, zoneid, place) values ('', '$zone', '$place')");
echo "1";
		} else {
		echo "2";
		}
	
		  ?>