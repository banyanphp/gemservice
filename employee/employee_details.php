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
<?php include 'header.php' ?>
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
    <td width="80%" height="35" align="center" bgcolor="#FFFFFF"><table width="75%" border="0" cellpadding="0" cellspacing="0" class="border_all_dealer">
      <tr>
        <td height="35">&nbsp;</td>
        <td><table width="550" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="35" colspan="4" align="center" valign="middle" class="head1">EMPLOYEE DETAILS</td>
          </tr>
          <tr>
            <td width="34%" height="35" align="left" valign="top"><?php $x = mysql_query("select * from employee where id = '$id'");
			$y = mysql_fetch_array($x); ?></td>
            <td width="4%" height="35" align="left" valign="top">&nbsp;</td>
            <td width="62%" height="35" colspan="2" align="right" valign="middle"><form><input type="button"  class="btn btn-danger" onclick="window.location.href='list_employee.php'" value="Back" />
                      </form></td>
          </tr>
          
          <tr class="title">
            <td height="35" align="left" valign="middle">Employee Name</td>
            <td height="35" align="left" valign="middle">&nbsp;</td>
            <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['emp_name']; ?></td>
          </tr>
          
            <tr class="title">
              <td height="35" align="left" valign="middle">Gender</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['gender']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Employee Code</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['emp_code']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Department</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['dept']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Contact Cell No.</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['contact']; ?></td>
            </tr>
            <tr class="title">
            <td height="35" align="left" valign="middle">E-mail ID</td>
            <td height="35" align="left" valign="middle">&nbsp;</td>
            <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['email']; ?></td>
          </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle"><strong>Controls</strong></td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><strong>Permission</strong></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Users Zone</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['users']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">CMS</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['cms']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">News Section</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['news']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Employee Management</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['employee']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Import Data</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['import']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Complaint Registration</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['complaint']; ?></td>
            </tr>
            <tr class="title">
              <td height="35" align="left" valign="middle">Service Report</td>
              <td height="35" align="left" valign="middle">&nbsp;</td>
              <td height="35" colspan="2" align="left" valign="middle"><?php echo $y['service']; ?></td>
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