
<div id="carouselExampleIndicators" class=" col-md-12 col-sm-12 col-xs-12 mx-0 px-0 carousel slide"  data-ride="carousel">

  <div class="carousel-inner " style="height:500px; ">
    <div class="carousel-item active ">
      <img class="d-block w-100 " src="/ElectronicEcommerce/app/assets/images/3ad.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/ElectronicEcommerce/app/assets/images/3ad.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/ElectronicEcommerce/app/assets/images/3ad.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">NEW ARRAIVALS</h3>
</div>
<div id="owl-one" class=" owl-carousel owl-theme mx-auto py-4"   style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">
<?php  $rows=$data['Recent'];
     foreach ($rows as $row) {
      
       echo ' 
      
<div class="item mx-2">

 <div class="card productCard mx-auto " >';
 echo "<a  href='http://localhost/ElectronicEcommerce/product/productdetale?action=view&pro_id=".$row->pro_id."' class='update'>
 ";
 echo'
  <img class="card-img-top" src="../'.$row->main_img.'" alt="Card image cap"></a>
  
  <div class="card-body py-1">
    <h5 class="card-title">'.$row->pro_name.'</h5>
    <span style="float:right; color:#5F3870; font-weight:bold;">'.$row->pro_price.'</span>

    <span>'.$row->cat_name.'</span>
  </div>
  <div class="row productCardbtns mx-0">
    <a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a>
    <a  title="add to compare" id="'.$row->pro_id.'" class="fas fa-exchange-alt addTocompare mx-auto" ></a>
    <a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>          
  </div>
 </div>
</div> ';}  
    ?>
  
</div>

<div class="row mx-auto my-2 show" >
  <!--     <div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> <img class="card-img-top "  height="100%" src="/ElectronicEcommerce/app/assets/images/1ad.png" alt="Card image cap">
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto ">  <img class="card-img-top" height="100%" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap">
    <button class="btn btn-sm px-3">SHOP NOW</button> -->

<div class="row mx-auto my-2 show" style="height:300px;">
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> 
      <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==1)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo '<img class="card-img-top "  height="250px" src="http://placehold.it/64x64" alt="Card image cap">';
   }
   else 
   echo '<img class="card-img-top "  height="250px" src="'.$img.'" alt="Card image cap">';

      ?>
 <button class="btn btn-sm px-3">SHOP NOW</button>  </div>
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto ">  
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo '<img class="card-img-top "  height="250px" src="http://placehold.it/64x64" alt="Card image cap">';
   }
   else 
   echo '<img class="card-img-top "  height="250px" src="'.$img.'" alt="Card image cap">';

      ?>
 <button class="btn btn-sm px-3">SHOP NOW</button>  </div>
</div>
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Featured Items</h3>
</div>

<div id="owl-two" class=" owl-carousel owl-theme mx-auto py-4"  style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">
<?php  $rows=$data['Featured'];
     foreach ($rows as $row) { echo ' 
      <div class="item mx-2">

      <div class="card productCard mx-auto " >
       <img class="card-img-top" src="../'.$row->main_img.'" alt="Card image cap">
       
       <div class="card-body py-1">
         <h5 class="card-title">'.$row->pro_name.'</h5>
         <span style="float:right; color:#5F3870; font-weight:bold;">'.$row->pro_price.'</span>
     
         <span>'.$row->cat_name.'</span>
       </div>
       <div class="row productCardbtns mx-0">
         <a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a>
         <a  title="add to compare" id="'.$row->pro_id.'" class="fas fa-exchange-alt addTocompare mx-auto" ></a>
         <a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>          
       </div>
      </div>
     </div> ';}  
    ?>
  
</div>
<div class="row mx-auto my-4 show" >
<div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> <img class="card-img-top "  height="100%" width="100%" src="/ElectronicEcommerce/app/assets/images/2ad.png" alt="Card image cap">
    <button class="btn btn-sm px-3">SHOP NOW</button>
    </div>
</div>
<div class="row mx-auto my-4 show "  >
<div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==1)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="100%" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="100%" src="'.$img.'" alt="Card image cap">';

      ?>    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="100%" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="100%" src="'.$img.'" alt="Card image cap">';

      ?>
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
  </div>

 