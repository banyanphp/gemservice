 <!doctype html><?php error_reporting('0'); session_start();?>
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
<!--Topbar Start Here-->
<?php include 'session/session.php';  include 'header.php';?>
<!--Leftbar End Here-->
<!--Page Container Start Here-->
<section class="main-container">
<div class="container-fluid">


<div class="row">
<div class="col-md-12">
<div class="widget-wrap">
   
    <div class="widget-container">
        <div class="widget-content">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" class="j-forms" novalidate>

                        <div class="form-content">

                            <div class="w-section-header"><h3>Search By date</h3></div>

                            <!-- start single date -->
                            <!-- for proper datapicker work -->
                            <!-- don't forget to add appropriate javascript code to your form-->
                            <!-- from the bottom of this page-->
                            <div class="row">
                                <div class="col-md-3">
<label class="col-md-3 control-label">From </label>

                                    <div class="input col-md-9">
                                            <input  class="form-control" type="text" id="date-icon">
                                    </div>
                                </div>
                                
								<div class="col-md-3">
<label class="col-md-3 control-label">To</label>

                                   
                                        <div class="input col-md-9">
<input  class="form-control" type="text" id="date-widget">                                      
  </div>
                                       
                                   
                                </div>
<div class="col-md-5">
<label class="col-md-3 control-label">Status</label>

                                   
                                        <div class="input col-md-9">
                                       <select class="form-control" name="status" id="status">
                                                                <option value="1">All reports</option>
																
																<option value="Pending">Pending Reports</option>
																<option value="Process">Process Reports</option>
																<option value="Completed">Completed Reports</option>
																
</select> 
                                   
                                </div>   </div>

                            <!-- end single date -->
<div class="col-md-1">
                            <button type="button" name="ser_submit" class="btn btn-primary proceed" id="login_button">Search</button>  
                </div>             <!-- start popup time interval -->
                            <!-- for proper datapicker work -->
                            <!-- don't forget to add appropriate javascript code to your form-->
                           
                           
                            <!-- end Inline date -->

                        </div>
                        <!-- end /.content -->
 </div> 
                    </form>
                </div><span id="dataresponse"></span>


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
<!--Page Container End Here-->
<!--Rightbar Start Here-->

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
<script src="js/lib/additional-methods.js"></script>
<script src="js/lib/jquery-cloneya.js"></script>
<script src="js/lib/j-forms.js"></script>
<!--[if lt IE 10]>
<script src="js/lib/jquery.placeholder.min.js"></script>
<![endif]-->
<!--Select2-->
<script src="js/lib/select2.full.js"></script>
<script src="js/apps.js"></script>
<script>
            $(function () {

                $("#login_button").click(function () {
var fromdate= $("#date-icon").val();
var to= $("#date-widget").val();
var status= $("#status").val();

 $.ajax({
                        type: "POST",
                        url: 'employee_search_by_date.php',
                        data: {
                            fromdate: fromdate,
to:to,
status:status
                        },
                beforeSend: function () {
                    $("#login_button").html('Please Wait');

                },
                        success: function (data)
                        {
				 $("#login_button").html('Search');		
                          $("#dataresponse").html(data);  
                        },
                    });  
});
});
</script>
</body>
</html>