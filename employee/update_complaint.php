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
    <link type="text/css" rel="stylesheet" href="css/responsive.css"> <script type="text/javascript" src="print/jquery.min.js"></script>
</head>


<body class="leftbar-view">
<?php include 'session/session.php';  include 'header.php';?>
<section class="main-container">
<div class="container-fluid">
<?php include ("db/db_connect.php"); ?>


    <div class="row">
        <div class="col-md-12" style="height:442px">
           <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3 style="font-weight: 900;">Edit Complaint
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
                <div class="widget-container margin-top-10">
                    <div class="widget-content">
           
 <div class="row">
                                <div class="col-md-6">
                                    <form class="form-horizontal" id="addcity">
									 <div class="form-group">
                                            <label class="col-md-4 control-label">Complaint No</label>
                                            <div class="col-md-8">
											<?php
											$app=$_GET['appid'];
											$q=mysql_fetch_array(mysql_query("select complaint_no from complaints_2017 where id='$app'"));
											?>
                                               <input type="text" class="form-control" name="cno" value="<?php echo $q['complaint_no'];?>" disabled>
												</div>
												</div>
									   <div class="form-group">
                                            <label class="col-md-4 control-label">Select Team Member</label>
                                            <div class="col-md-8">
                                                <select class="form-control"  name="team" id="zone" >
													<option value="0">Select Team Member</option><?php $id=$_SESSION['team']; ?>
<?php $x = mysql_query("select * from team_members where team_member_id='$id'");
														while($y = mysql_fetch_array($x))
														{
															$ids=$y['team_members'];
															$xx = mysql_query("select * from employee where id='$ids'");
															$yy = mysql_fetch_array($xx);
														?><option value="<?php echo $yy['emp_code'];?>"><?php echo $yy['emp_name'];?>(<?php echo $yy['emp_code'];?>)</option> 									
														<?php }
 														?>
												
												  </select>
                                            </div>
                                        </div>
										
                                     <input type="hidden"  id="id" name="id" value="<?php echo $_GET['appid'];?>">
								 <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
								  <div class="form-group col-md-12" style="text-align:center">		<span id="success"  style="color:#139c9b;text-align:center"></span></div>
                                         <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <div class="form-actions">
                                                    <button type="button" name="button" class="btn btn-primary proceed" id="login_button">Save changes</button>
                                                    
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

<script>
$(function () {

    $("#login_button").click(function () {
      
var data = $("#addcity").serialize();

var zone = $("#zone").val();


        if (zone == '0')
        {
            $('#errors').html('Please Select Team members');
            $("#zone").focus();

            return false;
        }
		
		 
		
        else{
          
$.ajax({
type : 'POST',
url : 'update_complaint_processs.php',
data : data,
beforeSend: function(){
$("#errors").html('');
$("#login_button").html('Please Wait..');
},
success : function(response){
$("#login_button").html('Save Changes');
  if(response==1){
$("#success").html(" Service Engineer Alloted successfully!");
  }
  else{
	  $("#errors").html(response);

$("#errors").html("error Occured");
  }
document.getElementById("addcity").reset();

 setTimeout(function () {
                            $('#success').html('');
window.location.href='list_complaints.php'; 
                        }, 5000);
						
						
						 setTimeout(function () {
                            $('#errors').html('');
                        },5000);


}
});
}
return false;
});
});
</script>


</body>
</html>