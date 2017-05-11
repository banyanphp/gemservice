<?php
		include ("db/db_connect.php");
		
 $process_status=$_REQUEST['pd_name'];
$remarks=$_REQUEST['ser_report1'];
$comp_id=$_REQUEST['query_12_id'];
$comp_no=$_REQUEST['query_12_compno'];

if($process_status =='Completed'){
	//echo"1";
?><script>window.location.href='update_process.php?query_12_id=<?php echo $comp_id; ?>&&query_12_compno=<?php echo $comp_no;?>';</script><?php
}
if($process_status =='Need Spares'){
	
?><script>window.location.href='service_part_warranty_commissioing.php?query_12_id=<?php echo $comp_id; ?>&&query_12_compno=<?php echo $comp_no;?>';</script><?php
}
else{
	
	$process_statuss= substr($process_status, 0, -1);


	 $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); 
	 
	 $rand=rand();
	 $file_name=$_FILES["report"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["report"]["tmp_name"];

	    $imgtype=$_FILES["report"]["type"];

	    

	  

	    $target_path = "../employee_app/uploadedimages/".$file_name;
		 $eng_mails =mysql_fetch_array(mysql_query("select * from complaints_2017 where id = '$comp_id'"));
		 if($process_status=='Goahead'){

			 			$comp_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));



			 mysql_query("update complaints_2017 set status='Process',engineer_attend_call='Yes',attencall_timestamp='$comp_reg_timestamp',comp_attending_date='$comp_reg_timestamp' where  id ='$comp_id'");
		 }
		move_uploaded_file($temp_name, $target_path);
$q=mysql_query("INSERT INTO `tbl_comp_process_2017`( `comp_id`, `comp_no`, `process_status`, `remarks`, `datetime`, `spares_id`, `status`,`image`) VALUES ('$comp_id','$comp_no','$process_status','$remarks','$date_timestamp','','1','$img_name')");


