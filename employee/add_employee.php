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

<body class="leftbar-view">
<?php include 'header.php' ?>
<section class="main-container">
<div class="container-fluid">
<?php include ("db/db_connect.php"); ?>


    <div class="row">
        <div class="col-md-12">
	
            <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3 style="font-weight: 900;">Add Employee
</h3>
                           
                        </div>
                        <div class="pull-right w-action">

                        </div>
                    </div>
                <div class="widget-container margin-top-10">
                    <div class="widget-content">
           
 <div class="row">

                                <div class="col-md-6 col-md-offset-3">
                                    <form class="form-horizontal" id="addcity">
									 	<div class="form-group">
                                            <label class="col-md-4 control-label">Employee Name</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" id="ename" name="ename" placeholder="Enter Engineer Name">
                                               
                                            </div>
                                        </div>
										 	<div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>
                                            <div class=" col-md-8">
                                                        <select class="form-control"  name="gender" id="gender">
														  <option selected="selected" value="0">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
														</select>
                                               
                                            </div>
                                        </div>
									   <div class="form-group">
                                            <label class="col-md-4 control-label">Employee Code</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="ecode" id="code" placeholder="Enter Engineer Code">
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Employee Department</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" id="edept" name="edept" placeholder="Enter Department">
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Contact Cell No.</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="ecell" id="ecell" placeholder="Enter Engineer Mobile">
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Email Id.</label>
                                            <div class=" col-md-8">
                                                <input type="text" class="form-control" name="e_mail" id="e_mail" placeholder="Enter Engineer Email">
                                               
                                            </div>
                                        </div>
											<div class="form-group">
                                            <label class="col-md-4 control-label">Password</label>
                                            <div class=" col-md-8">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Confirm Password">
                                               
                                            </div>
                                        </div>
											<div class="form-group">
                                            <label class="col-md-4 control-label">Confirm Password</label>
                                            <div class=" col-md-8">
                                                <input type="password" class="form-control" name="confirm_password" id="rpassword" placeholder="Enter  confirm_password">
                                               
                                            </div>
                                        </div>
										
										<h3>Controls</h3>
										
										
										
										<div class="form-group">
                                            <label class="col-md-4 control-label">Employee</label>
                                            <div class=" col-md-8">
                                               <input name="employee" type="checkbox" id="employee" value="yes"></td>
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                  
										<div class="form-group">
                                            <label class="col-md-4 control-label">Complaint Reg</label>
                                            <div class=" col-md-8">
                                               <input name="complaint" type="checkbox" id="complaint" value="yes"></td>
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Reports</label>
                                            <div class=" col-md-8">
                                               <input name="reports" type="checkbox" id="reports" value="yes"></td>
                                               
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-4 control-label">Pending Complaints</label>
                                            <div class=" col-md-8">
                                               <input name="pending" type="checkbox" id="pending" value="yes"></td>
                                               
                                            </div>
                                        </div>
										
								 <div class="form-group col-md-12" style="text-align:center">		<span id="errors"  style="color:#ff0000;text-align:center"></span></div>
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
var username = $("#ename").val();
var gender = $("#gender").val();


 var code = $("#code").val();
  var code = $("#code").val();
  var edept = $("#edept").val();
   var ecell = $("#ecell").val();
   var password = $("#password").val();
   var rpassword = $("#rpassword").val();
        if (username == '')
        {
            $('#errors').html('Enter name');
            $("#ename").focus();

            return false;
        }
		 if (gender == '0')
        {
            $('#errors').html('Please Select gender');
            $("#gender").focus();

            return false;
        }
		
		if (code == '')
        {
            $('#errors').html('Enter code');
            $("#code").focus();

            return false;
        }
		if (edept == '')
        {
            $('#errors').html('Enter Department');
            $("#edept").focus();

            return false;
        }
		 if (ecell == '')
        {
            $('#errors').html("Enter Mobile No");
            $("#ecell").focus();

            return false;
        }
		if (e_mail == '')
        {
            $('#errors').html('Enter email');
            $("#e_mail").focus();

            return false;
        }
		
                        if (password.length == 0) {
                            $('#errors').html('Enter Password');
                            //alert("Enter Password");
                          
                             $("#password").focus();
                            return false;
                        }
                        // check for minimum length
                        var minLength = 6; // Minimum length
                        if (password.length < minLength) {
                            $('#errors').html('Your password must be at least ' + minLength + ' characters long. Try again.');
                            $("#password").focus();
                            return false;
                        }

                        if (password!=rpassword) {
                            $('#errors').html('Password does not match. Please make sure.');
 $("#rpassword").focus();
                           
                            return false;
                        }
		 var x = $("#e_mail").val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        $('#errors').html('Enter vaild Email address');
	    $("#e_mail").focus();
        return false;
    }
        else{
          
$.ajax({
type : 'POST',
url : 'add_employee_process.php',
data : data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html(" Service Engineer added successfully!");
  }
  else{
$("#errors").html("Servie Engineer Already Exist");
  }
document.getElementById("addcity").reset();
 setTimeout(function () {
                            $('#success').html('');
                        }, 5000);
						
						
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

var id=countryId;            
                // alert(id);
if(id!=0){
                // alert('sss');
                $.ajax({
                    type: "POST",
                    url: 'find_state.php',
                    data: {
                        id: id,
                    },
                    success: function (data)
                    { $('#show').show();
						 $('#hide').hide();
                    $('#show').html(data);
                    },
                });






            }
else{
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
    $('#name').keypress(function(e) {
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