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
<script type="text/javascript" language="javascript">
function checkform5(theform) {

if(document.theform.report.value == 0)
{
alert("Please attach the Service Report");
document.theform.report.focus();
return false;
}

if(document.theform.ser_report.value == 0)
{
alert("Please enter the Short Description");
document.theform.ser_report.focus();
return false;
}

}
</script><script type="text/javascript" language="javascript">
function checkform6(theform) {

if(document.theform.reports.value == 0)
{
alert("Please attach the Service Report");
document.theform.reports.focus();
return false;
}

if(document.theform.ser_report1.value == 0)
{
alert("Please enter the Short Description");
document.theform.ser_report1.focus();
return false;
}

}
</script>
<script type="text/javascript" language="javascript">
function checkform7(theform) {

if(document.theform.report_letter.value == 0)
{
alert("Please attach the Service Report along with Letter to the Customer");
document.theform.report_letter.focus();
return false;
}

if(document.theform.descr_letter.value == 0)
{
alert("Please enter the Short Description");
document.theform.descr_letter.focus();
return false;
}

}
</script>

<body class="leftbar-view">
<!--Topbar Start Here-->
<?php include 'session/session.php';  include 'header.php';
?>
<!--Page Container Start Here-->
<section class="main-container">
    <div class="container-fluid">
        <div class="page-header filled full-block light">
            </div><?php
			include ("db/db_connect.php");
$compid = $_REQUEST['appid'];


$chk_comp = mysql_query("select * from complaints_2017 where id ='$compid' order by id desc");
$chk_comp_result = mysql_fetch_array($chk_comp);
?>
        <div class="row">
            <div class="col-md-12">
              <?php if($chk_comp_result['complete_call'] == 'no') {   ?>
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Completed the call & Raise service report
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					<?php
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

	    

	  

	    $target_path = "../service_report/".$file_name;
		
		move_uploaded_file($temp_name, $target_path);
		
		 
		 		
				// $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); // call attending time
								
				mysql_query("update comp_process_2017 set complete_call_servicereport = '$img_name', complete_call_servicereport_descr = '$ser_report' where comp_no = '$query_12_compno'");
				mysql_query("update complaints_2017 set complete_call = 'yes' where id = '$query_12_id'");
				
				echo "<script>location.reload();</script>";
	
			
			}
			
 ?>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform5();">

                                        <div class="form-content">

                                        <div class="row">
                                            <label class="col-md-4 unit">Service Report</label>
                                            <div class="col-md-8 unit">
                                                <div class="input prepend-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input class="btn btn-success" type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;"name="report">
                                                    </div>
                                                    <input class="form-control" type="text" id="prepend-small-btn" readonly="" placeholder="no file selected">
                                                </div>
                                            </div>
                                            <!-- end prepend small file button -->
                                            <!-- start append small file button -->
                                           
                                        </div>
										 <div class="form-group">
                                                    <label class="col-md-4 control-label">Short Description</label>
                                                    <div class=" col-md-8">
                                                        <textarea  name="ser_report" id="ser_report"  class="form-control"></textarea>

                                                    </div>
                                          
										  </div>
<input type="hidden" name="query_12_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_12_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
										   <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" name="ser_submit" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end j-row -->


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } ?>
                    




<?php if($chk_comp_result['engg_complete_report'] == 'no'&& $chk_comp_result['complete_call'] == 'yes') {   ?>
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Engineer to complete the report in call Register
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					<?php
					if(isset($_POST['ser_submit1'])) {  
			$ser_report = $_POST['ser_report1'];
			
			$query_12_id = $_POST['query_13_id'];
			$query_12_compno = $_POST['query_13_compno'];
$rand=rand();
$file_name=$_FILES["reports"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["reports"]["tmp_name"];

	    $imgtype=$_FILES["reports"]["type"];

	    

	  

	    $target_path = "../call_register/".$file_name;
		
		move_uploaded_file($temp_name, $target_path);
		
		 $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); 
				$comp_timestamp = $_POST['comp_timestamp'];
				
				$to_time=strtotime($comp_timestamp);
				$from_time=strtotime($date_timestamp);
				round(abs($to_time - $from_time) / 3600)." hours";
								
		 		
				// $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); // call attending time
				mysql_query("update comp_process_2017 set report_call_register  = '$img_name', report_call_register_descr = '$ser_report' where comp_no = '$query_12_compno'");
				mysql_query("update complaints_2017 set engg_complete_report = 'yes', complete_report_timestamp = '$date_timestamp' where id = '$query_12_id'");
	
					echo "<script>location.reload();</script>";
			}
			
 ?>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform6();">
     <input type="hidden" name="query_13_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="comp_timestamp" value="<?php echo $chk_comp_result['comp_reg_timestamp'] ?>">
                <input type="hidden" name="query_13_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
                                        <div class="form-content">

                                        <div class="row">
                                            <label class="col-md-4 unit">Service Report</label>
                                            <div class="col-md-8 unit">
                                                <div class="input prepend-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input class="btn btn-success" type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;"name="reports">
                                                    </div>
                                                    <input class="form-control" type="text" id="prepend-small-btn" readonly="" placeholder="no file selected">
                                                </div>
                                            </div>
                                            <!-- end prepend small file button -->
                                            <!-- start append small file button -->
                                           
                                        </div>
										 <div class="form-group">
                                                    <label class="col-md-4 control-label">Short Description</label>
                                                    <div class=" col-md-8">
                                                        <textarea  name="ser_report1" id="ser_report1"  class="form-control"></textarea>

                                                    </div>
                                          
										  </div>
<input type="hidden" name="query_12_id1" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_12_compno1" value="<?php echo $chk_comp_result['complaint_no'] ?>">
										   <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" name="ser_submit1" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end j-row -->


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } ?>
                    

