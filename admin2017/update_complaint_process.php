 <?php 
 include ("db/db_connect.php");
 $query_7_id = $_POST['id'];
			  
			  $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			  
			 $ser_zone = $_POST['zone'];
			 $ser_place = $_POST['place'];
			 $ser_eng_code = $_POST['employee'];
		 $q="update complaints_2017 set service_engineer_allotment = 'Yes' , ser_zone = '$ser_zone', ser_place = '$ser_place', ser_eng_code = '$ser_eng_code', attencall_timestamp = '$date_timestamp' where id = '$query_7_id'";
			$q1=  mysql_query($q); 
			if($q1){
				echo "1";
			}
			else{
				echo "2";
			}
			  ?>