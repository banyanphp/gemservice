<?php 
 include ("db/db_connect.php");
 $eng_atten_call = $_POST['eng_atten_call'];
			 
			$date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); 
			
			  $comp_timestamp = $_POST['comp_timestamp'];		  
			  $query_8_id = $_POST['id'];
			  
				$to_time=strtotime($comp_timestamp);
				$from_time=strtotime($date_timestamp);
				round(abs($to_time - $from_time) / 3600)." hours";
			$q=  mysql_query("update complaints_2017 set engineer_attend_call = '$eng_atten_call', attencall_timestamp = '$date_timestamp' where id = '$query_8_id'"); 
			if($q){
				echo '1';
			}
			else{
				echo '2';
			}
?>