if($q){
	
			 $eng_mail = mysql_query("select * from complaints_2017 where id = '$comp_id'");
		  $comp_det_res = mysql_fetch_array($eng_mail);
		  
		  
		  $team=$comp_det_res['team'];
$compdate = $comp_det_res['complaint_date'];
		  			
 $ser_eng_code = $comp_det_res['ser_eng_code'];
 $user = $comp_det_res['usercode'];
 

			$compdate = $comp_det_res['complaint_date'];
			$compno = $comp_det_res['complaint_no'];
			$complaint_category = $comp_det_res['complaint_category'];
			$comp_type = $comp_det_res['comp_type'];
			$pd_name = $comp_det_res['product_name'];
			$model = $comp_det_res['model'];
			$pur_through = $comp_det_res['pur_through'];
			$mcs = $comp_det_res['pur_through'];
			$warranty = $comp_det_res['mcslno'];
			$customername = $comp_det_res['customer'];
			$address = $comp_det_res['address'];
			$contactperson = $comp_det_res['cpersonname'];
			$phoneno = $comp_det_res['phone_no'];
			$cellno = $comp_det_res['cell_no'];
			$email = $comp_det_res['email'];
			$fax = $comp_det_res['fax'];
			$user= $comp_det_res['usercode'];
			$complaints = $comp_det_res['nature_of_complaints'];
			$street = $comp_det_res['street'];
			$city = $comp_det_res['city'];
			$landmark = $comp_det_res['landmark'];
			$pin = $comp_det_res['pincode'];
$ser_eng_code=$comp_det_res['ser_eng_code'];
				$usercode = $comp_det_res['usercode'];
				
				$emp_det21 = mysql_query("select * from employee where emp_code= '$ser_eng_code'");
			  $emp_det_res21 = mysql_fetch_array($emp_det21);
				
				$alloted_to=$emp_det_res21['emp_name'];
			  $emp_det = mysql_query("select * from employee where emp_code= '$usercode'");
			  $emp_det_res = mysql_fetch_array($emp_det);

 $reg=$emp_det_res['emp_name'];
 //get team head
 $team=$comp_det_res['team'];
 
$emp_det1 = mysql_query("select * from team where team_head= '$team'");
			  $emp_det_res2= mysql_fetch_array($emp_det1);
			  $team_head=$emp_det_res2['team_head'];
			  //get team head email and phone no
  $emp_det12 = mysql_query("select * from employee where id='$team_head'");
			  $emp_det_res1 = mysql_fetch_array($emp_det12);
			  
			
  $bcc_id=$emp_det_res1['email'];
$phonNo=$emp_det_res1['contact'];

			$from_id = $email;
			$sub = "Need help/ Need spares";
			//$headers  = "From: GemIndia\r\n";
			$headers = "cc: service@gemindia.com\r\n";
			
			$headers .= "Content-type: text/html\r\n"; 
			$description = '<table width="95%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="95%"  border="0" align="left" cellpadding="0" cellspacing="0" class="style1">
      <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:15px;">
        <td height="34" align="right">&nbsp;</td>
        <td colspan="3" align="left" >Complaints From : '.$customername.'</td>
        </tr>
      <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td width="4%" height="34" align="right">&nbsp;</td>
        <td width="21%" align="left" ><strong>Complaints Date</strong></td>
        <td width="6%" align="center">:</td>
        <td width="69%" align="left" >'.$compdate.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint No</strong></td>
        <td align="center">:</td>
        <td align="left">'.$compno.'</td>
      </tr>
  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Registered by</strong></td>
        <td align="center">:</td>
        <td align="left">'.$reg.'</td>
      </tr>
<tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Alloted To</strong></td>
        <td align="center">:</td>
        <td align="left">'.$alloted_to.'</td>
      </tr>
      <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Category</strong></td>
        <td align="center">:</td>
        <td align="left">'.$complaint_category.'</td>
      </tr>
	   <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Type</strong></td>
        <td align="center">:</td>
        <td align="left">'.$comp_type.'</td>
      </tr>
      <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Product Name</strong></td>
        <td align="center">:</td>
        <td align="left">'.$pd_name.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Model</strong></td>
        <td align="center">:</td>
        <td align="left">'.$model.'</td>
      </tr>
	    <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Purchased Through</strong></td>
        <td align="center">:</td>
        <td align="left">'.$pur_through.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>MC/Sl.No</strong></td>
        <td align="center">:</td>
        <td align="left">'.$mcs.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Warranty Status</strong></td>
        <td align="center">:</td>
        <td align="left">'.$warranty.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Customer Name</strong></td>
        <td align="center">:</td>
        <td align="left">'.$customername.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Street</strong></td>
        <td align="center">:</td>
        <td align="left">'.$street.'</td>
      </tr>
	  	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Street</strong></td>
        <td align="center">:</td>
        <td align="left">'.$landmark.'</td>
      </tr>	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Street</strong></td>
        <td align="center">:</td>
        <td align="left">'.$city.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>PinCode</strong></td>
        <td align="center">:</td>
        <td align="left">'.$pin.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Contact Person Name</strong></td>
        <td align="center">:</td>
        <td align="left">'.$contactperson.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Phone No.</strong></td>
        <td align="center">:</td>
        <td align="left">'.$phoneno.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Cell No</strong></td>
        <td align="center">:</td>
        <td align="left">'.$cellno.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>E-mail</strong></td>
        <td align="center">:</td>
        <td align="left">'.$email.'</td>
      </tr>
	
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Process Status</strong></td>
        <td align="center">:</td>
        <td align="left">'.$process_statuss.'</td>
      </tr>
	<tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Img</strong></td>
        <td align="center">:</td>
        <td align="left"><img src="http://gemservice.in/gemservice_2017/employee_app/uploadedimages/'.$file_name.'" style="width:200px;"></td>
      </tr>
  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Remarks</strong></td>
        <td align="center">:</td>
        <td align="left">'.$remarks.'</td>
      </tr>
	   
      <tr align="center">
        <td height="21" colspan="4">&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>';
$to_id=$email;

if(mail($bcc_id,$sub,$description,$headers)){
	



		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Status:".$process_statuss."\r\n";
		$message .= "Complaint No : ".$comp_no."\r\n";
		$message .= "Complaint Date : ".$compdate."\r\n";
		$message .= "Remarks : ".$remarks."\r\n";
		$message .= "Complaints Alloted to : Emp Code - ".$alloted_to."\r\n";
		
		$message1 = urlencode($message);


	 file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);
	?>  <script>window.location.href='list_complaints.php'</script><?php
	
	






}

}}

?>