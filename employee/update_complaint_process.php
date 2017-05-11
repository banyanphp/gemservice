 <?php 
 include ("db/db_connect.php");
 $query_7_id = $_REQUEST['id'];
			  
			  $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			  
			 $ser_zone = $_POST['zone'];
			 $ser_place = $_POST['place'];
			 $ser_eng_code = $_POST['employee'];
			  $comp_attending = date('d - m - Y',strtotime('+330 minute'));
		 $q="update complaints_2017 set service_engineer_allotment = 'Yes' , ser_zone = '$ser_zone', ser_place = '$ser_place', ser_eng_code = '$ser_eng_code', attencall_timestamp = '$date_timestamp',status='Process',comp_attending_date='$comp_attending' where id = '$query_7_id'";
			$q1=  mysql_query($q); 
			if($q1){
				
				 $eng_mail = mysql_query("select * from service_engineers where eng_code = '$ser_eng_code'");
			 $eng_mail_res = mysql_fetch_array($eng_mail);

			 $to_id = $eng_mail_res['email'];
$alloted_to = $eng_mail_res['engineers'];

			 
			 $engineer_code = $eng_mail_res['zoneid'];
			  // $to_id = 'sam.indiasoft@gmail.com';
			  if($engineer_code == '1')
			  { $bcc_id = 'murugesan@gemindia.com'; 
			  	$serviceEngineer = "9487914513";}
			  
			  if($engineer_code == '2')
			  { $bcc_id = 'murugesan@gemindia.com'; 
			  	$serviceEngineer = "9487914513";}
			  
			  if($engineer_code == '3')
			  { $bcc_id = 'farook@gemindia.com';
			  	$serviceEngineer = "9360118523"; }
			  
			  if($engineer_code == '4')
			  { $bcc_id = 'farook@gemindia.com';
			  	$serviceEngineer = "9360118523"; }
			  
			  
				  		  
			   $comp_det = mysql_query("select * from complaints_2017 where id = '$query_7_id'");
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
				$usercode = $comp_det_res['usercode'];
			  $emp_det = mysql_query("select * from employee where emp_code= '$usercode'");
			  $emp_det_res = mysql_fetch_array($emp_det);

 $reg=$emp_det_res['emp_name'];
			$from_id = $email;
			$sub = "Complaint Alloted from GEM INDIA";
			//$headers  = "From: GemIndia\r\n";
			$headers = "Bcc: $bcc_id\r\n";
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
        <td height="34" align="left"><strong>Land Mark</strong></td>
        <td align="center">:</td>
        <td align="left">'.$landmark.'</td>
      </tr>	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>City</strong></td>
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
	
	 
	   
      <tr align="center">
        <td height="21" colspan="4">&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>';
		
$to_id="hari@banyaninfotech.com";
mail($to_id,$sub,$description,$headers);
			
		$serviceHead = "9366631697";
		 $eng_mail1 = mysql_query("select * from employee where emp_code = '$ser_eng_code'");
			 $eng_mail_res1 = mysql_fetch_array($eng_mail1);
			 $contact=$eng_mail_res1['contact'];
		$phonNo = $cellno.",".$serviceEngineer.",".$serviceHead.",".$contact;
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Engineer allotment for complaints.\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Complant Date : ".$compdate."\r\n";
		$message .= "Complaints Registered by : Emp Code - ".$reg."\r\n";
		$message .= "Complaints Alloted to: Emp Code - ".$alloted_to ."\r\n";
		
		 $message1 = urlencode($message);

	file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to=$serviceHead&sender=GEMEQP&message=$message1');
		
		
	
				
				
			echo "1";	
				
				
			}
			else{
				echo "2";
			}
			  ?>