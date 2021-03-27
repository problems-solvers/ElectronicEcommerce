<?php
	if(isset($_SESSION['user_role']) && $_SESSION['user_role']==1)
       echo '<META HTTP-EQUIV="" content="0;URL=http://localhost/ElectronicEcommerce/admin/admin_dashboard/">';
else
echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/user/login/';</script>";


?>

<!doctype html>
        <html lang="en">
         
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="/ElectronicEcommerce/app/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/libs/css/style.css">
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
            <!-- <link rel="stylesheet" href="../app/assets/vendor/charts/chartist-bundle/chartist.css">
            <link rel="stylesheet" href="../app/assets/vendor/charts/morris-bundle/morris.css"> -->
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
            <!-- <link rel="stylesheet" href="../app/assets/vendor/charts/c3charts/c3.css"> -->
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
            <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/summernote/css/summernote-bs4.css">

            <link href="css/addons/datatables2.min.css" rel="stylesheet">
 <!-- DataTables JS -->
            <script src="js/addons/datatables2.min.js" type="text/javascript"></script>
 
 <!-- DataTables Select CSS -->
            <link href="css/addons/datatables-select2.min.css" rel="stylesheet">
 <!-- DataTables Select JS -->
            <script src="js/addons/datatables-select2.min.js" type="text/javascript"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
           
            <title>ECOMMERCE CONTROLE PANEL</title>
            <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'http://localhost/ElectronicEcommerce/admin/admin_dashboard/search?key=%QUERY',
        limit : 10,
		 success: function(data){
 
                $('#output').html(data);
                $('#output').css('display', 'block');
 
                $("#typeahead").focusout(function(){
                    $('#output').css('display', 'none');
					  });
                $("#typeahead").focusin(function(){
                    $('#output').css('display', 'block');
                });
              }
    });
});

    </script>
        </head>
        
        
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#"><img src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png"   style=" height:50px;" alt="" class=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                           
<div class="con-search notValue">
        <div class="con-input">
            <input type="text" placeholder="Search">
            <i class='bx bx-search'></i>
            <i  class='bx bx-x' ></i>
        </div>
        <div class="content-results">
            <div class="con-results"></div>
        </div>
    </div>      </div>
                        </li>
                  
                        <!-- <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/ElectronicEcommerce/app/assets/images/login_store_logos-1.png"   style="width:60px; height:50px;" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $_SESSION['user_img']; ?>"   style="width:30px; height:30px;" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['user_name']; ?> </h5>
                                </div>
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/"><i class="fas fa-user mr-2"></i>Account</a>                           
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/address/"><i class="fa fa-address-book-o mr-2"></i></i>Address</a>
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/payment/"><i class="fa fa-address-card-o mr-2"></i>Payment</a>
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/user/logout/"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/address/" class="nav-link"> <li></li> Address</a>
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/payment/" class="nav-link"><li > </li>Payment</a>
                                <a class="dropdown-item" href="http://localhost/ElectronicEcommerce/userprofiel/order/" class="nav-link">Orders</a>

             ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
                <div class="nav-left-sidebar sidebar-dark">
                    <div class="menu-list">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                          $url=isset($_GET['url'])?$_GET['url']:"home";
                          
                          $admin_dashboard='';
                          $admin_repo='';
                          $admin_cust='';
                          $userchart='';
                          $admin_cat='';
                          $admin_product='';
                          $admin_orders='';
                          $admin_offers='';
                          if($url=='home'){
                          $home='active';
                          
                          }
                          if($url=='admin/admin_dashboard'){
                              $admin_dashboard='active';  
                           }
                           if($url=='admin/admin_repo'){
                            $admin_repo='active';  
                         }
                           if($url=='admin/admin_repo/custOrder'){
                            $admin_repo='active';  
                           }
                           if($url=='admin/admin_repo/chart'){
                            $admin_repo='active';  
                           }

                           if($url=='admin/admin_repo/productchart'){
                            $admin_repo='active';  
                           }
                           if($url=='admin/admin_repo/userchart'){
                            $admin_repo='active';  
                           }
                           if($url=='admin/admin_cust'){
                            $admin_cust='active';  
                           }
                           if($url=='admin_advertiment/add_adver'){
                            $admin_repo='active';  
                           }
                           if($url=='admin/admin_cat'){
                            $admin_cat='active';  
                           }
                           if($url=='admin/admin_product'){
                              $admin_product='active';  
                           }
                           if($url=='admin/admin_orders'){
                            $admin_orders='active';  
                         }
                         if($url=='admin/admin_offers'){
                            $admin_offers='active';  
                         }
                           
                          ?>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menu
                                    </li>
                         
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $admin_dashboard ?>" href="http://localhost/ElectronicEcommerce/admin/admin_dashboard"><i class="fa fa-fw fa-user-circle"></i>Dashboard<span class="badge badge-success">6</span></a>
                                    </li>
                          
                                    <li class="nav-item">
                                    <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2"><i class="fas fa-fw fa-chart-pie"></i>Reports</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/ElectronicEcommerce/admin/admin_repo"><i class="fa fa-file"></i>Products</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/ElectronicEcommerce/admin/admin_repo/custOrder"><i class="fa fa-file"></i>Customer</a>
                                                    </li>

                                                    <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/ElectronicEcommerce/admin/admin_repo/chart"><i class="fa fa-file"></i>Order</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/ElectronicEcommerce/admin/admin_repo/productchart"><i class="fa fa-file"></i>Categories</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/ElectronicEcommerce/admin/admin_repo/userchart"><i class="fa fa-file"></i>Users</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </li>
                                                 
                                    <li class="nav-item ">
                                        <a class="nav-link " href="#"><i class="fab fa-fw fa-wpforms"></i>Users and Roles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $admin_cust ?>" href="http://localhost/ElectronicEcommerce/admin/admin_cust"><i class="fas fa-fw fa-table"></i>Customers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $add_adver ?>" href="http://localhost/ElectronicEcommerce/admin/admin_advertiment/add_adver"><i class="fas fa-fw fa-table"></i>Advertisment</a>
                                    </li>
                                    <li class="nav-divider">
                                        Products Management
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $admin_cat ?>" href="http://localhost/ElectronicEcommerce/admin/admin_cat"><i class="fas fa-fw fa-file"></i> Categories and Tags </a>
                                      
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $admin_product ?>" href="http://localhost/ElectronicEcommerce/admin/admin_product"><i class="fas fa-fw fa-inbox"></i>Products <span class="badge badge-secondary">New</span></a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $admin_orders ?>" href="http://localhost/ElectronicEcommerce/admin/admin_orders"><i class="fas fa-fw fa-map-marker-alt"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  <?php echo $admin_offers ?>" href="http://localhost/ElectronicEcommerce/admin/admin_offers"><i class="fas fa-fw fa-map-marker-alt"></i>Offers</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end left sidebar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- wrapper  -->
                <!-- ============================================================== -->
                <div class="dashboard-wrapper">
                    <div class="dashboard-ecommerce">
                        <div class="container-fluid dashboard-content ">