<?php error_reporting('0'); ?>
<header class="topbar clearfix">
    <!--Top Search Bar Start Here-->
    <div class="top-search-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="search-input-addon">
                        <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-control top-search-input" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Top Search Bar End Here-->
    <!--Topbar Left Branding With Logo Start-->
    <div class="topbar-left pull-left">
        <div class="clearfix">
            <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
                <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                <li>
                    <div class="logo">
                        <a href="#" title="Admin Template"><img src="images/dashboard.png" alt="logo"></a>
                    </div>
                </li>
            </ul>
            <!--Mobile Search and Rightbar Toggle-->
            <ul class="branding-right pull-right">
                <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
            </ul>
        </div>
    </div>
    <!--Topbar Left Branding With Logo End-->
   
</header>

<aside class="leftbar material-leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container" style="height:120px">
            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                   
                </div>
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#"><?php echo $_SESSION['emp_name'] ?></a></li>
                        <li><a href="#"><?php echo $_SESSION['emp_email'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="logout.php"><i class="zmdi zmdi-power"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-account"></i>
                    </a>
                    </li>
                   
                 
                </ul>
            </div>
        </div>
        <ul class="list-accordion">
          
      <?php   /*   <li class="list-title">User Zone</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Dealers</span></a>
                <ul>
                    
					 <li><a href="#">New Dealers</a></li>
					 <li><a href="#">Existing Dealers</a></li>

					 </ul>
					
					</li>
					 <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Customers</span></a>
                <ul>
                    
					 <li><a href="#">New Customers</a></li>
					 <li><a href="#">Existing Customers</a></li>

					 </ul>
					
					</li>
					
					 <li>
                <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Suplier</span></a>
                <ul>
                    
					 <li><a href="#">Add Suplier</a></li>
					 <li><a href="#">New Suplier</a></li>
 <li><a href="#">Existing Suplier</a></li>
					 </ul>
					
					</li>
					
                   
				   
             

         <li class="list-title">News</li>
            <li>
                <a href="#"><i class="zmdi zmdi-view-web"></i><span class="list-label">Add News</span></a>
                  <a href="#"><i class="zmdi zmdi-view-web"></i><span class="list-label">List News</span></a>
            </li> */ ?>
             <li>
                <a href="index.php"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">Dashboard</span></a></li>
          <?php if($_SESSION['employee']=='yes'){ ?>  
        <li>
                <a href="#.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Employee</span></a>
				
                
                <ul>
                    <li><a href="add_employee.php">Add Employee</a></li>
                    <li><a href="list_employee.php">List  Employee </a></li>
                    
                </ul>
            </li>
          <?php } ?>
                <?php if($_SESSION['approval']=='1'){ ?>  
        <li>
                <a href="#.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Spares Approval</span></a>
				
                
                <ul>
                    <li><a href="approval_waiting.php">Waiting For Approval</a></li>
                   <li><a href="approve_list1.php"> Approved List</a></li>
                    
                </ul>
            </li>
          <?php } ?>
            
           <?php if($_SESSION['approval']=='2'){ ?>  
        <li>
                <a href="#.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Spares Approval</span></a>
				
                
                <ul>
                    <li><a href="approval_waiting2.php">Waiting For Approval</a></li>
                   <li><a href="approve_list2.php"> Approved List</a></li>
                    
                </ul>
            </li>
          <?php } ?>
            
          
          
          
   <?php if($_SESSION['import'] == 'yes') { /* ?> 
   
            <li class="list-title">Import Data</li>
            <li>
                <a href="#"><i class="zmdi zmdi-apps"></i><span class="list-label">Dealer</span></a>
                <ul>
                    <li><a href="header.html">Dealer Pending Order</a></li>
                    <li><a href="buttons-icons.html">Supplier Pending Order</a></li>
                    <li><a href="noty.html">Min</a></li>
                    <li><a href="bootbox.html">Dispatch Instruction</a></li>
                    <li><a href="sweet-alerts.html">Pending Payment</a></li>
                    <li><a href="no-ui-slider.html">Pending Form</a></li>
                  
                </ul>
            </li>
			 <li>
                <a href="#"><i class="zmdi zmdi-apps"></i><span class="list-label">Customer</span></a>
				<ul>
                    <li><a href="header.html">Customer Pending Order</a></li>
                    <li><a href="buttons-icons.html">Dispatch Instruction</a></li>
                 
                </ul>
            </li>
			 <li>
                <a href="#"><i class="zmdi zmdi-apps"></i><span class="list-label">Suplier</span></a>
				<ul>
                    <li><a href="header.html">Suplier Ratings</a></li>
         
                 
                </ul>
            </li>
         
   <?php */ }   ?> 

   <?php if($_SESSION['pending']== 'yes') { ?> 
                 <li>   <a href="list_complaints_register_all.php"><i class="zmdi zmdi-apps"></i>All Pending complaints</a> </li>
<?php } ?>
   <?php if($_SESSION['team'] != '') { ?> 
                 <li>   <a href="list_complaints_register.php"><i class="zmdi zmdi-apps"></i>Pending complaints</a> </li>
<li>   <a href="list_complaints_register_alloted.php"><i class="zmdi zmdi-apps"></i>Pending Alloted complaints</a> </li>
<?php } ?>
      
            <?php if($_SESSION['reports'] == 'yes') { ?> 
       <li class="list-title">Reports</li>
            <li>
                <a href="employee.php"><i class="zmdi zmdi-apps"></i><span class="list-label">Search By employee</span></a>
               
            </li>
			 <li>
                <a href="employee_search.php"><i class="zmdi zmdi-apps"></i><span class="list-label">Search by date</span></a>
				
            </li>
			 
			 
   <?php } ?>
            
             <?php if($_SESSION['team'] == '') { ?> 
     <li>   <a href="list_complaints.php"><i class="zmdi zmdi-apps"></i>Pending complaints</a> </li>
                <li>   <a href="list_process_complaints.php"><i class="zmdi zmdi-apps"></i>Processing  complaints</a> </li>
                    <li><a href="list_completed_complaints.php"><i class="zmdi zmdi-apps"></i>Completed Complaints</a></li>
			<?php } ?>	    
              
              <?php if($_SESSION['complaint'] == 'yes') { ?> 
			 <li class="list-title">Registered Complaints</li>
                           <li>
               
                               <a href="add_complaints.php"><i class="zmdi zmdi-apps"></i>Add  complaints</a></li>
            <li>
               <li>
               
                               <a href="my_list_complaint_register.php"><i class="zmdi zmdi-apps"></i>Registered Complaints</a></li>
<?php if($_SESSION['team'] != '') { ?> 
 <li>
                <a href="list_process_complaints_register.php"><i class="zmdi zmdi-apps"></i>Processing Complaints</a></li>
 <li>
                <a href="list_completed_complaints_register.php"><i class="zmdi zmdi-apps"></i>Completed Complaints</a></li>
          
                 <?php } ?>  
					    
              <?php } ?>
            <li>
                <a href="logout.php"><i class="zmdi zmdi-power"></i><span class="list-label">Log out</span></a></li>
        </ul>
  

   </div>
</aside>
<!--Leftbar End Here-->
<!--Page Container Start Here-->