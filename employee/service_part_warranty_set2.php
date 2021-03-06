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
        <script type="text/javascript" src="print/jquery.min.js"></script>
    </head>

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



    <body class="leftbar-view">
      <?php include 'session/session.php';  include 'header.php';?>
        <section class="main-container">
            <div class="container-fluid">
                <?php include ("db/db_connect.php");include("fckeditor.php"); 
				
				
				$compid = $_REQUEST['appid'];

$chk_comp = mysql_query("select * from complaints_2017 where id ='$compid' order by id desc");
$chk_comp_result = mysql_fetch_array($chk_comp);
				?>


            </div>
			<?php if($chk_comp_result['warranty_claim_form'] == 'no') { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-wrap material-table-widget">

                            <div class="widget-container margin-top-0">
                                <div class="widget-content">

                                    <div class="row">

                                        <div class="col-md-6 col-md-offset-3">
                                            <form class="form-horizontal" id="addcity">
											<input type="hidden" name="query_10_id" value="<?php echo $chk_comp_result['id'] ?>">
                <input type="hidden" name="query_10_compno" value="<?php echo $chk_comp_result['complaint_no'] ?>">
                <input type="hidden" name="comp_customer1" value="<?php echo $chk_comp_result['customer'] ?>">
                <input type="hidden" name="comp_address" value="<?php echo $chk_comp_result['address'] ?>">
                <input type="hidden" name="comp_model" value="<?php echo $chk_comp_result['model'] ?>">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Branch Name</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="Branch" name="Branch" placeholder="Enter Branch Name">

                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">S.NO</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="sno" id="sno" placeholder="Enter sno">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Date Of Sale</label>
                                                    <div class=" col-md-8">
                                                       <input type="text" class="form-control input-date-picker"id="dateofsale" name="dateofsale">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Date Of Commissioning.</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control input-date-picker" id="dateofcommissioning" name="dateofcommissioning">
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-md-4 control-label">Date of Failure.</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control input-date-picker" id="dateoffailure" name="dateoffailure">
                                                    </div>
                                                </div>
												
												
												<div class="form-group">
                                                    <label class="col-md-4 control-label">Date of hours attended</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control input-date-picker"id="dateofhoursattend" name="dateofhoursattend">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Nature of Failure</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="natureoffailure" id="natureoffailure" placeholder="Enter nature of failure">

                                                    </div>
                                          
										  </div>
										  
										  <div class="form-group">
                                                    <label class="col-md-4 control-label">Parts Used Or Required</label>
                                                    <div class=" col-md-12" style="width:800px">
                                                       

                                                  
										  
										  
										 <?php
// Automatically calculates the editor base path based on the _samples directory.
// This is usefull only for these samples. A real application should use something like this:
// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.

include("fckeditor.php");$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1') ;
$oFCKeditor->BasePath	= $sBasePath ;

$oFCKeditor->Value		= '<table width="650" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="27" height="40" align="center" valign="middle"><strong>No</strong>.</td>
    <td width="168" align="center" valign="middle"><strong>Item Code</strong></td>
    <td width="368" align="center" valign="middle"><strong>Description</strong></td>
    <td width="87" align="center" valign="middle"><strong>Qty</strong>.</td>
  </tr>
  <tr>
    <td height="200" align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
</table>

';
$oFCKeditor->Create() ;
$cont = $oFCKeditor->Value;
?>
              </div>
                                          
										  </div>
                                           
										   
										    <div class="form-group">
                                                    <label class="col-md-4 control-label">Total Value(Rs.)</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="tot_value" id="tot_value" placeholder="Enter Rupees">

                                                    </div>
                                          
										  </div>
										  <div class="form-group">
                                                    <label class="col-md-4 control-label">Justification</label>
                                                    <div class=" col-md-8">
                                                        <textarea name="justification" id="justification" class="form-control"></textarea>

                                                    </div>
                                          
										  </div>
										  <div class="form-group">
                                                    <label class="col-md-4 control-label">Remarks</label>
                                                    <div class=" col-md-8">
                                                        <textarea  name="remarks" id="remarks"  class="form-control"></textarea>

                                                    </div>
                                          
										  </div>
										   <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style
="color:#ff0000;text-align:center"></span></div>
                                                <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">&nbsp;</label>
                                                    <div class="col-md-8">
                                                        <div class="form-actions">
                                                            <button type="button" name="button" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?> </div>
			<?php 
				
			if($chk_comp_result['approve1'] == 'no') {  
			
	
			if($chk_comp_result['notify1'] == '') { // mail notification
			
			$to_id = 'ramesh@gemindia.com';
			
			
			$sub = "Warranty Claim Form received from GEM INDIA";
			//$headers  = "From: GemIndia\r\n";
			//$headers  .= "Bcc: $bcc_id\r\n";
			$headers .= "Content-type: text/html\r\n"; 
			$description = 'You have received new warranty claim form. Please login to Employee Panel and Approve.';
			mail($to_id,$sub,$description,$headers);
			
			
			$updateid = $chk_comp_result['id'];
			mysql_query("update complaints_2017 set notify1 = 'yes' where id = '$updateid'");
			
			}
			?>
			
			  <div class="row">
                    <div class="col-md-12">
                        <div class="widget-wrap material-table-widget">

                            <div class="widget-container margin-top-0">
                                <div class="widget-content">

                                    <div class="row">
									 <div class="col-md-12">
<h3 style="text-align:center">    Warranty Claim Form is waiting for Approval 1</h3>
                                            </div>
</DIV>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?>
<?php  if(($chk_comp_result['approve2'] == 'no')&&($chk_comp_result['approve1'] == 'yes')) {  

			if($chk_comp_result['notify2'] == '') { // mail notification
			
			$to_id = 'ramesh@gemindia.com';
			
			
			$sub = "Warranty Claim Form received from GEM INDIA";
			//$headers  = "From: GemIndia\r\n";
			//$headers  .= "Bcc: $bcc_id\r\n";
			$headers= "Content-type: text/html\r\n"; 
			$description = 'You have received new warranty claim form. Please login to Employee Panel and Approve.';
			mail($to_id,$sub,$description,$headers);
			
			
			$updateid = $chk_comp_result['id'];
			mysql_query("update complaints_2017 set notify2 = 'yes' where id = '$updateid'");
			
			}
			?>
			
			  <div class="row">
                    <div class="col-md-12">
                        <div class="widget-wrap material-table-widget">

                            <div class="widget-container margin-top-0">
                                <div class="widget-content">

                                    <div class="row">
									 <div class="col-md-12">
<h3 style="text-align:center">    Warranty Claim Form is waiting for Approval 2</h3>
                                            </div>
</DIV>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?>
			
			

            <?php	
			
			
			
			
            
      if(($chk_comp_result['arrang_despatch_material'] == 'no')&&($chk_comp_result['approve2'] == 'yes')&&($chk_comp_result['approve1'] == 'yes')) { ?>
		   
		   				 <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3>Arrange & Despatch the material

</h3>
                       
                           
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

	    
$target_path ="../despatch/".$img_name;
	  


		
		move_uploaded_file($temp_name, $target_path);
		
		 		
			
		mysql_query("update comp_process_2017 set arrang_despatch_material = '$img_name', arrang_despatch_material_descr = '$send_quote_spares' where comp_no = '$query_4_compno'");
				mysql_query("update complaints_2017 set arrang_despatch_material = 'yes' where id = '$query_4_id'");
				
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
                                            <label class="col-md-4 unit">Arrange & Despatch the material
	</label>
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
                                                    <button type="submit" name="ser_submit" class="btn btn-primary proceed" >Save changes</button>
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
				
				 <?php } if($chk_comp_result['arrang_despatch_material'] == 'yes'){
					 
					 echo "<script>window.location.href='service_part_amc.php?appid=$compid'</script>";
					 
					 
				 }?>
            <!--Footer Start Here -->          
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

 <!--Rightbar End Here-->
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
<script src="js/lib/j-forms.js"></script>
<!--Forms Plugins-->
<script src="js/lib/jquery.tagsinput.js"></script>
<script src="js/lib/jquery.mask.js"></script>
<script src="js/lib/jquery.bootstrap-touchspin.js"></script>
<script src="js/lib/bootstrap-filestyle.js"></script>
<script src="js/lib/selectize.js"></script>
<script src="js/lib/bootstrap-datepicker.js"></script>
<script src="js/lib/moment.js"></script>
<script src="js/lib/daterangepicker.js"></script>

<script src="js/apps.js"></script>

        <!--Tables-->
       
        <script>
            $(function () {

                $("#login_button").click(function () {

                    var data = $("#addcity").serialize();
                   
                    var Branch = $("#Branch").val();
                    var sno = $("#sno").val();


                    var dateofsale = $("#dateofsale").val();
                    var dateofcommissioning = $("#dateofcommissioning").val();
                    var dateoffailure = $("#dateoffailure").val();
                    var dateofhoursattend = $("#dateofhoursattend").val();
                    var natureoffailure = $("#natureoffailure").val();
                    var tot_value = $("#tot_value").val();
                    var justification = $("#justification").val();
                    var remarks = $("#remarks").val();
                   
                    if (Branch == '')
                    {
                        $('#errors').html('Enter Branch name');
                        $("#Branch").focus();

                        return false;
                    }
                   
                    if (sno == '')
                    {
                        $('#errors').html('Enter sno');
                        $("#sno").focus();

                        return false;
                    }
                    if (dateofsale == '')
                    {
                        $('#errors').html('Enter dateofsale');
                        $("#dateofsale").focus();

                        return false;
                    }
                    if (dateofcommissioning == '')
                    {
                        $('#errors').html("Enter dateofcommissioning");
                        $("#dateofcommissioning").focus();

                        return false;
                    }if (dateoffailure == '')
                    {
                        $('#errors').html("Enter dateoffailure");
                        $("#dateoffailure").focus();

                        return false;
                    }
                    if (dateofhoursattend == '')
                    {
                        $('#errors').html('Enter dateofhoursattend');
                        $("#dateofhoursattend").focus();

                        return false;
                    }
					if (natureoffailure == '')
                    {
                        $('#errors').html('Enter natureoffailure');
                        $("#natureoffailure").focus();

                        return false;
                    }
	if (tot_value == '')
                    {
                        $('#errors').html('Enter Rupees');
                        $("#tot_value").focus();

                        return false;
                    }if (justification == '')
                    {
                        $('#errors').html('Enter justification');
                        $("#justification").focus();

                        return false;
                    }if (remarks == '')
                    {
                        $('#errors').html('Enter remarks');
                        $("#remarks").focus();

                        return false;
                    }

                else {

                        $.ajax({
                            type: 'POST',
                            url: 'update_complaint_process3.php',
                            data: data,
                            beforeSend: function () {
                                $("#errors").html('');

                            },
                            success: function (response) {
                              
                                if (response == 1) {
                                    $("#success").html(" Service Engineer added successfully!");
                                } else {
                                    $("#errors").html("Servie Engineer Already Exist");
                                }
                                
                                setTimeout(function () {
                                    $('#success').html('');
									location.reload();
                                }, 1000);


                                setTimeout(function () {
                                    $('#errors').html('');
                                }, 5000);


                            }
                        });
                    }
                    return false;
                });
            });
        </script>


        <script>

            function getplace(countryId) {

                var id = countryId;
                // alert(id);
                if (id != 0) {
                    // alert('sss');
                    $.ajax({
                        type: "POST",
                        url: 'find_state.php',
                        data: {
                            id: id,
                        },
                        success: function (data)
                        {
                            $('#show').show();
                            $('#hide').hide();
                            $('#show').html(data);
                        },
                    });






                } else {
                    $('#hide').show();
                    $('#show').hide();
                }
            }
        </script>
        <script type="text/javascript">
            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode == 32) {
                    return true;
                } else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
        <script>
            $('#name').keypress(function (e) {
                var regex = new RegExp("^[a-zA-Z]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }

                e.preventDefault();
                return false;
            });
        </script>
    </body>
</html>