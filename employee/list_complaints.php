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
<?php include 'session/session.php';  include 'header.php';?>
<section class="main-container">
<div class="container-fluid">


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3 style="font-weight: 900;">Ongoing Process Complaints List</h3>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="data-align-right">
                                        <div class="tbl-action-toolbar">
                                            <ul>
                                            
                                                <a href="export_process_complaints.php" class="btn btn-info " ><i class="zmdi zmdi-archive"></i> Export Excel</a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <span class="tfh-label">Search: </span>
                                            <input class="form-control" id="filter" type="text"/>
                                        </div>
                                        
                                    </div>
                                </div>
                              <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-md-offset-8 col-sm-offset-8">
                                            <span class="tfh-label">Data: </span>
                                            <select id="change-page-size" class=" form-control">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
												   <option value="100000">All</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <table id="exportable-tbl" class="table foo-data-table-filterable" data-filter="#filter" data-filter-text-only="true" data-page-size="8" data-limit-navigation="3">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true">
                                    S.No
                                </th>
								<th  data-hide="phone">
                                   Complaint Number
                                </th>
                                <th  data-hide="phone">
                                   Customer Name
                                </th>
                                <th  data-hide="phone">
                              Complaint <br>
							  Date
                                </th>
								<th  data-hide="phone">
                              Complaint <br>
							  Attending <br>
							  date
                                </th>
								<th  data-hide="phone">
                              Complaint <br>
							  Closing <br>
							  date
                                </th>
                                <th  data-hide="phone">
                                    Details
                                </th>
                                <th>
                                    Action
                                </th>
                                <th  data-sort-ignore="true" data-hide="phone"></th>
                            </tr>
                            </thead>
                            <tbody>
							
							 <?php 
include ("db/db_connect.php");
$sl=0;
$code=$_SESSION['emp_code'];
$sql = "SELECT * FROM complaints_2017 where team!='' and service_engineer_allotment='Yes' and ser_eng_code='$code' and status='Pending'  order by complaint_no ";

$result = mysql_query($sql);
while($query = mysql_fetch_array($result)){
	$sl++;
?>
                            <tr>
							 <td><?php echo $sl; ?></td>
                                <td><?php echo $query['complaint_no']; ?></td>
                                <td><?php echo $query['customer']; ?></td>
                                <td><?php echo $query['complaint_date']; ?></td>
                                <td><?php echo $query['comp_attending_date']; ?></td>
                                <td><?php echo $query['comp_closing_date']; ?></td>
                               
                                <td data-value="1"><a class="label label-success"  title="Active" href="complaint_details.php?id=<?php echo $query['id']; ?>">Details</span></a></td>
								
								<td class="td-right"><?php if ($query['complaint_category'] == 'COMPLAINT') { ?> <a class="row-edit" href="service_part_complaint_commissioning.php?appid=<?php echo $query['id']; ?>"><span class="zmdi zmdi-edit"></span></a><?php } ?> 
								<?php if ($query['complaint_category'] == 'AMC') { ?> <a class="row-edit" href="service_part_amc_commissioning.php?appid=<?php echo $query['id']; ?>"><span class="zmdi zmdi-edit"></span></a><?php }  ?>
<?php if (($query['complaint_category'] == 'PRE-COMMISSIONING')||($query['complaint_category'] == 'COMMISSIONING')||($query['complaint_category'] == 'ON CALLS')||($query['complaint_category'] == 'ERECTION')||($query['complaint_category'] == 'GENERAL')) { ?>								
								
								<a class="row-edit" href="service_part_commisioning.php?appid=<?php echo $query['id']; ?>"><span class="zmdi zmdi-edit"></span></a><?php } ?>
							
								</td>
<?php } ?>
                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="6" class="footable-visible">
                                    <div class="pagination pagination-centered"></div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
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
  <script language="JavaScript" type="text/javascript">
            function fndelete(id) {



                var result = confirm("Are you sure for delete ?");
                //alert(id);
                if (result)
                {
                    // alert('sss');
                    $.ajax({
                        type: "POST",
                        url: 'delete_employee.php',
                        data: {
                            id: id,
                        },
                        success: function (data)
                        {
                            alert(data);
                           

                            location.reload();
                        },
                    });

                }




            }
        </script>
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