<div class="row my-3">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">E-commerce Products</h2>
           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                        <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php 
$rows=$data['updateProduct'];

  //to do pro imgs
  print_r($rows);
 $pro_name='';
 $pro_imgs='';
 $main_img='';
 $tagData=[];
 $tagName=[];
 $pro_price='';
 $cat_name='';
 $pro_details='';
 $is_active='';
 $cat_id='';
 $tag_id=[];
 $tag_details_id=[];
$pro_quentity='';
$brand='';
 $index=0;
 $pro_id='';
  foreach($rows as $row){
      print_r($row);
    $pro_id=$row->pro_id;
    $pro_name=$row->pro_name;
    $tag_id[$index]=$row->tag_id;
    $cat_id=$row->cat_id;
    $tag_details_id[$index]=$row->tag_details_id;
    $is_active=$row->is_active;
    $pro_imgs=explode('@',$row->pro_imgs);
    $main_img=$row->main_img;
    $tagData[$index]=$row->tag_data;
    $tagName[$index]=$row->tag_name;
    $pro_price=$row->pro_price;
    $pro_quentity=$row->pro_quentity;
    $brand=$row->brand;
    $cat_name=$row->cat_name;
    $pro_details=$row->pro_details;
    $index++;
  }
 

    ?>
<form class="form-card" action="http://localhost/ElectronicEcommerce/admin/admin_product/update" method="POST"
    enctype="multipart/form-data">

    <fieldset class="form-fieldset">
        <div class="form-radio form-radio-inline">



            <div class="form-group">
                <label class="control-label" for="product_name">PRODUCT NAME</label>
                <div class="">
                    <input id="product_name" name="pro_name" value="<?php echo $pro_name; ?>"
                        class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class=" control-label" for="product_name">PRODUCT Brand</label>
                <div class="">
                    <input id="product_brand" name="brand" class="form-control input-md" required="" type="text"
                        value="<?php echo $brand; ?>">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
                <div class="">
                    <select class="form-control" id="cat1" name="cat_id">
                        <option value='<?php $cat_id?>' disabled><?php echo $cat_name?></option>";

                        <?php

$cat=$data['categories'];