<?php if($chk_comp_result['send_service_report'] == 'no'&& $chk_comp_result['complete_call'] == 'yes'&& $chk_comp_result['engg_complete_report'] == 'yes') {   ?>
            

			<?php if(isset($_POST['letter_submit'])) {  
			$descr_letter = $_POST['descr_letter'];
			$cus_email = $_POST['cus_email'];
			$query_14_id = $_POST['query_14_id'];
			$query_14_compno = $_POST['query_14_compno'];
			
		$rand=rand();
$file_name=$_FILES["report_letter"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["report_letter"]["tmp_name"];

	    $imgtype=$_FILES["report_letter"]["type"];

	    

	  

	    $target_path = "../report_letter/".$file_name;
		
		move_uploaded_file($temp_name, $target_path);

								
				mysql_query("update comp_process_2017 set send_service_report = '$img_name', send_service_report_descr = '$descr_letter' where comp_no = '$query_14_compno'");
				mysql_query("update complaints_2017 set send_service_report = 'yes' where id = '$query_14_id'");
				
				
						echo "<script>location.reload();</script>";
				
				
			
			
			}
			
		

 ?>
			
			
			
			
			
			
			
			
			<div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Send Service Report along with Letter to the Customer
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					
					
					<div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform7();">
    <input type="hidden" name="query_14_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="cus_email" value="<?php echo $chk_comp_result['email'] ?>">
                <input type="hidden" name="query_14_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
                                        <div class="form-content">

                                        <div class="row">
                                            <label class="col-md-4 unit">Service Report along with letter to the customer</label>
                                            <div class="col-md-8 unit">
                                                <div class="input prepend-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input class="btn btn-success" type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;"name="report_letter" id="report_letter">
                                                    </div>
                                                    <input class="form-control" type="text" id="prepend-small-btn" readonly="" placeholder="no file selected">
                                                </div>
                                            </div>
                                            <!-- end prepend small file button -->
                                            <!-- start append small file button -->
                                           
                                        </div>
										 <div class="form-group">
                                                    <label class="col-md-4 control-label">Short Description</label>
                                                    <div class=" col-md-8">
                                                        <textarea  name="descr_letter" id="descr_letter"  class="form-control"></textarea>

                                                    </div>
                                          
										  </div>
<input type="hidden" name="query_12_id1" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_12_compno1" value="<?php echo $chk_comp_result['complaint_no'] ?>">
										   <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" name="letter_submit" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end j-row -->


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <?php } 
			    if($chk_comp_result['send_service_report'] == 'yes'&& $chk_comp_result['complete_call'] == 'yes'&& $chk_comp_result['engg_complete_report'] == 'yes') {   
			
			 $comp_close = date('d - m - Y',strtotime('+330 minute'));
			mysql_query("update complaints_2017 set status = 'Completed', comp_closing_date = '$comp_close' where id = '$compid'"); 
			
			$cusno = mysql_query("select * from complaints_2017 where id = '$compid'");
			$cusnumber = mysql_fetch_array($cusno);
			
			$cc_comp_no = $cusnumber['complaint_no'];
			$cc_ser_engg = $cusnumber['ser_eng_code'];
			
			$eng_alloted = mysql_query("select engineers from service_engineers where eng_code = '$cc_ser_engg'");
			$eng_alloted_name = mysql_fetch_array($eng_alloted);
			$engineer_name = $eng_alloted_name['engineers'].")";
			
			 $to_id = "service@gemindia.com";
			 $bcc_id = "ramesh@gemindia.com";
			$sub = "Service complaint has been closed";
			$headers  = "From: GemIndia\r\n";
			$headers  .= "Bcc: $bcc_id\r\n";
			$headers .= "Content-type: text/html\r\n"; 
			$description = 'Complaint Number : '.$cc_comp_no.' has been closed. Call Attended by '.$cc_ser_engg.' ( '.$engineer_name.' )';
			mail($to_id,$sub,$description,$headers);
			
			
			$cellno = $cusnumber['cell_no'];
			$compno = $cusnumber['complaint_no'];
			$status = $cusnumber['status'];
			
		$phonNo = $cellno.",9345631697";
		
		$message = "GEM Equipments (P) Ltd.\r\n";
		$message .= "Complaint No : ".$compno."\r\n";
		$message .= "Status : ".$status."\r\n";
		
		$message1 = urlencode($message);

				echo "<script>location.href='list_completed_complaints.php';</script>";
			
			 }
			
			
			   
			   ?>
                    

					
					
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
<!--Page Container End Here-->
<!--Rightbar Start Here-->

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
<!--Forms-->
<script src="js/lib/jquery.maskedinput.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>
<script src="js/lib/additional-methods.js"></script>
<script src="js/lib/j-forms.js"></script>
<!--[if lt IE 10]>
<script src="js/lib/jquery.placeholder.min.js"></script>
<![endif]-->
<!--Select2-->
<script src="js/lib/select2.full.js"></script>
<script src="js/lib/jquery.loadmask.js"></script>
<script src="js/apps.js"></script>



</body>
</html>