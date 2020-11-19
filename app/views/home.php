
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
<div style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">
<div id="recentally" class="recentally owl-carousel owl-theme mx-auto py-4"   >
  
</div>
</div>
<div class="row mx-auto my-4 show ad-first "  >
<div class="col-md-4 col-sm-4 col-xs-12 mx-auto mb-3 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==1)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="150px" width="300px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="150px" width="300px" src="'.$img.'" alt="Card image cap">';

      ?>    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 mx-auto mb-3 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==1)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="150px" width="300px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="150px" width="300px" src="'.$img.'" alt="Card image cap">';

      ?>    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>
    <div class="col-md-4 col-sm-4 col-xs-12 mx-auto mb-4 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="150px" width="300px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="150px" width="300px" src="'.$img.'" alt="Card image cap">';

      ?>
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
  </div>
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Featured Items</h3>
</div>
<div  style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">
<div id="featured" class="featured owl-carousel owl-theme mx-auto py-4" >

</div>
</div>
<div class="row mx-auto my-4 show ad-second" >

<div class="col-md-5 col-sm-5 mx-auto mb-4 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="200px" width="200px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="200px" width="200px"  src="'.$img.'" alt="Card image cap">';

      ?>
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
    <div class="col-md-5 col-sm-5 mx-auto mb-4 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="200px" width="200px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="200px" width="200px"  src="'.$img.'" alt="Card image cap">';

      ?>
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
  </div>

 <script>
   
   
    $(document).ready(function () {
      // loadHome({type:'recentally',id:null})
       //loadHome({type:'featured',id:null})
    })

    </script>
