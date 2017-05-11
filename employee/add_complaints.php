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
        <link type="text/css" rel="stylesheet" href="css/responsive.css"><script type="text/javascript" src="print/jquery.min.js"></script>

    </head>

    <body class="leftbar-view">
        <?php include 'session/session.php';
        include 'header.php'; ?>
        <section class="main-container">
            <div class="container-fluid">
<?php include ("db/db_connect.php"); ?>


                <div class="row">
                    <div class="col-md-12">
                 <div class="widget-wrap">
                    <div class="widget-header block-header margin-bottom-0 clearfix">
                        <div class="pull-left">
                            <h3 style="font-weight: 900;">Add Complaints
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
                                                    <label class="col-md-4 control-label">Date</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="date" name="date" value="<?php echo date("d/m/Y") ?>" disabled>

                                                    </div>
                                                </div>
                                                <?php
                                                $q = mysql_fetch_array(mysql_query("select complaint_no from complaints_2017 order by complaint_no desc"));
                                                ?>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Complaint No</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="cno" name="compno" value="<?php echo $q['complaint_no'] + 1; ?>" disabled>

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Select Product</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control"  name="pd_name" id="product"  onChange="getplace(this.value)">
                                                            <option value="0">Select Product</option>
                                                            <?php
                                                            $x = mysql_query("select * from tbl_products");
                                                            while ($y = mysql_fetch_array($x)) {
                                                                ?><option value="<?php echo $y['products_name']; ?>"><?php echo $y['products_name']; ?></option> 									
                                                            <?php }
                                                            ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Product Model</label>
                                                    <div class="col-md-8">
                                                        <select name="place"  class="form-control" id="hide">
                                                            <option value=''>Select Product First</option>
                                                        </select>
                                                        <span id="show"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="showmodel_no" style="display:none"> 
                                                    <label class="col-md-4 control-label">Model No</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" id="mno" name="model_num" value="" style="width: 85px;">            
                                                        <input type="text"  id="mno1" name="model_num1" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Service Category</label>
                                                    <div class="col-md-8">
                                                        <select name="place"  class="form-control" id="hide-category">
                                                            <option value=''>Select Product Model First</option>
                                                        </select>
                                                        <span id="show-category"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group" id="hide-complaint" style="display:none">
                                                    <label class="col-md-4 control-label" >Complaint Type</label>
                                                    <div class="col-md-8">
                                                        <select name="place"  class="form-control" id="hide-complaint" style="display:none">
                                                            <option value=''>Select Product Model First</option>
                                                        </select>
                                                       
                                                    </div>
                                                </div>
 <span id="show-complaint"></span>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Purchased Through</label>
                                                    <div class="col-md-8">
                                                        <select name="pur_through"  class="form-control" id="dealer" >
                                                            <option value='0'>Select Dealer</option>
                                                            <?php $q = mysql_query("select name from dealer");
                                                            while ($row = mysql_fetch_array($q)) { ?><option value='<?php echo $row['name']; ?>'><?php echo $row['name']; ?><?php } ?></option>

                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="form-group"> 
                                                    <label class="col-md-4 control-label">Mc/sL No</label>
                                                    <div class=" col-md-8">
                                                        <input type="text"  id="MCSL" name="mcsnum" value="" style=" width: 85px;" placeholder="MCSL" maxlength="5">
                                                        <input type="text" id="month" name="mcs2" value="" style="width: 85px;" placeholder="MM" size="2" maxlength="2" >

                                                        <input type="text"  id="year" name="mcs3"  maxlength="4" style="width: 85px;" placeholder="YYYY" >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Warranty Status</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control"  id="show-warranty" name="warrantys" placeholder="Warranty Status" disabled> 
<input type="hidden" class="form-control"  id="warranty" name="warranty"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Company Name</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="cname" name="customername" placeholder="Enter Company Name">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address(city)</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="ccity" name="city" placeholder="Enter Address(city)">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address(street)</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter Address(street)">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address(landmark)</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Enter Address(landmark)">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Pincode</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="Pincode" name="pin" placeholder="Enter Pincode">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Contact Person Name</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="ContactPersonName" name="contactperson" placeholder="Enter Contact Person Name">

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Phone No</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="phones" name="phoneno" placeholder="Enter Phone No" onKeyPress="return isNumberKey(event)">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Customer Cell No</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" id="cellno" name="cellno" placeholder="Enter cellno" onKeyPress="return isNumberKey(event)">

                                                    </div>
                                                </div>





                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Email Id.</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="email" id="e_mail" placeholder="Enter Engineer Email">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Add On Phone Number.</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="addon_phoneno" id="ecell" placeholder="Enter Add On Phone Number" onKeyPress="return isNumberKey(event)">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Add On Email Id.</label>
                                                    <div class=" col-md-8">
                                                        <input type="text" class="form-control" name="addon_email" id="add_on_e_mail" placeholder="Enter Add On Email">

                                                    </div>
                                                </div>

