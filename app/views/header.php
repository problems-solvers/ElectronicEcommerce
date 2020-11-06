<!doctype html>
        <html lang="en">
         
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- Bootstrap CSS -->
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="/ElectronicEcommerce/app/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
            <!-- <link rel="stylesheet" href="app/assets/libs/css/style.css"> -->
            <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel="stylesheet" href="/ElectronicEcommerce/app/assets/libs/css/customerStyle.css">
<link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
            <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

            <!-- <link rel="stylesheet" type="text/css" href="app/assets/vendor/datatables/css/dataTables.bootstrap4.css">
            <link rel="stylesheet" href="app/assets/vendor/summernote/css/summernote-bs4.css"> -->
            <title>ECOMMERCE Site</title>

        </head>
        <?php 
$_SESSION['redirect']=$_SERVER['REQUEST_URI'];

?>
<body>
 <div id="CustTemplate">
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">  <img src="/ElectronicEcommerce/app/assets/images/login_store_logos-1.png" class="float-left rounded-circle" style="width:70px; height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/ElectronicEcommerce/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories" id="parent">All Categories</a></li>
                                <?php
      
      $rows=$data['categories'];
      foreach($rows as $row)
     { echo '
      <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/show?action=get&cat_id='.$row->cat_id.'">'.$row->cat_name.'</a></li>

  
      ';
    
    }
      ?>
                                </ul>
                            </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Offers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Who we are</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
    </ul>
    <form class=" mx-auto my-2 my-lg-0">
      <input class="form-control " type="search" placeholder="Search">
    </form>
    <ul class="navbar-nav mt-2 mt-lg-0">

        <a class="nav-link " href="http://localhost/ElectronicEcommerce/cart/">
        <div class="iconShopping">

        <i class="fa fa-shopping-cart"></i>
				<p class="">0</p>
		</div>
     </a>
     <a class="nav-link " href="#">
        <div class="iconheart">

        <i class="fa fa-heart"></i>
				<p class="">0</p>
		</div>
     </a>
     <div class="dropdown">
    <button class="dropbtn"> 
      <i class="fas fa-user-circle"></i>
    </button>
    <div class="dropdown-content">
      <?php
		if(isset($_SESSION['user_role']) && $_SESSION['user_role']==1)
    {
     
     echo'<a href="#">Profile</a>
      <a href="http://localhost/ElectronicEcommerce/user/logout">Log Out</a> ';}
     else{
       echo '<a href="http://localhost/ElectronicEcommerce/user/login">Log In</a>';
     }
    
      ?>

     
    </div>
  </div> 
   
     
    </ul>
  </div>
</nav>

<select class=" my-2 mx-2  cloudtranslation-selection" style="width: 100px;"></select>