foreach($cat['parents'] as $ro){
  echo "
                                                   
  <option value='$ro->cat_id' disabled>$ro->cat_name</option>";  

  foreach($cat['child'] as $r){
      if($ro->cat_id==$r->parent)
   { echo "
                                                   
    <option value='$r->cat_id'>--$r->cat_name</option>
    "; }}

}
?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <label class=" control-label" for="available_quantity">AVAILABLE QUANTITY</label>
                    <div class="">
                        <input id="pro_quentity" name="pro_quentity" value="<?php echo $pro_quentity; ?>"
                            class="form-control input-md" required="" type="number">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class=" control-label" for="product_weight">PRODUCT PRICE</label>
                    <div class="">
                        <input id="pro_price" name="pro_price" value="<?php echo $pro_price; ?>"
                            class="form-control input-md" required="" type="number">

                    </div>
                </div>


            <?php
            $tag='';
            $data='';
 for($i=0;$i<sizeOf($tagName);$i++)
       
 {
     $tag=$tagName[$i];
     $data=$tagData[$i];

 
            ?>
            <div class="form-group fieldGroup">
        <div class="input-group">
        <input type="hidden" name="tag_id" value="<?php echo $tag_id[$i]; ?>">
                    <input type="hidden" name="tag_details_id" value="<?php echo $tag_details_id[$i]; ?>">
                    
            <input type="text" id="name" name="name[]" class="form-control col-5 my-2 ml-4 p-1 w-100" value="<?php echo $tagName[$i]; ?>"/>
            <input type="text" id="data" name="data[]" class="form-control col-4 my-2  ml-1 w-100" value="<?php echo $tagData[$i]; ?>"/>
            <div class="input-group-addon">
            <a href="javascript:void(0)"  class="btn remove my-2"  style="background-color:#6c757d;color:#fff"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> -</a>

            </div>
        </div>
    </div>
 <?php }?>
 <div class="form-group fieldGroup">
        <div class="input-group">
            <input type="text" id="name" name="name[]" class="form-control col-5 my-2 ml-4 p-1 w-100" placeholder="Tag Name"/>
            <input type="text" id="data" name="data[]" class="form-control col-4 my-2  ml-1 w-100" placeholder="Tag Data"/>
            <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn  addMore my-2" style="color:#fff;background-color: #CC8B79;"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> +</a>
            </div>
        </div>
    </div>
    <div class="form-group fieldGroupCopy" style="display: none;">
    <div class="input-group">
        <input type="text" id="name" name="name[]" class="form-control col-5 my-2 ml-4 p-1 w-100" placeholder="Tag Name"/>
        <input type="text" id="data" name="data[]" class="form-control col-4 my-2  ml-1 w-100" placeholder="Tag Data"/>
        <div class="input-group-addon"> 
            <a href="javascript:void(0)"  class="btn remove my-2"  style="background-color:#6c757d;color:#fff"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> -</a>
        </div>
    </div>
</div>

                <div class="form-group">
                    <label class=" control-label" for="pro_imgs"></label>
                    <div class="">
                        <?php
    if($is_active==1)
   echo '  <input id="is_active" name="is_active"  type="checkbox" checked >IS_ACTIVE';
   else
   echo '  <input id="is_active" name="is_active"  type="checkbox"  >IS_ACTIVE';

    ?> </div>
                </div>
                <div class="email editor">
                    <div class="col-md-12 p-0">
                        <div class="form-group">
                            <label class="control-label sr-only" for="summernote">Product Descriptions </label>
                            <textarea class="form-control" id="summernote" name="pro_details" rows="6"
                                placeholder="Write Descriptions"><?php echo $pro_details; ?></textarea>
                        </div>
                    </div>

                </div>
                <br />

                <!-- Text input-->
             


                <!-- File Button -->
               
                <div class="row py-4">
        <div class="col-12 mx-auto">

            <div class="input-group ">
                <label for="upload" class=" text-center p-2 col-4 ml-4" style="background-color: #CC8B79; color:#fff;" >Main Image</label>
                <input id="upload" name="main_img"  type="file" onchange="onFilePicked(event)"  accept="image/*"  style="display: none;">
                
            </div>
        </div>
    </div>
            <div class="row ">
        
            <div class="col-12 mx-auto">
            <div class="">
            <img id="mainImg" src="<?php echo "../../$main_img"; ?>" alt="" height="200px" width="200px" class="img-fluid rounded shadow-sm mx-auto d-block">

                <img id="image1"  alt="" height="200px" width="200px"  class="img-fluid rounded shadow-sm mx-auto d-block">
            </div>

        </div>
    </div>
                <!-- File Button -->
                <div class="form-group">
        <label class=" col-3 control-label" for="pro_imgs">Images</label>
        <div class="">
        <input type="file"  multiple id="gallery-photo-add" name="pro_imgs[]">
<div class="gallery" width="20px" height="20px"></div>


<?php
  $imgs=$pro_imgs;
  $image=sizeof( $imgs);
  //print_r($image);
  foreach( $imgs as $img){
     if($image >1){
      
  ?>
                   
                   
                        <img class="img" src="<?php echo "../../$img"; ?>" width='70'>

                        <?php
                     $image=$image-1;}
                    
  }
  ?>
                    </div>
                </div>



            <div class="form-group btn-sm">
                <div class="col-12">
                    <input type="hidden" id="pro_id" name="pro_id" value="<?php echo $pro_id; ?>">
                   <button class="btn btn-outline-light col-4 mx-auto btn-color" action="/ElectronicEcommerce/admin/admin_product/view"
                        type="submit">Update</button>
                </div>
            </div>
     

    </fieldset>

</form>

<!--<a href="/ElectronicEcommerce/admin/admin_product/"><button id="singlebutton" name="singlebutton" class="btn btn-primary  btn-right bt">Cancel</button></a>
-->
<script>
    $(document).ready(function(){
            $(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
var imagesPreview = function(input, placeToInsertImagePreview) {

if (input.files) {
    var filesAmount = input.files.length;

    for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function(event) {
            $('.img').hide();
            $($.parseHTML('<img width="100px" height="100px"  class="img-fluid rounded shadow-sm mx-auto ">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
        }

        reader.readAsDataURL(input.files[i]);
    }
}

};

$('#gallery-photo-add').on('change', function() {
    let filesize =this.size
    console.log(filesize)
   /* if (filesize < 200 * 200) {
      return alert('size must be 500* 500 or less')
    }
    else
      {*/
      imagesPreview(this, 'div.gallery'); 
}); var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            $('#mainImg').hide();

            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });

});
function  onFilePicked (event) {
    
    const files = event.target.files
    console.log(files)
    let filename = files[0].name
    if (filename.lastIndexOf('.') <= 0) {
      return alert('not image')
    }
    let filesize = files[0].size
    console.log(filesize)
    if (filesize > 400 * 400) {
      return alert('size must be 500* 500 or less')
    }
    let fileType = files[0].type
    console.log(fileType)

    if (fileType !== 'image/png') {
      if (fileType !== 'image/jpeg') {
        return alert('image type not supported')
      }
    }
    const fileReder = new FileReader()
    let formData = new FormData()
    formData.append('file', files[0])
    fileReder.addEventListener('load', () => {
      let dataURI = fileReder.result
      if (dataURI) {
      document.getElementById('image1').src = dataURI
         
      }
    })
    fileReder.readAsDataURL(files[0])
    console.log(this.image)
  }
</script>