
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
<div id="recentally" class="recentally owl-carousel owl-theme mx-auto py-4"   style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">
  
</div>

<div class="row mx-auto my-4 show "  >
<div class="col-md-5 col-sm-8 col-xs-8 mx-auto mb-3 "> 
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
    <div class="col-md-5 col-sm-8 col-xs-8 mx-auto mb-3 "> 
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
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Featured Items</h3>
</div>

<div id="featured" class="featured owl-carousel owl-theme mx-auto py-4"  style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">

</div>
<div class="row mx-auto my-4 show" >
<div class="mx-auto justify-content-center align-items-center"style="width:728px;"> <img class="card-img-top mx-auto "  height="90px" width="100%" src="/ElectronicEcommerce/app/assets/images/2ad.png" alt="Card image cap">
    <button class="btn btn-sm px-3">SHOP NOW</button>
    </div>
</div>
<div class="row mx-auto my-4 show "  >
<div class="col-md-5 col-sm-8 col-xs-8 mx-auto mb-3 justify-content-center align-items-center"> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==1)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class=""   height="150px" width="180px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="150px" width="180px" src="'.$img.'" alt="Card image cap">';

      ?>    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>
    <div class="col-md-5 col-sm-8 col-xs-8 mx-auto mb-3 "> 
    <?php
 $rows=$data['adver'];
 $img='';
 foreach ($rows as $row) {
   if($row ->adver_namber==2)
   $img=$row->adver_img;}

   if(empty($img))
   {
     echo ' <img class="card-img-top" height="150px" width="180px" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> ';
   }
   else 
   echo '<img class="card-img-top" height="150px" width="180px"  src="'.$img.'" alt="Card image cap">';

      ?>
    <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
  </div>

 <script>
   
    text_truncate = function(str, length, ending) {
      if (length == null) {
        length = 100;
      }
      if (ending == null) {
        ending = '...';
      }
      if (str.length > length) {
        return str.substring(0, length - ending.length) + ending;
      } else {
        return str;
      }
    };
    const titles = document.getElementsByClassName('cardtitle')
  
    for(i=0;i<titles.length; i++ ){
     x= titles[i].innerText
     titles[i].innerText=text_truncate(x,16)
    }

    $(document).ready(function () {
      // loadHome({type:'recentally',id:null})
       //loadHome({type:'featured',id:null})
    })

    </script>