<input type="hidden" name="user" value="<?php echo $_SESSION['emp_code']; ?>">
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


                                                            $("#year").focus(function () {
                                                            }).blur(function () {
                                                                var month = $("#month").val();
                                                                var year = $("#year").val();
 var yearlength =year.length;
var city = $("#city").val(); var d = new Date();
    var n = d.getFullYear();var s = d.getMonth();
if(month>12){
	 $('#errors').html('Please 	Enter less than 12');
     $("#month").focus();
}
if(year>n && month> s){
	 $('#errors').html('Please 	Enter less than Current Year and current month');
     $("#year").focus();
}
if(yearlength<4){
	 $('#errors').html('Please 	Enter four digit');
     $("#year").focus();
}

else{                                                               
															   $.ajax({
                                                                    type: "POST",
                                                                    url: 'find_warranty.php',
                                                                    data: {
                                                                        month: month,
                                                                        year: year,
																		city:city,
                                                                    },
                                                                    success: function (data)
                                                                    {

                                                                        $('#show-warranty').val(data);
 $('#warranty').val(data);
                                                                    },
                                                                });

}
                                                            });





															



                                                            $("#login_button").click(function () {

                                                                var data = $("#addcity").serialize();

                                                                var product = $("#product").val();
                                                                var city = $("#city").val();


                                                                var category = $("#category").val();
                                                                var complaint = $("#complaint").val();
                                                                var dealer = $("#dealer").val();
                                                                var MCSL = $("#MCSL").val();
                                                                var month = $("#month").val();
                                                                var year = $("#year").val();
                                                                var cname = $("#cname").val();
                                                                var showwarranty = $("#show-warranty").val();
                                                                var ccity = $("#ccity").val();
                                                                var street = $("#street").val();
                                                                var landmark = $("#landmark").val();
                                                                var Pincode = $("#Pincode").val();
                                                                var ContactPersonName = $("#ContactPersonName").val();
                                                                var phone = $("#phones").val();
                                                                var cellno = $("#cellno").val();
                                                                var e_mail = $("#e_mail").val();    var add_on_e_mail= $("#add_on_e_mail").val();

                                                                if (product == '0')
                                                                {
                                                                    $('#errors').html('Please Select Product');
                                                                    $("#product").focus();

                                                                    return false;
                                                                }

                                                                if (product == 'DRYER') {
                                                                    var mno = $("#mno").val();
                                                                    var mno1 = $("#mno1").val();
                                                                    if (mno == '') {
                                                                        $('#errors').html('Enter Model No');
                                                                        $("#mno").focus();
                                                                        return false;
                                                                    }
                                                                    if (mno1 == '') {

                                                                        $('#errors').html('Enter Model No');
                                                                        $("#mno1").focus();
                                                                        return false;

                                                                    }

                                                                }
                                                                if (city == '0')
                                                                {
                                                                    $('#errors').html('Please Select Product Model');
                                                                    $("#city").focus();

                                                                    return false;
                                                                }



                                                                if (category == '0')
                                                                {
                                                                    $('#errors').html('Please Select Product  Service category');
                                                                    $("#category").focus();

                                                                    return false;
                                                                }
                                                                if (complaint == '0')
                                                                {
                                                                    $('#errors').html('Please Select Product complaint');
                                                                    $("#complaint").focus();

                                                                    return false;
                                                                }
                                                                if (dealer == '0')
                                                                {
                                                                    $('#errors').html('Please Select Dealer');
                                                                    $("#dealer").focus();

                                                                    return false;
                                                                }
                                                                if (MCSL == '')
                                                                {
                                                                    $('#errors').html('Enter MCSL');
                                                                    $("#MCSL").focus();

                                                                    return false;
                                                                }
                                                                if (month == '')
                                                                {
                                                                    $('#errors').html('Enter month');
                                                                    $("#month").focus();

                                                                    return false;
                                                                }

                                                                if (year == '')
                                                                {
                                                                    $('#errors').html('Enter year');
                                                                    $("#year").focus();

                                                                    return false;
                                                                }

                                                                if (showwarranty == '')
                                                                {
                                                                    $('#errors').html('Enter Warranty');
                                                                    $("#show-warranty").focus();

                                                                    return false;
                                                                }
                                                                if (cname == '')
                                                                {
                                                                    $('#errors').html('Enter Company Name');
                                                                    $("#cname").focus();

                                                                    return false;
                                                                }
                                                                if (ccity == '')
                                                                {
                                                                    $('#errors').html('Enter city');
                                                                    $("#ccity").focus();

                                                                    return false;
                                                                }
                                                                if (street == '')
                                                                {
                                                                    $('#errors').html('Enter street');
                                                                    $("#street").focus();

                                                                    return false;
                                                                }

                                                                if (landmark == '')
                                                                {
                                                                    $('#errors').html('Enter landmark');
                                                                    $("#landmark").focus();

                                                                    return false;
                                                                }
                                                                if (ContactPersonName == '')
                                                                {
                                                                    $('#errors').html('Enter Contact Person Name');
                                                                    $("#ContactPersonName").focus();

                                                                    return false;
                                                                }
                                                                if (phone == '')
                                                                {
                                                                    $('#errors').html('Enter Phone No');
                                                                    $("#phones").focus();

                                                                    return false;
                                                                }
                                                                if (cellno == '')
                                                                {
                                                                    $('#errors').html('Enter cell No');
                                                                    $("#cellno").focus();

                                                                    return false;
                                                                }

                                                                if (e_mail == '')
                                                                {
                                                                    $('#errors').html('Enter E-mail');
                                                                    $("#e_mail").focus();

                                                                    return false;
                                                                } 
                                                                  var x = $("#e_mail").val();
                    var atpos = x.indexOf("@");
                    var dotpos = x.lastIndexOf(".");
                    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                        $('#errors').html('Enter vaild Email address');
                        $("#e_mail").focus();
                        return false;
                    }

                   
        else {

                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        url: 'add_complaint_process.php',
                                                                        data: data,
                                                                        beforeSend: function () {
                                                                            $("#errors").html('');
 $("#login_button").html('Please wait..');

                                                             },
                                                                        success: function (response) {


 $("#login_button").html('Save Changes');
                                                                            if (response == 1) {
                                                                                $("#success").html(" Complaint added successfully!");
                                                                            } else {
                                                                               // $("#errors").html("Error Occured");
 $("#errors").html(response);
                                                                            }
																			
                                                                //   document.getElementById("addcity").reset();
                                                                            setTimeout(function () {
                                                                                $('#success').html('');
																				//window.location.href='list_complaints_register.php';
                                                                            }, 2000);


                                                                            setTimeout(function () {
                                                                                $('#errors').html('');
                                                                            }, 5000);


                                                                        }
                                                                    });
                                                                }
                                                                return false;
                                                            });

        </script>


        <script>

            function getplace(countryId) {

                var id = countryId;
$('#show-complaint').hide();
                if (id == 'DRYER' || id== 'CHILLER' || id=='COOLING TOWER') {
                    $('#showmodel_no').show();

                } else {
                    $('#showmodel_no').hide();
                }
                if (id != 0) {
                    // alert('sss');
                    $.ajax({
                        type: "POST",
                        url: 'find_model.php',
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


            function getcategory(countryId, categoryId) {
$('#show-complaint').hide();
                var id = categoryId;
                var countryId = countryId;

                if (countryId == 'DRYER' || countryId =='CHILLER' || countryId=='COOLING TOWER') {
                    $('#mno').val(id);

                } else {
                    $('#showmodel_no').hide();
                }
                if (id != 0) {
                    // alert('sss');
                    $.ajax({
                        type: "POST",
                        url: 'find_category.php',
                        data: {
                            id: id,
                            countryId: countryId,
                        },
                        success: function (data)
                        {
                            $('#show-category').show();
                            $('#hide-category').hide();
                            $('#show-category').html(data);
                        },
                    });


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
            $('#ContactPersonName').keypress(function (e) {
                var regex = new RegExp("^[a-zA-Z ]+$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                    return true;
                }

                e.preventDefault();
                return false;
            });
        </script>






        <script>
  function getservice(ids,countryId, categoryId) {



             
if(ids=="COMPLAINT"){
$('#show-complaint').show();

                    $.ajax({
                        type: "POST",
                        url: 'find_complaint.php',
                        data: {
                            id: categoryId,
                            countryId: countryId,
                        },
                        success: function (data)
                        {
                          
                         
                            $('#show-complaint').html(data);
                        },
                    });






                } 
else{
$('#show-complaint').hide();

}
            }

        </script>
    </body>
</html>