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
</head><script type="text/javascript" language="javascript">
function checkform8(theform) {

if(document.theform.spares_req.value == 0)
{
alert("Please Select the Option");
document.theform.spares_req.focus();
return false;
}

}
</script>

<script type="text/javascript" language="javascript">
function checkform9(theform) {

if(document.theform.send_quote.value == 0)
{
alert("Please attach the File");
document.theform.send_quote.focus();
return false;
}

if(document.theform.send_quote_spares.value == 0)
{
alert("Please enter the Short Description");
document.theform.send_quote_spares.focus();
return false;
}

}
</script>
<script type="text/javascript" language="javascript">
function checkform10(theform) {

if(document.theform.get_po.value == 0)
{
alert("Please attach the File");
document.theform.get_po.focus();
return false;
}

if(document.theform.get_po_spares.value == 0)
{
alert("Please enter the Short Description");
document.theform.get_po_spares.focus();
return false;
}

}
</script>

<script type="text/javascript" language="javascript">
function checkform11(theform) {

if(document.theform.supply_spares.value == 0)
{
alert("Please Select the Option");
document.theform.supply_spares.focus();
return false;
}

}
</script>

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
echo  $chk_comp_result['spares_required_one'];
?>
        <div class="row">
            <div class="col-md-12">
          <?php if($chk_comp_result['spares_required_one'] == 'set') { ?>
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Spares Required
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
				
		  <?php if(isset($_POST['submit'])) { 
			  $spares_req = $_POST['spares_req'];
			  $query_1_id = $_POST['query_1_id'];
			  
			   $comp_attending = date('d - m - Y',strtotime('+330 minute')); // complaint attending date
			   
			  mysql_query("update complaints_2017 set spares_required_one = '$spares_req', comp_attending_date = '$comp_attending' where id = '$query_1_id'"); 
			  
		echo "<script>location.reload();</script>";

			  } ?>
              
			

                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform8();">

                                        <div class="form-content">
 <input type="hidden" name="query_1_id" value="<?php echo $chk_comp_result['id'] ?>">
                                        <div class="row">
                                            <label class="col-md-4 unit">Spares Required</label>
                                            <div class="col-md-8 ">
                                                 <select class="form-control"  name="spares_req" id="spares_req">
													<option value="0">SELECT</option>

														<option value="yes">Yes</option>
														<option value="no">No</option>
												  </select>
                                            </div>
                                            <!-- end prepend small file button -->
                                            <!-- start append small file button -->
                                           
                                        </div>
										

                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" name="submit" class="btn btn-primary proceed" id="login_button">Save changes</button>
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
                    



 <div class="row">
            <div class="col-md-12">
 <?php if($chk_comp_result['spares_required_one'] == 'yes') { ?>
 
 <?php if($chk_comp_result['send_quote_for_spares'] == 'no') { ?>
 <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Send Quote for Spares</h3>
                       
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					<?php
					if(isset($_POST['ser_submit'])) {  
					$send_quote_spares = $_POST['send_quote_spares'];
			$query_4_id = $_POST['query_4_id'];
			$query_4_compno = $_POST['query_4_compno'];
$rand=rand();
$file_name=$_FILES["send_quote"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["send_quote"]["tmp_name"];

	    $imgtype=$_FILES["send_quote"]["type"];

	    
$target_path = "../send_quote_spares/".$file_name;
	  


		
		move_uploaded_file($temp_name, $target_path);
		
		 		
				// $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); // call attending time
							mysql_query("update comp_process_2017 set send_quote_for_spares = '$img_name', send_quote_for_spares_descr = '$send_quote_spares' where comp_no = '$query_4_compno'");
				mysql_query("update complaints_2017 set send_quote_for_spares = 'yes' where id = '$query_4_id'");
				
				
				echo "<script>location.reload();</script>";
	
			
			}
			
 ?>
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform9();">

                                        <div class="form-content">
 <input type="hidden" name="query_4_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_4_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
                                        <div class="row">
                                            <label class="col-md-4 unit">Send Quote for Spares	</label>
                                            <div class="col-md-8 unit">
                                                <div class="input prepend-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input class="btn btn-success" type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;"name="send_quote">
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
                                                        <textarea  name="send_quote_spares" id="send_quote_spares"  class="form-control"></textarea>

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
				
				 <?php } 
				 
				 
				 if(($chk_comp_result['get_po'] == 'no')&&($chk_comp_result['send_quote_for_spares'] == 'yes')) 
				 {	 ?>
 <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Get PO for spares from Customer
</h3>
                       
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					<?php
					if(isset($_POST['po_submit'])) {  
						

			$get_po_spares = $_POST['get_po_spares'];
			$query_5_id = $_POST['query_5_id'];
			$query_5_compno = $_POST['query_5_compno'];
$rand=rand();
$file_name=$_FILES["get_po"]["name"];
	$img_name=$rand;
	$img_name.=$file_name;
	    $temp_name=$_FILES["get_po"]["tmp_name"];

	    $imgtype=$_FILES["get_po"]["type"];

	    
$target_path = "../po_for_spares/".$file_name;
	  


		
		move_uploaded_file($temp_name, $target_path);
		
		 		
				// $date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); // call attending time
									mysql_query("update comp_process_2017 set get_po = '$img_name', get_po_descr = '$get_po_spares' where comp_no = '$query_5_compno'");
				mysql_query("update complaints_2017 set get_po = 'yes' where id = '$query_5_id'");
				
				echo "<script>location.reload();</script>";
	
			
			}
			
 ?>
                 
				 
	 <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform10();">

                                        <div class="form-content">
                <input type="hidden" name="query_5_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_5_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
                                        <div class="row">
                                            <label class="col-md-4 unit">Get PO for spares from Customer
	</label>
                                            <div class="col-md-8 unit">
                                                <div class="input prepend-small-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input class="btn btn-success" type="file" onchange="document.getElementById('prepend-small-btn').value = this.value;"name="get_po">
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
                                                        <textarea  name="get_po_spares" id="get_po_spares"  class="form-control"></textarea>

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
                                                    <button type="submit" name="po_submit" class="btn btn-primary proceed" id="login_button">Save changes</button>
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
              	

		
				 
 <?php }  
 if(($chk_comp_result['supply_spares'] == 'no')&& ($chk_comp_result['get_po'] == 'yes')) {	 ?>
 <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Supply Spares</h3>
                       
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
                   <?php if(isset($_POST['ss_submit'])) { 
			  $supply_spares = $_POST['supply_spares'];
			  $query_6_id = $_POST['query_6_id'];
			  
			  mysql_query("update complaints_2017 set supply_spares = '$supply_spares' where id = '$query_6_id'"); 
			  
		echo "<script>location.reload();</script>";

			  } ?>
		
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform11();">

                                        <div class="form-content">
<input type="hidden" name="query_6_id" value="<?php echo $chk_comp_result['id'] ?>">                                        <div class="row">
                                            <label class="col-md-4 unit">Supply Spares</label>
                                            <div class="col-md-8 ">
                                                 <select class="form-control" name="supply_spares" id="spares_req">
													<option value="0">SELECT</option>

													 <option value="yes">Yes</option>
                  <option value="no">No</option>
												  </select>
                                            </div>
                                            <!-- end prepend small file button -->
                                            <!-- start append small file button -->
                                           
                                        </div>
										

                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="submit" name="ss_submit" class="btn btn-primary proceed" id="login_button">Save changes</button>
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
             			
	 
 <?php }  
 
 
 if(($chk_comp_result['supply_spares'] == 'yes')&&($chk_comp_result['supply_spares'] == 'yes')){
	echo "<script>window.location.href='service_part7.php?appid=$compid'</script>";
}
} 
 else if($chk_comp_result['spares_required_one']=='no'){
	 	echo "<script>window.location.href='service_part7.php?appid=$compid'</script>";

 }

 ?>
                    




					
					
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