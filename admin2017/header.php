<!--Topbar Start Here-->
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
                        <a href="index-2.html" title="Admin Template"><img src="images/dashboard.png" alt="logo"></a>
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
        <div class="user-profile-container" style="height:70px">
            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                </div>
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Admin@Gemspares.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="#"><i class="zmdi zmdi-power"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-account"></i>
                    </a>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-key"></i>
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
            
        <li>
                <a href="#.php"><i class="zmdi zmdi-chart"></i><span class="list-label">User</span></a>
				
                
                <ul>
                    <li><a href="add_employee.php">Add User</a></li>
                    <li><a href="list_employee.php">List  User </a></li>
                    
                </ul>
            </li>
       <?php /*     <li class="list-title">Service Zone</li>
            <li>
                <a href="add_city.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Add service Place</span></a></li>
				 <li>
                <a href="#"><i class="zmdi zmdi-chart"></i><span class="list-label">List Service Zone</span></a>
                <ul>
                    <li><a href="list_south_zone.php">South</a></li>
                    <li><a href="list_north_zone.php">North</a></li>
                    <li><a href="list_west_zone.php">West</a></li>
                    <li><a href="list_east_zone.php">East</a></li>
                </ul>
            </li>
			<li>
                <a href="add_service.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Add service Person</span></a></li>
				 <li>
                <a href="#"><i class="zmdi zmdi-chart"></i><span class="list-label">List Service Person</span></a>
                <ul>
                    <li><a href="list_service_palce_south.php">South</a></li>
                    <li><a href="list_service_palce_North.php">North</a></li>
                    <li><a href="list_service_palce_west.php">West</a></li>
                    <li><a href="list_service_palce_east.php">East</a></li>
                </ul>
            </li>
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
<?php */ ?>
 <li class="list-title">Service Zone</li>
            <li>
                <a href="add_team.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Add Team</span></a></li>
				 <li>
                
            </li>
			<li>
                <a href="add_team_members.php"><i class="zmdi zmdi-chart"></i><span class="list-label">Add Team Members</span></a></li>
				 <li>
                               <a href="list_team.php"><i class="zmdi zmdi-chart"></i><span class="list-label">List Team</span></a>

            </li>
                       <li class="list-title">Reports</li>
            <li>
                <a href="employee.php"><i class="zmdi zmdi-apps"></i><span class="list-label">Search By employee</span></a>
               
            </li>
			 <li>
                <a href="employee_search.php"><i class="zmdi zmdi-apps"></i><span class="list-label">Search by date</span></a>
				
            </li>
			 

            <li class="list-title">Complaints</li>
            <li>
               
                            <a href="list_complaints.php"><i class="zmdi zmdi-apps"></i>Pending  complaints</a></li>
<li>
               
                            <a href="list_complaints_notalloted.php"><i class="zmdi zmdi-apps"></i>Pending complaints Not Alloted</a></li>
<li>
               
                            <a href="list_complaints_alloted.php"><i class="zmdi zmdi-apps"></i>Pending complaints Alloted</a></li>
                    <li><a href="list_process_complaints.php"><i class="zmdi zmdi-apps"></i>Processing Complaints</a></li>
                    <li><a href="list_completed_complaints.php"><i class="zmdi zmdi-apps"></i>Completed Complaints</a></li>
					    
              
            </li>
			              <li>    <a href="logout.php"><i class="zmdi zmdi-power"></i><span class="list-label">Log out</span></a></li>

        </ul>
    </div>
</aside>
<!--Leftbar End Here-->
<!--Page Container Start Here-->