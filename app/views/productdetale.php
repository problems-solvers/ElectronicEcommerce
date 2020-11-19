<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<div class="mx-auto  my-2 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light">
    <h3 class="titel">Product Details</h3>
</div>
<?php $rows=$data['product'];
  //to do pro imgs
  //print_r($rows);
 $pro_id='';
 $pro_name='';
 $pro_imgs='';
 $main_img='';
 $tagData=[];
 $tagName=[];
 $pro_price='';
 $cat_name='';
 $pro_details='';
 $index=0;
  foreach($rows as $row){
    $pro_id=$row->pro_id;
    $pro_name=$row->pro_name;
    $pro_imgs=explode('@',$row->pro_imgs);
    $main_img=$row->main_img;
    $tagData[$index]=$row->tag_data;
    $tagName[$index]=$row->tag_name;
    $pro_price=$row->pro_price;
    $cat_name=$row->cat_name;
    $pro_details=$row->pro_details;
    $index++;
  }
 

    ?>
<div class="container mt-4">

    <div class="row">
        <div class="col-md-6">
            <!--Gallery Thumbs-->
            <!-- Gallery -->
            <div id="js-gallery" class="gallery">

<!--Gallery Hero-->
<div class="gallery__hero">



    <img class="m-2" width="100%" src="../../<?php echo $main_img ?>" width="100%">
</div>
<!--Gallery Hero-->

<!--Gallery Thumbs-->
<div class="gallery__thumbs">
    <a href="../../<?php echo $main_img ?>" data-gallery="thumb" class="is-active">
        <img width="100px " height="100px"class="m-2"src="../../<?php echo $main_img ?>">
    </a>
    <?php
$imgs=$pro_imgs;
$image=sizeof( $imgs);
//print_r($image);
foreach( $imgs as $img){
if($image >1){
$image=$image-1;

?>
    <a href="../../<?php echo $img ?>"  width="20px " height="20px"data-gallery="thumb">
        <img width="100px " height="100px" class="m-2" src="../../<?php echo $img ?>">
    </a>
    <?php
   }
    
}
?>
</div>
                <!--Gallery Thumbs-->

            </div>
            <!--.gallery-->
        </div>
        <div class="col-md-5 m-2 bx-2 pro-text">
            <div class="product-dtl">
                <div class="product-info">
                    <div class="product-name  mb-3">
                        <?php echo $pro_name;?>
                    </div>

                    <div>
                        <h4>
                            <?php echo $pro_price;?> $
                        </h4>
                    </div>
                </div>
                <div class="product-size border-bottom py-2">
                    <span class="d-inline-block mr-1">Categories : </span>

                    <div class="quantity d-inline-block">
                        <?php echo $cat_name; ?>

                    </div>

                </div>
                
       <?php
       for($i=0;$i<sizeOf($tagName);$i++)
       
{
        ?> 
                <div class="product-size border-bottom">
                    <h5 class="d-inline-block mr-1"> <?php echo  $tagName[$i]; ?> : </h5>
                    <div class="quantity  d-inline-block">
                        <?php echo $tagData[$i]; ?>
                    </div>
                    <div>
                        <div>
<?php }?>
                        <img style="visibility:hidden;" height="0px" width="0px" src="../<?php echo $row->main_img;?>"> 

                            <div style="visibility:hidden; width:0px;height:0px;" >
                                <h5 style="width:0px;height:0px;" ><?php echo $pro_name;?></h5>
                                <span style="width:0px;height:0px;" ><?php echo $pro_price;?></span>

                                <span style="width:0px;height:0px;"> <?php echo $cat_name; ?></span>
                            </div>
                            <div class="row productCardbtns mx-0">
                                <a title="add to wishlist" id="'.$pro_id.'"class="mdi mdi-heart-outline addTowish mx-auto"></a>
                                <a title="add to compare" id="'.$pro_id.'"class="fas fa-exchange-alt addTocompare mx-auto"></a>
                                <a title="add to cart" id="'.$pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>
                            </div>
                        </div>
                    </div>
        
                    <div class="product-info-tabs my-3">
                        <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                            <li>
                            <!-- <ul class="social-footer2 mx-auto col-12 text-center ">
                            <li  style="color:#836691 !important; font-size:20px" class="mx-auto">
                            <a href="https://www.facebook.com/" class="fab fa-facebook " target="_blank" title="Facebook"></a>
                     
                           </li>
                            <li  style="color:#836691 !important; font-size:20px" class="mx-auto">
                            <a href="https://twitter.com" class="fab fa-twitter" target="_blank" title="Twitter"></a></li>
                            <li  style="color:#836691 !important; font-size:20px" class="mx-auto">
                            <a title="instagram" class="fab fa-whatsapp" target="_blank" href="https://www.instagram.com/"></a>     </li>
                        </ul> -->
</li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <?php echo $pro_details; ?>
                            </div>

                        </div>
                        
                    </div>

                </div>


            </div>

        </div>

    </div>

</div>
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Featured Items</h3>
</div>

<div id="featured" class="featured owl-carousel owl-theme mx-auto py-4"  style="background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">

</div>


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
            zoom: function (imgContainer, img) {
                var containerHeight = imgContainer.outerHeight(),
                    src = img.attr('src');

            },
            switch: function (trigger, imgContainer) {
                var src = trigger.attr('href'),
                    thumbs = trigger.siblings(),
                    img = trigger.parent().prev().children();

                // Add active class to thumb
                trigger.addClass('is-active');

                // Remove active class from thumbs
                thumbs.each(function () {
                    if ($(this).hasClass('is-active')) {
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
            gallery.delegate('a', 'click', function (event) {
                var trigger = $(this);
                var triggerData = trigger.data("gallery");

                if (triggerData === 'zoom') {
                    var imgContainer = trigger.parent(),
                        img = trigger.siblings();
                    Gallery.zoom(imgContainer, img);
                } else if (triggerData === 'thumb') {
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