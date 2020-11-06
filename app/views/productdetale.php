<?php $rows=$data['product'];
//to do pro imgs
foreach($rows as $row){
 

  ?>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!--Gallery Thumbs-->
            <div id="js-gallery" class="gallery" style="height:600px">

                <!--Gallery Hero-->
                <div class="gallery__hero" style="height:400px">


                    <img src="../<?php echo $row->main_img ?>" width="100%">
                </div>
                <!--Gallery Hero-->

                <!--Gallery Thumbs-->
                <div class="gallery__thumbs">
                    <a href="../<?php echo $row->main_img ?>" data-gallery="thumb" class="is-active">
                        <img src="../<?php echo $row->main_img ?>">
                    </a>
                    <?php
$imgs=explode(',',$row->pro_imgs);

foreach( $imgs as $img){
?>
                    <a href="../<?php echo $img ?>" data-gallery="thumb">
                        <img src="../<?php echo $img ?>">
                    </a>
                    <?php
}
?>
                </div>
                <!--Gallery Thumbs-->

            </div>
        </div>
        <div class="col-md-6">
            <div class="product-dtl">
                <div class="product-info">
                    <div class="product-name">
                        <?php echo $row->pro_name;?>
                    </div>

                    <div><h3 style="color:red;" >
                            <?php echo $row->pro_price;?>
                        </h3></div>
                </div>
                <div class="product-size border-bottom">
                    <h3 class="d-inline-block mr-1">Categories :   </h3>
                   
                        <div class="quantity d-inline-block">
                            <?php echo $row->cat_name; ?>
                       
                    </div>

                </div>
                <div class="product-size border-bottom">
                    <h3 class="d-inline-block mr-1"> <?php echo $row->tag_name; ?> : </h3>
                        <div class="quantity  d-inline-block">
                            <?php echo $row->tag_data; ?>
                    </div>
                    <div class="row productCardbtns mx-0 mt-2">
  <a href="#" class="fas fa-heart addTowish mx-auto"></a>
 
  <a href="#" ><i class="fas fa-exchange-alt"></i></a>
  <a href="#" title="add to cart" id="'.$row->pro_id.'" class="attToCart fas fa-shopping-cart mx-auto"></a>
  </div>
                    <div class="product-info-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                    aria-controls="description" aria-selected="true">Description</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <?php echo $row->pro_details; ?>
            </div>

        </div>
    </div>

                </div>
             

            </div>
         
        </div>

    </div>
  
</div>
<?php
}
?>

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