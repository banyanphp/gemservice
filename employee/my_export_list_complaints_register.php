<?php
include ("db/db_connect.php");
session_start();
$code=$_SESSION['emp_code'];
$sql = "SELECT * FROM complaints_2017 where usercode='$code' and status='Pending' order by complaint_no";
$result = mysql_query($sql);



header("Content-type: application/vnd-ms-excel");
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Registered complaints.xls");
?>
<style>
table>th{
	border:1px solid #000;
}
</style>

      <table class="" id="example-2" style="margin-left: 26px;  width: 95%;border:1px solid #000">
                                        <thead>
                                            <tr style="border:1px solid #000">
                                                <th>S.No</th>
                                           		<th> Regsitered by</th>
												<th>Complaint Number</th>  
                                                <th>Complaint Date</th>
					                            <th>Product Name</th>
                                                <th>Model</th>
                                                <th>Model_number</th>
                                                <th>Complaint Category</th>
                                                <th>Complaint Type</th>
                                                <th>Dealer Name</th>
                                                <th>Mcsl No</th>
                                                <th>Warranty</th>
                                                <th>Customer Name</th>
                                                <th>Address</th>
                                                <th>Street</th>
                                                <th>Landmark</th>
                                                <th>City</th>
                                                <th>Pincode</th>
                                                <th>Contact Person Name</th>
                                                <th>Phone No</th>
                                                <th>Add On Phone No</th>
                                                <th>Cell No</th>
                                                <th>Email Id</th>
                                                <th>Add On Email Id</th>
                                                <th>Fax</th>
                                                <th>Nature of Complaints</th>
											    <th>Service Engineer Allotment</th>
                                                <th>Service Engineer Name</th>
												         <th>Complaint Registration Time</th>
                                            
                                                <th>Complaint Attending Date</th>
                                                <th>Complaint Closing Date</th>
                                                <th>Complaint Status</th>
                                                <th>Complaint Image</th>
                                                <th>Complaint Service Description</th>
                                                <th>Type</th>
                                       
                                       
                                                 
                                            </tr>
                                        </thead>
										
                                        <tbody>
										<?php  
										
											
									$sno="0";
									
										
										while($row=mysql_fetch_array($result)){
										$usercode=$row['usercode'];
										
											$comp_attending_date=$row['comp_attending_date'];
										
                         $qs="SELECT * FROM `employee` WHERE `emp_code`='$usercode'";
								$ress=mysql_query($qs);
										$rows=mysql_fetch_array($ress);
										$emp_name=$rows['emp_name'];
												$ser_eng_code=$row['ser_eng_code'];
												if($ser_eng_code==''){
												$empname="NA";
												}
												else{
                      $qs="SELECT * FROM `employee` WHERE `emp_code`='$ser_eng_code'";
										$ress=mysql_query($qs);
										$rows=mysql_fetch_array($ress);
												$empname=$rows['emp_name'];
												}
										?>
                                           <tr style="border:1px solid #000">
						 <td><?php echo $sno++;?></td>
                                                 <td><?php echo $emp_name?></td>
                                                 <td><?php echo $row['complaint_no'];?></td>
                                                 <td><?php echo $row['complaint_date'];?></td>
                                                 <td><?php echo $row['product_name'];?></td>
                                                 <td><?php echo $row['model'];?></td>
                                                 <td><?php echo $row['model_number'];?></td>
                                                 <td><?php echo $row['complaint_category'];?></td>
                                                 <td><?php echo $row['comp_type'];?></td>
                                                 <td><?php echo $row['pur_through'];?></td>
                                                 <td><?php echo $row['mcslno'];?></td>
                                                 <td><?php echo $row['warrantystatus'];?></td>
                                                 <td><?php echo $row['customer'];?></td>
                                                 <td><?php echo $row['address'];?></td>
                                                 <td><?php echo $row['street'];?></td>
                                                 <td><?php echo $row['landmark'];?></td>
                                                 <td><?php echo $row['city'];?></td>
                                                 <td><?php echo $row['pincode'];?></td>
                                                 <td><?php echo $row['cpersonname'];?></td>
                                                 <td><?php echo $row['phone_no'];?></td>
                                                 <td><?php echo $row['addon_phone_no'];?></td>
                                                 <td><?php echo $row['cell_no'];?></td>
                                                 <td><?php echo $row['email'];?></td>
                                                 <td><?php echo $row['addon_email'];?></td>
                                                 <td><?php echo $row['fax'];?></td>
                                                 <td><?php echo $row['nature_of_complaints'];?></td>
                                                 <td><?php echo $row['service_engineer_allotment'];?></td>
												  <td><?php echo $empname;?></td>	
												  <td><?php echo $row['comp_reg_timestamp'];?></td>
                                                 <td><?php echo $row['comp_attending_date'];?></td>
                                                 <td><?php echo $row['comp_closing_date'];?></td>
                                                 <td><?php echo $row['status'];?></td>
                                                 <td><?php echo $row['image'];?></td>
                                                 <td><?php echo $row['service_description'];?></td>
                                                 <td><?php echo $row['type'];?></td>   
											
                                              
											  
											  
                                             
                                            </tr>
                                         
                                        <?php } ?>
                                           
                                           
                                        </tbody>
                                       
                                    </table>
                                