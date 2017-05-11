<?php
include ("db/db_connect.php");

$id=$_POST['id'];
$q=mysql_query("update tbl_comp_process_2017 set approve2 = 'yes' where id = '$id'");
if($q)
{
	
		$process=mysql_fetch_array(mysql_query("select * from tbl_comp_process_2017 where id = '$id'"));
$compno=$process['comp_no'];
		$comp=mysql_fetch_array(mysql_query("select * from complaints_2017 where complaint_no= '$compno'"));
$compdate=$comp['complaint_date'];
$user=$comp['usercode'];
$ser_eng_code=$comp['ser_eng_code'];

$cellno=$comp['cell_no'];
		$comp1=mysql_fetch_array(mysql_query("select contact from employee where emp_code ='$user'"));
		$comp2=mysql_fetch_array(mysql_query("select contact from employee where emp_code ='$ser_eng_code'"));
$serviceHead=$comp2['contact'];
$contact=$comp2['contact'];
	 	$phonNo = $cellno.",".$serviceHead.",".$contact;

	
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Your Warranty claim for is  approved.\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Complant Date : ".$compdate."\r\n";
		$message .= "Complaints Registered by : Emp Code - ".$user."\r\n";
		$message .= "Complaints Alloted to: Emp Code - ".$ser_eng_code."\r\n";
		
		$message1 = urlencode($message);
//echo "http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1";
	file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);
	echo "warranty claim is approved";
	
}
else{
	echo "error occured";
}
?>