 <?php 
 include ("db/db_connect.php");
 $query_7_id = $_POST['id'];
			  
			  
			 $team = $_POST['team'];
		 $q="update complaints_2017 set team = '$team' where id = '$query_7_id'";
			$q1=  mysql_query($q); 
			if($q1){
				echo "1";
			}
			else{
				echo "2";
			}
			  ?>