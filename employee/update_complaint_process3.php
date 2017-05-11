<?php
include 'db/db_connect.php';
$Branch = $_POST['Branch'];
		$comp_model = $_POST['comp_model'];
		$sno = $_POST['sno'];
		$dateofsale = $_POST['dateofsale'];
		$dateofcommissioning = $_POST['dateofcommissioning'];
		$dateoffailure = $_POST['dateoffailure'];
		$dateofhoursattend = $_POST['dateofhoursattend'];
		$query_10_compno = $_POST['query_10_compno'];
		$query_10_id=$_POST['query_10_id'];
		$natureoffailure = $_POST['natureoffailure'];
		$date_claim = date('d - m - Y',strtotime('+330 minute'));
		$comp_customer1 = $_POST['comp_customer1'];
		$del_address = $_POST['comp_address'];
		$justification = $_POST['justification'];
		
		
		$remarks = $_POST['remarks'];
		$tot_value = $_POST['tot_value'];

		$content = $_POST['FCKeditor1'];
		//convert all types of single quotes
		/*$names = array("content","comp_no","Branch","Model","sno","dateofsale","dateofcommissioning","dateoffailure","dateofhoursattend","compno","natureoffailure","date","cus_name","del_address","justification","through","doc_no","remarks","ser_attendby","indentor","passedby","approvedby");
		$values = array($tmpString2,$Branch,$Model,$sno,$dateofsale,$dateofcommissioning,$dateoffailure,$dateofhoursattend,$compno,$natureoffailure,$date,$cus_name,$del_address,$justification,$through,$doc_no,$remarks,$ser_attendby,$indentor,$passedby,$approvedby);*/
		
	$q=	mysql_query("insert into claim_form (id, comp_id, comp_no, Branch, Model , sno, dateofsale, dateofcommissioning, dateoffailure, dateofhoursattend, natureoffailure, date, cus_name, del_address, particulars, tot_value, justification, remarks) values ('', '$query_10_id', '$query_10_compno', '$Branch', '$comp_model' , '$sno', '$dateofsale', '$dateofcommissioning', '$dateoffailure', '$dateofhoursattend', '$natureoffailure', '$date_claim', '$comp_customer1', '$del_address', '$content', '$tot_value', '$justification', '$remarks')");
	 
 $id = mysql_insert_id();
								
				//$q1=mysql_query("update comp_process_2017 set warranty_claim_form = 'yes' where comp_no = '$query_10_compno'");
				$q2=mysql_query("INSERT INTO `tbl_comp_process_2017`(`id`, `comp_id`, `comp_no`, `process_status`, `remarks`, `datetime`, `spares_id`, `approve1`, `approve2`, `notify1`, `notify2`, `status`) VALUES ('','$query_10_id','$query_10_compno','Need Spares','Need Spares','$date_claim','$id','','','','','1')");
				
				
				if($q2){
					 $ids = mysql_insert_id();
							
					$process=mysql_fetch_array(mysql_query("select * from tbl_comp_process_2017 where id = '$ids'"));
$compno=$process['comp_no'];
		$comp=mysql_fetch_array(mysql_query("select * from complaints_2017 where complaint_no= '$compno'"));
$compdate=$comp['complaint_date'];
$user=$comp['usercode'];
$ser_eng_code=$comp['ser_eng_code'];
$team=$comp['team'];

$phns=mysql_fetch_array(mysql_query("select * from team where id ='$team'"));
$tid=$phns['team_head'];
	$phn1=mysql_fetch_array(mysql_query("select * from employee where id='$tid'"));
	$c_no=$phn1['contact'];

	$phn=mysql_fetch_array(mysql_query("select * from employee where approval='1'"));
		$phonNo =$phn['contact'];
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "You have received new warranty claim form.\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Complant Date : ".$compdate."\r\n";
		$message .= "Complaints Registered by : Emp Code - ".$user."\r\n";
		$message .= "Complaints Alloted to: Emp Code - ".$ser_eng_code."\r\n";
		
		$message1 = urlencode($message);
	file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);
	file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$c_no.'&sender=GEMEQP&message='.$message1);
					echo '1';
					
				}
				else
				{
					echo'2';
				}
				