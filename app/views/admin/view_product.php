<?php $rows=$data['product'];
foreach($rows as $row){
  ?>   
    <?php /*  <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider "  style="height:400px">
                                        <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="Third slide">
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
                                    </div>
                                </div>*/?>

<div class="container">

  <!-- Gallery -->
  <div id="js-gallery" class="gallery">

    <!--Gallery Hero-->
    <div class="gallery__hero">
   

      <img src="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-01.jpg">
    </div>
    <!--Gallery Hero-->

    <!--Gallery Thumbs-->
    <div class="gallery__thumbs">
        <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-01.jpg" data-gallery="thumb" class="is-active">
          <img src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-01.jpg">
        </a>
        <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-02.jpg" data-gallery="thumb">
          <img src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-02.jpg">
        </a>
        <a href="https://public-619e3.firebaseapp.com/Product-Gallery/products/normal/product-01_view-03.jpg" data-gallery="thumb">
          <img src="https://public-619e3.firebaseapp.com/Product-Gallery/products/thumb/product-01_view-03.jpg">
        </a>
    </div>
    <!--Gallery Thumbs-->

  </div><!--.gallery-->
  <!-- Gallery -->
  
 </div><!--.container-->
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details" style="height:400px">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3"><?php echo $row->pro_name; ?></h2>
                                           
                                            <h3 class="mb-0 text-primary"><?php echo $row->pro_price; ?></h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Quantity</h4>
                                            <div class="product-qty  d-inline-block">
                                                <div class="quantity  d-inline-block">
                                                    <input type="number" class=" d-inline-block" value="<?php echo $row->pro_quentity; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                       
                                        <div class="product-description">
                                            <h4 class="mb-1">Descriptions</h4>
                                            <p><?php echo $row->pro_details; ?></p>
                                            <a href='http://localhost/ElectronicEcommerce/admin/admin_product' class="btn btn-primary btn-block btn-sm">Back</a>
                                            <a href='http://localhost/ecomm/admin/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class="btn btn-primary btn-block btn-sm">Update</a>
                                        </div>
                                    </div>
                                </div>
                              
                                <?php
}
                                ?>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js'></script>
                                <script>
                                    var App = (function () {

//=== Use Strict ===//
'use strict';

//=== Private Variables ===//
var gallery = $('#js-gallery');
$('.gallery__hero').zoom();


//=== Gallery Object ===//
var Gallery = {
  zoom: function(imgContainer, img) {
    var containerHeight = imgContainer.outerHeight(),
    src = img.attr('src');
  
  },
  switch: function(trigger, imgContainer) {
    var src = trigger.attr('href'),
    thumbs = trigger.siblings(),
          img = trigger.parent().prev().children();
    
    // Add active class to thumb
    trigger.addClass('is-active');
    
    // Remove active class from thumbs
    thumbs.each(function() {
      if( $(this).hasClass('is-active') ) {
        $(this).removeClass('is-active');
      }
    });


    // Switch image source
    img.attr('src', src);
  }
};

//=== Public Methods ===//
function init() {


 // Listen for clicks on anchors within gallery
  gallery.delegate('a', 'click', function(event) {
    var trigger = $(this);
    var triggerData = trigger.data("gallery");

    if ( triggerData === 'zoom') {
      var imgContainer = trigger.parent(),
      img = trigger.siblings();
      Gallery.zoom(imgContainer, img);
    } else if ( triggerData === 'thumb') {
      var imgContainer = trigger.parent().siblings();
      Gallery.switch(trigger, imgContainer);
    } else {
      return;
    }

    event.preventDefault();
  });
}

//=== Make Methods Public ===//
return {
  init: init
};

})();

App.init();
                                    </script>
