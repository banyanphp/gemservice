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
   
<body class="leftbar-view">
<?php include 'header.php' ?>
<section class="main-container">
<div class="container-fluid">
<?php
include ("db/db_connect.php");
error_reporting('0');
if(isset($_REQUEST['update']))
{
$eid = $_REQUEST['eid'];
$edit_empname = $_REQUEST['edit_empname'];
$edit_gender = $_REQUEST['edit_gender'];
$edit_empcode = $_REQUEST['edit_empcode'];
$edit_dept = $_REQUEST['edit_dept'];
$edit_contact = $_REQUEST['edit_contact'];
$edit_email = $_REQUEST['edit_email'];
$edit_pending = $_REQUEST['edit_pending'];
$edit_report = $_REQUEST['edit_report'];

if($_REQUEST['edit_user'] == 'yes')
{ $edit_user = 'yes'; } else { $edit_user = 'no'; }

if($_REQUEST['edit_cms'] == 'yes')
{ $edit_cms = 'yes'; } else { $edit_cms = 'no'; }

if($_REQUEST['edit_news'] == 'yes')
{ $edit_news = 'yes'; } else { $edit_news = 'no'; }

if($_REQUEST['edit_employee'] == 'yes')
{ $edit_employee = 'yes'; } else { $edit_employee = 'no'; }

if($_REQUEST['edit_import'] == 'yes')
{ $edit_import = 'yes'; } else { $edit_import = 'no'; }

if($_REQUEST['edit_comp'] == 'yes')
{ $edit_comp = 'yes'; } else { $edit_comp = 'no'; }

if($_REQUEST['edit_service'] == 'yes')
{ $edit_service = 'yes'; } else { $edit_service = 'no'; }

if($_REQUEST['edit_pending'] == 'yes')
{ $edit_pending = 'yes'; } else { $edit_pending = 'no'; }
if($_REQUEST['edit_report'] == 'yes')
{ $edit_report = 'yes'; } else { $edit_report = 'no'; }


mysql_query("update employee set emp_name = '$edit_empname', gender = '$edit_gender', emp_code = '$edit_empcode', dept = '$edit_dept', contact = '$edit_contact', email = '$edit_email', users = '$edit_user', cms = '$edit_cms', news = '$edit_news', service = '$edit_service', employee = '$edit_employee', import = '$edit_import', complaint = '$edit_comp',reports='$edit_report',pending='$edit_pending' where id = '$eid'");
}

$appid = $_REQUEST['appid'];

?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="Box">
  
  <tr>
    <td height="90" colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
    <form action="edit_employee.php" method="post">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <?php 
if(isset($_REQUEST['update']))
{
$sql = mysql_query("SELECT * FROM employee where id = '$eid'");
} else {
$sql = mysql_query("SELECT * FROM employee where id = '$appid'");
}
$result = mysql_fetch_array($sql);

?>      
      <tr align="center" class="menu">
        <td height="25" align="left" class="text">&nbsp;</td>
        <td height="25" align="left" class="text">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr align="center" class="menu">
        <td width="11%" height="35" align="left" class="text">&nbsp;</td>
        <td width="28%" align="left" class="text">Employee Name</td>
        <td width="61%" height="35" align="left">
		<div class="form-group">
		<input type="text" class="form-control" name="edit_empname" id="textfield2" style="width:250px;" value="<?php echo $result['emp_name']; ?>"> <input type="hidden" name="eid" value="<?php echo $result['id']; ?>"></td>
		</div>
      </tr>
	  <tr></tr>
	 
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Gender</td>
        <td height="35"><span class="content">		<div class="form-group">
          <select name="edit_gender" class="form-control" id="select" style="width:255px;">
            <option selected="selected">Select</option>
            <option value="Male" <?php  if($result['gender'] == 'Male') { echo 'selected'; }?>>Male</option>
            <option value="Female" <?php  if($result['gender'] == 'Female') { echo 'selected'; }?>>Female</option>
          </select>
        </span></td></div>
      </tr>  <tr></tr>
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Employee Code</td>	
		
        <td height="35"><div class="form-group"><input type="text" class="form-control" name="edit_empcode" id="edit_cp" style="width:250px;" value="<?php echo $result['emp_code']; ?>" /></div></td>
      </tr>  <tr></tr>
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Department</td>	

        <td height="35">		<div class="form-group"><input type="text" class="form-control" name="edit_dept" id="edit_cp2" style="width:250px;" value="<?php echo $result['dept']; ?>" /></td></div>
      </tr>
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Contact Cell No.</td>		<div class="form-group">
        <td height="35">		<div class="form-group"><input type="text" class="form-control" name="edit_contact" id="edit_cp3" style="width:250px;" value="<?php echo $result['contact']; ?>" /></td></div>
      </tr>
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">E-mail ID</td>		<div class="form-group">
        <td height="35">		<div class="form-group"><input type="text"  class="form-control" name="edit_email" id="edit_cp4" style="width:250px;" value="<?php echo $result['email']; ?>" /></td></div>
      </tr>
      <tr align="left" valign="middle">
        <td height="35" align="left">&nbsp;</td>		<div class="form-group">
        <td height="35" align="left" ><strong>Controls</strong></td>
        <td height="35">&nbsp;</td>
      </tr>
      
      
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Employee</td>		
        <td height="35">
        <?php  if($result['employee'] == 'yes') { $employee = "checked='checked'"; }else { $employee = ""; }?>
     <div class="form-group">   <input type="checkbox"  name="edit_employee" id="edit_employee" <?php echo $employee; ?> value="yes"/></td>
      </tr>
     
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text">Complaint Registration</td>		
        <td height="35"><?php  if($result['complaint'] == 'yes') { $comp = "checked='checked'"; }else { $comp = ""; }?>
       <div class="form-group"> <input type="checkbox"  name="edit_comp" id="edit_import" <?php echo $comp; ?> value="yes"/></td>
      </tr>
      <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text"> Report</td>		
        <td height="35"><div class="form-group"><?php  if($result['reports'] == 'yes') { $service = "checked='checked'"; }else { $service = ""; }?>  <input type="checkbox" name="edit_report" id="edit_report" <?php echo $service; ?> value="yes"/></td>
      </tr>
      
	  
	   <tr align="left" valign="middle" class="menu">
        <td height="35" align="left">&nbsp;</td>
        <td height="35" align="left" class="text"> Pending Complaints</td>		
        <td height="35"><div class="form-group"><?php  if($result['pending'] == 'yes') { $service = "checked='checked'"; }else { $service = ""; }?>  <input type="checkbox" name="edit_pending" id="edit_pending" <?php echo $service; ?> value="yes"/></td>
      </tr>
      
      
      <tr align="center" class="menu">
        <td height="30" colspan="2">&nbsp;</td>
        <td height="30" align="left" valign="top">&nbsp;</td>
      </tr>
      <tr align="center" class="menu">
        <td height="30" colspan="2">&nbsp;</td>
        <td height="30" align="left" valign="top"><input name="update" type="submit" class="btn btn-sucess" id="button" value="Update"><br></td>
        </tr>
      <tr align="center" class="menu">
        <td height="20" colspan="3" class="check"><?php if(isset($_REQUEST['update'])) { ?><script>alert("Employee Details updated Successfully ");
		window.location.href='list_employee.php';
		</script><?php } ?></td>
        </tr>
    </table>
    </form></td>
  </tr>
</table>



    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                    
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
</body>
</html>