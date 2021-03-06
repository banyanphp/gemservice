<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Gem Service</title>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/layout.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/widgets.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/pages.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
</head>
 <script type="text/javascript" src="print/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
		
            var divContents = $("#dvContainer").html();
			
            var printWindow = window.open('', '', 'height=800,width=800');
            printWindow.document.write('<html><head><title>Gem Service</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>   
<body class="leftbar-view">
<?php include 'session/session.php';  include 'header.php';?>
<section class="main-container">
<div class="container-fluid">
<?php include ("db/db_connect.php"); $id=$_GET['id']; ?>


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                      <form id="dvContainer" style="">  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="10%" height="35">&nbsp;</td>
    <td width="80%" height="35" align="center"><table width="75%" border="0" cellpadding="0" cellspacing="0" class="border_all_dealer">
      <tr>
        <td height="35">&nbsp;</td>
        <td><table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="35" colspan="3" align="center" valign="middle" class="head1">COMPLAINT DETAILS</td>
          </tr>
          <tr>
            <td width="34%" height="35" align="left" valign="top"><?php $xcomp = mysql_query("select * from complaints_2017 where id = '$id'");
			$ycomp = mysql_fetch_array($xcomp); ?></td>
            <td width="4%" height="35" align="left" valign="top">&nbsp;</td>
            <td height="35" align="right" valign="middle"><form><input type="image" src="images/close.gif" class="compare" onclick="window.close();" value="Close Window" />
                      </form></td>
          </tr>
          
          <tr class="title">
            <td height="45" align="left" valign="middle">Complaint Date</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['complaint_date']; ?></td>
          </tr>
          
            <tr class="title">
            <td height="45" align="left" valign="middle">Complaint Number</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['complaint_no']; ?></td>
          </tr>
            <tr class="title">
              <td height="45" align="left" valign="middle">Complaint Registered By</td>
              <td height="45" align="left" valign="middle">:</td>
              <td height="45" align="left" valign="middle"><?php $comp_code = $ycomp['usercode'];
			   if($ycomp['type'] == 'Employee') {
			  $comp_by = mysql_query("select emp_name from employee where emp_code = '$comp_code'");
			  $comp_by_name = mysql_fetch_array($comp_by);
				echo $comp_code." (".$comp_by_name['emp_name'].")";
			   }
			   
			   elseif($ycomp['type'] == 'Dealer') {
			  $comp_by = mysql_query("select name from dealer where dealercode = '$comp_code'");
			  $comp_by_name = mysql_fetch_array($comp_by);
			  echo $comp_code." (".$comp_by_name['name'].")";
			   }
			   
			?></td>
            </tr>
            <tr class="title">
              <td height="45" align="left" valign="middle">Complaint Type</td>
              <td height="45" align="left" valign="middle">:</td>
              <td height="45" align="left" valign="middle"><?php echo $ycomp['comp_type']; ?></td>
            </tr>
            <tr class="title">
            <td height="45" align="left" valign="middle">Product Name</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['product_name']; ?></td>
            </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Model</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['model']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Purchased Through</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['pur_through']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">MC/SL. No</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['mcslno']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Warranty Status</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['warrantystatus']; ?></td>
          </tr>
          
          <tr class="title">
            <td height="45" align="left" valign="middle">Customer Name</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['customer']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Address</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['address']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Contact Person Name</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['cpersonname']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Phone No.</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['phone_no']; ?></td>
            </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Cell No.</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['cell_no']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">E-Mail ID</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['email']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Fax No.</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['fax']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Nature of Complaints</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['nature_of_complaints']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Engineer Allotted</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php $engineer_code = $ycomp['ser_eng_code']; 
			  $eng_alloted = mysql_query("select engineers from service_engineers where eng_code = '$engineer_code'");
			$eng_alloted_name = mysql_fetch_array($eng_alloted);
			echo $engineer_code." (".$eng_alloted_name['engineers'].")";?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Complaint Attending Date</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['comp_attending_date']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Complaint Closing Date</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['comp_closing_date']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Status</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['status']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Complaint Registered time</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['comp_reg_timestamp']; ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Call attending time</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['attencall_timestamp']; ?>&nbsp;&nbsp;<?php if($ycomp['attencall_timestamp'] != '') { $to_time=strtotime($ycomp['comp_reg_timestamp']);
																																	?>( <?php $from_time=strtotime($ycomp['attencall_timestamp']);
																												echo round(abs($to_time - $from_time) / 3600)." hours"; ?> ) <?php }else { echo "NA"; } ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">Call completion time</td>
            <td height="45" align="left" valign="middle">:</td>
            <td height="45" align="left" valign="middle"><?php echo $ycomp['complete_report_timestamp']; ?>&nbsp;&nbsp;<?php if($ycomp['complete_report_timestamp'] != '') { $to_time1=strtotime($ycomp['comp_reg_timestamp']);
																																	?>( <?php $from_time1=strtotime($ycomp['complete_report_timestamp']);
																												echo round(abs($to_time1 - $from_time1) / 3600)." hours"; ?> ) <?php }else { echo "NA"; } ?></td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr class="title">
            <td height="45" align="left" valign="middle"><?php $ycomp_no = $ycomp['complaint_no']; 
			$doc_query = mysql_query("select * from comp_process_2017 where comp_no = '$ycomp_no'");
			$doc_result = mysql_fetch_array($doc_query); ?></td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
          </tr>
          
          <?php if($doc_result['send_service_estimate'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../service_estimate/<?php echo $doc_result['send_service_estimate']; ?>">Service Estimate to the Customer</a></td>
            </tr>
            <?php } ?>
            
            <?php if($doc_result['send_quote_for_spares'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../send_quote_spares/<?php echo $doc_result['send_quote_for_spares']; ?>">Quote for Spares</a></td>
            </tr>
            <?php } ?>
            
            <?php if($doc_result['get_po'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../po_for_spares/<?php echo $doc_result['get_po']; ?>">PO for Spares from Customer</a></td>
            </tr>
            <?php } ?>
            
            <?php if($doc_result['warranty_claim_form'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../raise_warranty/<?php echo $doc_result['warranty_claim_form']; ?>">Warranty Claim form</a></td>
            </tr>
            <?php } ?>
            
            <?php if($doc_result['arrang_despatch_material'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../despatch/<?php echo $doc_result['arrang_despatch_material']; ?>">Arrange & Despatch the material</a></td>
          </tr>
          <?php } ?>
          
          <?php if($doc_result['complete_call_servicereport'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../service_report/<?php echo $doc_result['complete_call_servicereport']; ?>">Service Report</a></td>
            </tr>
            <?php } ?>
            
            <?php if($doc_result['report_call_register'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../call_register/<?php echo $doc_result['report_call_register']; ?>">Call Register</a></td>
            </tr>
           <?php } ?>
            
            <?php if($doc_result['send_service_report'] != '') { ?>
          <tr class="title">
            <td height="45" colspan="3" align="left" valign="middle"><a href="../report_letter/<?php echo $doc_result['send_service_report']; ?>">Service Report along with Letter to the customer</a></td>
            </tr>
            <?php } ?>
          <tr class="title">
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
            <td height="45" align="left" valign="middle">&nbsp;</td>
          </tr>
          
          
          <tr class="title">
            <td height="45" colspan="3" align="right" valign="middle"><form><input type="image" src="images/close.gif" class="compare" onclick="window.close();" value="Close Window" />
                      </form></td>
            </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    <td width="10%" height="35">&nbsp;</td>
  </tr>
</table>



					  </form>
   <input type="button" value="Confirm Print" class="btn" id="btnPrint" style="margin-left:40%;">


                      
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>© <?php echo date('Y');?> <a href="http://www.banyaninfotech.com">The Banyan Infotech</a></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>

<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-migrate.js"></script>
<script src="js/lib/bootstrap.js"></script>
<script src="js/lib/jquery.ui.js"></script>
<script src="js/lib/jRespond.js"></script>
<script src="js/lib/nav.accordion.js"></script>
<script src="js/lib/hover.intent.js"></script>
<script src="js/lib/hammerjs.js"></script>
<script src="js/lib/jquery.hammer.js"></script>
<script src="js/lib/jquery.fitvids.js"></script>
<script src="js/lib/scrollup.js"></script>
<script src="js/lib/smoothscroll.js"></script>
<script src="js/lib/jquery.slimscroll.js"></script>
<script src="js/lib/jquery.syntaxhighlighter.js"></script>
<script src="js/lib/velocity.js"></script>
<script src="js/lib/smart-resize.js"></script>

<!--Tables-->
<script src="js/lib/footable.all.js"></script>

<!--Data Tables-->
<script src="js/lib/jquery.dataTables.js"></script>
<script src="js/lib/dataTables.responsive.js"></script>
<script src="js/lib/dataTables.tableTools.js"></script>
<script src="js/lib/dataTables.bootstrap.js"></script>

<!--Exportable Data Tables-->
<script src="js/lib/tableExport.js"></script>
<script src="js/lib/jquery.base64.js"></script>
<script src="js/lib/sprintf.js"></script>
<script src="js/lib/jspdf.js"></script>
<script src="js/lib/base64.js"></script>

<!--Forms-->
<script src="js/lib/jquery.maskedinput.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>

<!--Select2-->
<script src="js/lib/select2.full.js"></script>
<script src="js/lib/j-forms.js"></script>
<script src="js/apps.js"></script>
</body>
</html>