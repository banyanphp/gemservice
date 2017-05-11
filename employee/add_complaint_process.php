<?php
include 'db/db_connect.php';



                                                $q = mysql_fetch_array(mysql_query("select complaint_no from complaints_2017 order by complaint_no desc"));
                                               	
			
            $user = $_REQUEST['user'];
                
            $compdate = date('Y-m-d',strtotime('+330 minute'));
			$compno =$q['complaint_no'] + 1;
                        
			$comp_category = $_REQUEST['comp_cate'];
			$comp_type = $_REQUEST['comp_type'];
			$pd_name = $_REQUEST['pd_name'];
			$model = $_REQUEST['model'];
$model_num=$_REQUEST['model_num'];
			$model_num.= $_REQUEST['model_num1'];
			$pur_through = $_REQUEST['pur_through'];
			$mcsnum = $_REQUEST['mcsnum'];
			$mcs2 = $_REQUEST['mcs2'];
			$mcs3 = $_REQUEST['mcs3'];
			$mcs = $mcsnum."/".$mcs2."/".$mcs3;
			$warranty = $_REQUEST['warranty'];
			$customername = $_REQUEST['customername'];
			$street= $_REQUEST['street'];
			$landmark= $_REQUEST['landmark'];
			$city= $_REQUEST['city'];
			$pin= $_REQUEST['pin'];
			$contactperson = $_REQUEST['contactperson'];
			$phoneno = $_REQUEST['phoneno'];
			$addon_phoneno= $_REQUEST['addon_phoneno'];
			$cellno= $_REQUEST['cellno'];
			$email = $_REQUEST['email'];
			$addon_email = $_REQUEST['addon_email'];
			//$from_id = $_REQUEST['compemail'];
			$comp_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			
	
	
	$query = "insert into complaints_2017 (id, usercode, complaint_no, complaint_date, product_name, model, model_number,complaint_category,pur_through, mcslno, customer, address, street, landmark, city, pincode, phone_no, addon_phone_no, cell_no, email, addon_email, fax, nature_of_complaints, comp_attending_date, comp_closing_date, status, cpersonname, warrantystatus, type, comp_reg_timestamp, warranty_set, send_service_estimate, get_service_order, spares_required_one, send_quote_for_spares, get_po, supply_spares, service_engineer_allotment, engineer_attend_call, spares_required_engg, warranty_claim_form, approve1, approve2, arrang_despatch_material, complete_call, engg_complete_report, send_service_report, comp_type) 
	values ('', '$user', '$compno', '$compdate', '$pd_name', '$model','$model_num','$comp_category', '$pur_through', '$mcs', '$customername', 'address', '$street', '$landmark',  '$city','$pin','$phoneno', '$addon_phoneno', '$cellno', '$email', '$addon_email', 'fax', '$comp_type', '', '', 'Pending', '$contactperson', '$warranty', 'Employee', '$comp_reg_timestamp', '$warranty', 'no', 'no', 'set', 'no', 'no', 'no',  'no', 'no', 'set', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '$comp_type')";

		$result = mysql_query($query);
		
		if($result) {
$to_id = 'service@gemindia.com';

$from_id = "infotech@gemindia.com";
$sub = "Complaints from Employee : ".$user;
			$headers  = "info"; 
			
			$headers.= "Bcc: $to_id\r\n";
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
        <td height="34" align="left"><strong>Model Number</strong></td>
        <td align="center">:</td>
        <td align="left">'.$model_num.'</td>
      </tr>
 <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Category</strong></td>
        <td align="center">:</td>
        <td align="left">'.$comp_category .'</td>
      </tr>
 <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Type</strong></td>
        <td align="center">:</td>
        <td align="left">'.$comp_type .'</td>
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
        <td height="34" align="left"><strong>Landmark</strong></td>
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
	 
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Service Category</strong></td>
        <td align="center">:</td>
        <td align="left">'.$comp_category.'</td>
      </tr>
	  <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaint Type</strong></td>
        <td align="center">:</td>
        <td align="left">'.$comp_type.'</td>
      </tr>
	   <tr style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;">
        <td height="34" align="right">&nbsp;</td>
        <td height="34" align="left"><strong>Complaints Registered by</strong></td>
        <td align="center">:</td>
        <td align="left">'.$user.'</td>
      </tr>
      <tr align="center">
        <td height="21" colspan="4">&nbsp;&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
';

		$regionalHead = "9366631697";
		
		$phonNo = $cellno.",".$regionalHead."";
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Service Complaint Registration\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Complaint Date : ".$compdate."\r\n";
		$message .= "Complaints Registered by : Emp Code - ".$user."\r\n";
		
		$message1 = urlencode($message);
		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1.'');



	if(mail($email,$sub,$description,$headers)){


		echo '1';
		}
		else{
			echo '2';
		}
			}
		
			
		
?>
