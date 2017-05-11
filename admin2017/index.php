<?php 
session_start();

if($_SESSION['user_id'] == "")

{

header("Location:login.php");
}
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Gem Service </title>
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
    <link type="text/css" id="themes" rel="stylesheet" href="#">
</head>
<body class="leftbar-view">
<?php  include 'header.php';include 'session/session.php';?>
<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Dashboard</h2>
            
        </div>
        
    </div>
</div>

<div class="row">
 <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Pending Complaints : <?php include 'db/db_connect.php';
				$query=mysql_query("select id from complaints_2017 where ser_eng_code=''");
				echo mysql_num_rows($query); ?></h3>
</h3>
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:130px">
               
				<?php include 'db/db_connect.php';
 $date = date("Y-m-d H:i:s", strtotime('-54 hours', time())); 
	 $dates = date("Y-m-d H:i:s", strtotime('-30 hours', time())); 	
?><p style="color:#fff;float:left;font-size: 18px;">More than 48 Hours:</p>
<p  style="color:#fff;text-align: right;font-size: 23px;margin-top: 1px;margin-left: 45px;">
<?php
		echo mysql_num_rows(mysql_query("select id from complaints_2017 where ser_eng_code='' and comp_reg_timestamp > '$date' ")); ?></h3></p><p style="color:#fff;float:left;font-size: 18px;">More than 24 Hours:</p>
		<p  style="color:#fff;text-align: right;font-size: 23px;margin-top: 1px;margin-left: 45px;"><?php
		echo mysql_num_rows(mysql_query("select id from complaints_2017 where ser_eng_code='' and comp_reg_timestamp < '$dates' and  comp_reg_timestamp >'$date'")); ?></p>
                </div>
            </div>
        </div>
		    <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Completed complaints</h3>
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:130px;    background-color: #00796Bohe!important">
                <h3 style="color:#fff;text-align:right">
				<?php include 'db/db_connect.php';
 $date = date("Y-m-d H:i:s", strtotime('-54 hours', time())); 
 $dates = date("Y-m-d H:i:s", strtotime('-30 hours', time())); 
 
?><p style="color:#fff;float:left;font-size: 18px;">In 24 hrs :</p>	

<p  style="color:#fff;text-align: right;font-size: 23px;margin-top: 1px;margin-left: 45px;">

<?php 	echo mysql_num_rows(mysql_query("select id from complaints_2017 where status='Completed' and comp_closing_date > '$date'")); ?></h3></p>
<p style="color:#fff;float:left;font-size: 18px;">In 48 hrs :</p><p  style="color:#fff;text-align: right;font-size: 23px;margin-top: 1px;margin-left: 45px;">	<?php
 echo mysql_num_rows(mysql_query("select id from complaints_2017 where status='Completed' and comp_closing_date > '$dates' and comp_closing_date < '$date' ")); ?></h3>           </p>     </div>
            </div>
        </div>
	
	      
   
   </div>
<div class="row">
<?php date_default_timezone_set('Asia/Kolkata'); ?>
       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Total Complaints</h3>
              <h3 style="visibility: hidden;">Total Complaints</h3>
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;">
             <div class="admin-user-thumb">
						<h3 style="color:#fff;text-align:right;">&nbsp;<?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from complaints_2017")); ?></h3>
                </div>
			
                </div>
            </div>
        </div>
 
      
       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Pending Complaints</h3>
                
            </div>
               <div class="w_bg_teal stats-chart-container" style="height:80px;background-color: #FF5722!important;">
             <div class="admin-user-thumb">

                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';
echo mysql_num_rows(mysql_query("select id from complaints_2017 where ser_eng_code=''"));?></h3>
                </div>
			
                </div>
           
            </div>
        </div>
  
	       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Processing Complaints</h3>
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;    background-color: #00796B!important;">
                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from complaints_2017 where status='process'"));?></h3>

                </div>
            </div>
        </div>
		   <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Completed Complaints</h3>
                
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;   background-color: #C2185B!important">
                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from complaints_2017 where status='completed'"));?></h3>

                </div>
            </div>
        </div>
   
   </div>
<div class="row">
<?php date_default_timezone_set('Asia/Kolkata'); ?>
       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Total Employee</h3>
              <h3 style="visibility: hidden;">Total Employee</h3>
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;">
             <div class="admin-user-thumb">
						<h3 style="color:#fff;text-align:right;">&nbsp;<?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from employee")); ?></h3>
                </div>
			
                </div>
            </div>
        </div>
 
      
       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Total Service Engineers</h3>
                
            </div>
               <div class="w_bg_teal stats-chart-container" style="height:80px;background-color: #FF5722!important;">
             <div class="admin-user-thumb">

                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from service_engineers")); ?></h3>
                </div>
			
                </div>
           
            </div>
        </div>
  
	       <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Total Team</h3>
               <h3 style="visibility: hidden;">Total Employee</h3> 
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;    background-color: #00796B!important;">
                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from team")); ?></h3>
                </div>
            </div>
        </div>
		   <div class="col-md-3 col-sm-3">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Total Team Members</h3>
                
            </div>
            
            <div class="w_bg_teal stats-chart-container" style="height:80px;    background-color: #C2185B!important">
                <h3 style="color:#fff;text-align:right"><?php include 'db/db_connect.php';echo mysql_num_rows(mysql_query("select id from team_members")); ?></h3>
                </div>
            </div>
        </div>
   
   </div>

  
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

<script src="js/lib/velocity.js"></script>

<script src="js/lib/smart-resize.js"></script>
<!--iCheck-->
<script src="js/lib/icheck.js"></script>
<script src="js/lib/jquery.switch.button.js"></script>
<!--CHARTS-->
<script src="js/lib/chart/sparkline/jquery.sparkline.js"></script>
<script src="js/lib/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="js/lib/chart/flot/excanvas.min.js"></script>
<script src="js/lib/chart/flot/jquery.flot.min.js"></script>
<script src="js/lib/chart/flot/curvedLines.js"></script>
<script src="js/lib/chart/flot/jquery.flot.time.min.js"></script>
<script src="js/lib/chart/flot/jquery.flot.stack.min.js"></script>
<script src="js/lib/chart/flot/jquery.flot.axislabels.js"></script>
<script src="js/lib/chart/flot/jquery.flot.resize.min.js"></script>
<script src="js/lib/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/lib/chart/flot/jquery.flot.spline.js"></script>
<script src="js/lib/chart/flot/jquery.flot.pie.min.js"></script>
<!--Forms-->
<script src="js/lib/jquery.maskedinput.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/jquery.form.js"></script>
<script src="js/lib/j-forms.js"></script>
<script src="js/lib/jquery.loadmask.js"></script>
<script src="js/lib/vmap.init.js"></script>

<script src="js/apps.js"></script>
</body>
</html>