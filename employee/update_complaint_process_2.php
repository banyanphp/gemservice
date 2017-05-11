 <?php 
 include ("db/db_connect.php");
 $spares_req_eng = $_POST['spares_req_eng'];
			  $query_9_id = $_POST['id'];
			  
			  $comp_atten = date('d - m - Y',strtotime('+330 minute'));
			  
			$q=  mysql_query("update complaints set spares_required_engg = '$spares_req_eng', 	comp_attending_date = '$comp_atten' where id = '$query_9_id'"); 
			if($q){
				echo '1';
			}
			else{
				echo '2';
			}