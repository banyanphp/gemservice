<?php



if(isset($_REQUEST["user"]) && isset($_REQUEST['compno']) && isset($_REQUEST['comp_cate']) && isset($_REQUEST['comp_type'])&& isset($_REQUEST['pd_name'])&& isset($_REQUEST['model'])& isset($_REQUEST['model_num'])&& isset($_REQUEST['pur_through'])&& isset($_REQUEST['mcsnum'])&& isset($_REQUEST['mcs2'])&& isset($_REQUEST['mcs3'])&& isset($_REQUEST['warranty'])&& isset($_REQUEST['customername'])&& isset($_REQUEST['street'])&& isset($_REQUEST['landmark'])&& isset($_REQUEST['city']) && isset($_REQUEST['pincode'])&&isset($_REQUEST['contactperson']) && isset($_REQUEST['phoneno']) && isset($_REQUEST['addon_phoneno']) && isset($_REQUEST['email']) && isset($_REQUEST['addon_email']) ){
		
			$from_id = "infotech@gemindia.com";
           
            $compdate = date('d - m - Y',strtotime('+330 minute'));
			$compno = $_REQUEST['compno'];
			$comp_category = $_REQUEST['comp_cate'];
			$comp_type = $_REQUEST['comp_type'];
			$pd_name = $_REQUEST['pd_name'];
			$model = $_REQUEST['model'];
			$model_num= $_REQUEST['model_num'];
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
			$email = $_REQUEST['email'];
			$addon_email = $_REQUEST['addon_email'];
			//$from_id = $_REQUEST['compemail'];
			$comp_reg_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute'));
			$bcc_id = $email;
	
	
	$query = "insert into complaints_2017 (id, usercode, complaint_no, complaint_date, product_name, model, model_number,complaint_category,pur_through, mcslno, customer, address, street, landmark, city, pincode, phone_no, addon_phone_no, cell_no, email, addon_email, fax, nature_of_complaints, comp_attending_date, comp_closing_date, status, cpersonname, warrantystatus, type, comp_reg_timestamp, warranty_set, send_service_estimate, get_service_order, spares_required_one, send_quote_for_spares, get_po, supply_spares, service_engineer_allotment, engineer_attend_call, spares_required_engg, warranty_claim_form, approve1, approve2, arrang_despatch_material, complete_call, engg_complete_report, send_service_report, comp_type) 
	values ('', '$user', '$compno', '$compdate', '$pd_name', '$model','$model_num','$comp_category', '$pur_through', '$mcs', '$customername', 'address', '$street', '$landmark',  '$city','$pin','$phoneno', '$addon_phoneno', 'cellno', '$email', '$addon_email', 'fax', '$comp_type', '', '', 'Pending', '$contactperson', '$warranty', 'Employee', '$comp_reg_timestamp', 'set', 'no', 'no', 'set', 'no', 'no', 'no',  'no', 'no', 'set', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '$comp_type')";

		$result = mysqli_query($db->connect(),$query);
		
		if($result) {
			
			$query1 = "insert into comp_process_2017 (id, comp_no) values ('', '$compno')";
			
			$result1 = mysqli_query($db->connect(),$query1);
			
			$rep_id="jo@banyaninfotech.com";
			$headers  = "info"; 
			$headers  .= "Reply-To: $rep_id\r\n";
			$headers  .= "Bcc: $bcc_id\r\n";
			$headers .= "Content-type: text/html\r\n"; 

		
	
			$regionalHead = "9366631697";
		
			$phonNo = $cellno.",".$regionalHead."";
			
			$message = "GEM Equipments (P) Ltd.\r\n";
			$message .= "Service Complaint Registration\r\n";
			$message .= "Complaint No : ".$compno."\r\n";
			$message .= "Complant Date : ".$compdate."\r\n";
			$message .= "Complaints Registered by : Emp Code - ".$user."\r\n";
			
			$message1 = urlencode($message);
			$to_id = $email;
		$messagenew = "GEM Equipments (P) Ltd";

		$sub="Enquiry Mail from Gem Equipments India";
		//send mail
		mail($to_id,$sub,$message,$headers);

		//file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1.'');
			
			
		
			}
		}  
			
		
?>
