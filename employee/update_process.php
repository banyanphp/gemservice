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
$compid = $_REQUEST['query_12_id'];


$chk_comp = mysql_query("select * from complaints_2017 where id ='$compid' order by id desc");
$chk_comp_result = mysql_fetch_array($chk_comp);
?>
        <div class="row">
            <div class="col-md-12">
             
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3 style="font-weight:900">Completed the call </h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
					
                    <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12" style="height:450px">
                                    <form action="completed.php" class="j-forms" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform5();">

                                        <div class="form-content">
<source
  src="video.3gp"
  type='video/3gpp; codecs="mp4v.20.8, samr"'>
</source>
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