<?php
			include ("db/db_connect.php");

					if(isset($_POST['ser_submit'])) {  
			$ser_report = $_POST['ser_report'];
			
			$query_12_id = $_POST['query_12_id'];
			$query_12_compno = $_POST['query_12_compno'];
$rand=rand();
$file_name=$_FILES["report"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["report"]["tmp_name"];

	    $imgtype=$_FILES["report"]["type"];

	    

	  

	    $target_path = "../employee_app/uploadedimages/".$file_name;
		
		move_uploaded_file($temp_name, $target_path);
		
		 
		 		
			 $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); // call attending time
				
				//mysql_query("update comp_process_2017 set complete_call_servicereport = '$img_name', complete_call_servicereport_descr = '$ser_report' where comp_no = '$query_12_compno'");
				mysql_query("update complaints_2017 set status = 'Completed',comp_closing_date='$date_timestamp', image='$file_name',service_description='$ser_report' where id = '$query_12_id'");		

$q=mysql_query("select * from complaints_2017 where id = '$query_12_id'");

$row1=mysql_fetch_array($q);


 $ser_eng_code = $row1['ser_eng_code'];
 $team=$row1['team'];

 $eng_mail1 = mysql_query("select * from team where id = '$team'");
			 $eng_mail_res1 = mysql_fetch_array($eng_mail1);
			 $teamhead=$eng_mail_res1['team_head'];
			 $eng_mail = mysql_query("select * from employee where id = '$teamhead'");
			 $eng_mail_res = mysql_fetch_array($eng_mail); 
			
			 
			  // $to_id = 'sam.indiasoft@gmail.com';
			 $bcc_id = $eng_mail_res['email'];
			  	$serviceEngineer = $eng_mail_res['contact'];
			  
			 
			  
				  		  
			   $comp_det = mysql_query("select * from complaints_2017 where id = '$query_12_id'");
			  $comp_det_res = mysql_fetch_array($comp_det);
			  
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
			
			$contactperson = $comp_det_res['cpersonname'];
			$phoneno = $comp_det_res['phone_no'];
			$cellno = $comp_det_res['cell_no'];
			$email = $comp_det_res['email'];
			$fax = $comp_det_res['fax'];
			$user= $comp_det_res['usercode'];
			$complaints = $comp_det_res['nature_of_complaints'];
			$ser_eng_code = $comp_det_res['ser_eng_code'];
			
			
			 
			  // $to_id = 'sam.indiasoft@gmail.com';
			 $bcc_id = $eng_mail_res['email'];
			  	$serviceEngineer = $eng_mail_res['contact'];
			  
			
$street = $comp_det_res['street'];
			$city = $comp_det_res['city'];
			$landmark = $comp_det_res['landmark'];
			$pin = $comp_det_res['pincode'];
			$from_id = $email;
			$sub = "Complaint Completed from GEM INDIA";
			//$headers  = "From: GemIndia\r\n";
			$headers = "cc: service@geminia.com\r\n";
			$headers.= "Bcc: $bcc_id\r\n";
			$headers.= "Content-type: text/html\r\n"; 
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
        <td height="34" align="left"><strong>Alloted To</strong></td>
        <td align="center">:</td>
        <td align="left">'.$engineers.'('.$ser_eng_code.')</td>
      </tr>
	 
	   
      <tr align="center">
        <td height="21" colspan="4">&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>';
	mail($email,$sub,$description,$headers);
			
		
		
		$phonNo = $cellno.",".$serviceEngineer;
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Complaint is Completed.\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Complaint Date : ".$compdate."\r\n";
		$message .= "Complaint Closing Date : ".$date_timestamp."\r\n";
		$message .= "Complaints Registered by : Emp Code - ".$user."\r\n";
		
		$message1 = urlencode($message);


	file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1.'');
		
		
	
				
				
				
			
				
				
	echo "<script>window.location.href='list_completed_complaints.php';</script>";
	
			
			}
			
 ?>