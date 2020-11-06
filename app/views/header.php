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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="app/assets/libs/css/style.css"> -->
    <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/ElectronicEcommerce/app/assets/libs/css/customerStyle.css">

    <title>ECOMMERCE Site</title>

</head>
<body>
<div class="col-12">
<div class="row">
            <div class="col-3 mx-2">
                <a class="navbar-brand" href="#"> <img
                        src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png" class="float-left "
                        style="width:300px; height:50px;"></a>
            </div>
<div class="col-6">
<div class="input-group col-12 mt-2">
     <input type="search" name="search" id="" placeholder="Search..." class="form-control">
     <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
</div>
            <div class="col-2">
           
                    <ul class="navbar-nav mt-2 col-12 ml-auto " style="flex-direction:inherit;direction:rtl;">

                    <div class="dropdown ">
    <button class="dropbtn">
        <i class="fas fa-user-circle mx-2" style="color:#714674 ;"></i>
    </button>
    <div class="dropdown-content">
        <?php
if(isset($_SESSION['user_name']))
{

echo'<a href="#">Profile</a>
<a href="http://localhost/ElectronicEcommerce/user/logout">Log Out</a> ';}
else{
echo '<a href="http://localhost/ElectronicEcommerce/user/login">Log In</a>';
}

?>


    </div>
</div>


<a class="nav-link mx-2" href="http://localhost/ElectronicEcommerce/cart/">
    <div class="iconShopping">

        <i class="fa fa-shopping-cart" style="color:#714674 ;"></i>
        <p class="" style="color:#714674 ;">0</p>
    </div>
</a>
<a class="nav-link mx-2" href="#">
    <div class="iconheart">

        <i class="fa fa-heart" style="color:#714674 ;"></i>
        <p class="" style="color:#714674 ;">0</p>
    </div>
</a>
</ul>

                    

</div>
</div>

</div>
    <div id="CustTemplate">
    
        <nav class="navbar navbar-expand-lg navbar-dark  "
                style="background-color: rgba(0, 0, 0, 0.692); z-index:999;">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/ElectronicEcommerce/">Home<span
                                class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu" id="allCategories"> 
                                 <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories" id="parent">All Categories</a></li>
              
                                 <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/show?action=get&cat_id='.$row->cat_id.'">'.$row->cat_name.'</a></li>
                                 <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/show?action=get&cat_id='.$row->cat_id.'">'.$row->cat_name.'</a></li>-->

  
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
                </div>
            </nav>


  </div> 
   
     
    </ul>
  </div>
</nav>      
<!--  <div id="CustTemplate">
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
                                <ul class="dropdown-menu" id="allCategories"> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories" id="parent">All Categories</a></li>
              
      <li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/show?action=get&cat_id='.$row->cat_id.'">'.$row->cat_name.'</a></li>-->

<!--   
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
    </form> -->
<!--     <ul class="navbar-nav mt-2 mt-lg-0">

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
    <div class="dropdown-content"> --> -->
      <?php
// 		if(isset($_SESSION['user_role']) && $_SESSION['user_role']==1)
//     {
     
//      echo'<a href="#">Profile</a>
//       <a href="http://localhost/ElectronicEcommerce/user/logout">Log Out</a> ';}
//      else{
//        echo '<a href="http://localhost/ElectronicEcommerce/user/login">Log In</a>';
//      }
    
      ?>

<script>
  
  // window.onload = function(){
  // $(document).ready(function(){
  //   console.log('hi')
  //      $.ajax({
  //                   type: 'POST',
  //                   url: 'http://localhost/ElectronicEcommerce/home/getCategories',
  //                   data: {cart_id:cart_id }
  //                   })
  //                   .done(function (response) {
  //                     console.log(response)
  //                     ('#allCategories').val()
  //                   })
  //                   .fail(function () {
                     
  //                   })   


  // })
  // }

</script>
<!-- <select class=" my-2 mx-2  cloudtranslation-selection" style="width: 100px;"></select> -->

