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

if(document.theform.pd_name.value == 0)
{
alert("Please select the status");
document.theform.pd_name.focus();
return false;
}
 var product = $("#product").val();


if(product == 'Need Help')
{
	 var showmodel_no = $("#ser_report1").val();
	if(showmodel_no == '') 
{
$("#ser_report1").focus();  
alert("Enter Remarks");
return false;
}
	 var file = $("#prepend-small-btn").val();
	if(file == '') 
{
$("#prepend-small-btn").focus();  
alert("please upload file");
return false;
}
}

if(product == 'Others')
{
	 var showmodel_no = $("#ser_report1").val();
	if(showmodel_no == '') 
{
$("#ser_report1").focus();  
alert("Enter Remarks");
return false;
}
	 var file = $("#prepend-small-btn").val();
	if(file == '') 
{
$("#prepend-small-btn").focus();  
alert("please upload file");
return false;
}
}
 var product = $("#product").val();

if(product == 'Completed'){
	
	var query_12_id = $("#query_12_id").val();
	var query_12_compno = $("#query_12_compno").val();
	
	window.location.href='update_process?query_12_id='+query_12_id +'query_12_compno='+query_12_compno; 

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
             
               <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3 style="font-weight: 900;">Complaint Number #<?php  echo $chk_comp_result['complaint_no'];?>
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
				 <div class="widget-container">
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="service_part_commisioning_process.php" class="j-forms"  id="addcity" method="post" novalidate enctype="multipart/form-data" name="theform" onSubmit="return checkform5();">

                                        <div class="form-content">

                                        <div class="row">
                                            <label class="col-md-4 unit "style="text-align: right;" >Status</label>
                                            <div class="col-md-8" style="">
                                                <div class="input prepend-small-btn">
                                                <select class="form-control"  name="pd_name" id="product"  onChange="getstatus(this.value)">
                                                            <option value="0">Select Status</option>
                                                                                                                    <option value="Goahead">Go ahead</option>

<option value="Completed">Completed</option><option value="Need Help">Need Help</option><option value="Need Spares1">Need Spares</option><option value="Others">Others</option>
                                                        </select>    
                                                </div>
                                            </div></div>
											  <div class="row"  id="showmodel_no" style="display:none">
											<label class="col-md-4 unit "style="text-align: right;" >Remarks</label>
                                            <div class="col-md-8" >
                                                <div class="input prepend-small-btn">
<textarea  name="ser_report1" id="ser_report1"  class="form-control"></textarea>
                                                </div>
                                            </div>
                                         
										 </div>
										 <div class="input prepend-small-btn unit" id="showfile" style="display:none;margin-top:13px">
										   			
												
<label class="col-md-4 unit "style="text-align: right;" >Choose file</label>

                                    <div class="col-md-8" >	              
                                                    <input class="form-control col-md-8" type="file"  name="report" id="prepend-small-btn" readonly="" placeholder="no file selected">
                                                </div>
												</div>
<input type="hidden" name="query_12_id" value="<?php echo $chk_comp_result['id'] ?>" id="query_12_id">
                <input type="hidden" name="query_12_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>" id="query_12_compno">
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

   <script>

            function getstatus(countryId) {

                var id = countryId;

                if (id == 'Need Help'|| id == 'Others' || id == 'Need Spares') {

                    $('#showmodel_no').show();
					 $('#showfile').show();
					
                } else {
                    $('#showmodel_no').hide();
					 $('#showfile').hide();
                }
               
			}
        </script>
       
</html>