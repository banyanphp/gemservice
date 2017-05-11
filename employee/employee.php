 <!doctype html><?php error_reporting('0');
session_start(); ?>
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
<?php   include 'header.php';include ("db/db_connect.php");?>
<section class="main-container">
<div class="container-fluid">


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                      <div class="row"><div class="col-md-12">
<div class="form-group">
                                                    <label class="col-md-1 control-label">From Date</label>
                                                    <div class=" col-md-3">
                                                       <select class="form-control" id="employee">
<?php $sql=mysql_query("select * from service_engineers");
while ($row=mysql_fetch_array($sql)){?>
<option value="<?php echo $row['eng_code'];?>"><?php echo $row['engineers'];?></option>
<?php } ?>
</select>
<?php print_r($row); ?>                                            </div>
                                                </div>
                                            <button type="button" name="ser_submit" class="btn btn-primary proceed" id="login_button">Search</button>


 
</div>
<span id="dataresponse"></span>
                      
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
  <script>
            $(function () {

                $("#login_button").click(function () {
var fromdate= $("#employee").val();

 $.ajax({
                        type: "POST",
                        url: 'employee_search_person.php',
                        data: {
                            fromdate: fromdate,

                        },
                        success: function (data)
                        {
                          $("#dataresponse").html(data);  
                        },
                    });  
});
});
</script>
</body>
</html>