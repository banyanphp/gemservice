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

if(document.theform.service_order.value == 0)
{
alert("Please select service Order"");
document.theform.service_order.focus();
return false;
}

if(document.theform.gso_descr.value == 0)
{
alert("Please enter the Short Description");
document.theform.gso_descr.focus();
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
$chk_comp_result['spares_required_engg']
?>
        <div class="row">
            <div class="col-md-12">
         <?php if($chk_comp_result['engineer_attend_call'] == 'no') { ?>
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Engineer to attend the call

</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
				
		  <?php if(isset($_POST['submit'])) { 
			  $spares_req = $_POST['spares_req'];
			  $query_1_id = $_POST['query_1_id'];
			  	$date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); 
  $comp_timestamp = $_POST['comp_timestamp'];	
						  mysql_query("update complaints_2017 set engineer_attend_call = '$spares_req', attencall_timestamp = '$date_timestamp' where id = '$query_1_id'"); 

			  
	echo "<script>location.reload();</script>";

			  } ?>
              
			

                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform8();">
      <input type="hidden" name="comp_timestamp" value="<?php echo $chk_comp_result['comp_reg_timestamp'] ?>">
                                        <div class="form-content">
 <input type="hidden" name="query_1_id" value="<?php echo $chk_comp_result['id'] ?>">
                                        <div class="row">
                                            <label class="col-md-4 unit">

Engineer to attend the call
</label>
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
 <?php if(($chk_comp_result['spares_required_engg'] == 'set')&&($chk_comp_result['engineer_attend_call'] == 'yes')) { ?>
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Is any Spares Required?


</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
				
		  <?php if(isset($_POST['submit2'])) { 
			  $spares_req = $_POST['spares_req'];
			  $query_1_id = $_POST['query_9_id'];
			  	$date_timestamp = date('Y-m-d H:i:s',strtotime('+330 minute')); 
$comp_atten = date('d - m - Y',strtotime('+330 minute'));
			  mysql_query("update complaints_2017 set spares_required_engg = '$spares_req', comp_attending_date = '$comp_atten' where id = '$query_1_id'"); 

			  
echo "<script>location.reload();</script>";

			  } ?>
              
			

                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform8();">
     
                                        <div class="form-content">
<input type="hidden" name="query_9_id" value="<?php echo $chk_comp_result['id'] ?>">
                                        <div class="row">
                                            <label class="col-md-4 unit">

Is any Spares Required?

</label>
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
                                                    <button type="submit" name="submit2" class="btn btn-primary proceed" id="login_button">Save changes</button>
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
			   
			  
				       if(($chk_comp_result['spares_required_engg'] == 'yes') && ($chk_comp_result['engineer_attend_call'] == 'yes')){ 
					
	echo "<script>window.location.href='service_part_warranty_set2.php?appid=$compid'</script>";

			   }
				       if(($chk_comp_result['spares_required_engg'] == 'no') && ($chk_comp_result['engineer_attend_call'] == 'yes')){ 
					
	echo "<script>window.location.href='service_part_amc.php?appid=$compid'</script>";

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