
  <?php
  $rows=$data['updateProduct'];
foreach($rows as $row){
  ?>                  <!-- start add form-->
  <form class="form-horizontal"  action="/ElectronicEcommerce/admin/admin_product/update"  method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="pro_name"   class="form-control input-md"  type="text" value="<?php echo $row->pro_name; ?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT Brand</label>  
  <div class="col-md-4">
  <input id="product_brand" name="brand"  class="form-control input-md" type="text" value="<?php echo $row->brand; ?>">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="pro_imgs"></label>
  <div class="col-md-4">
  <?php
    if($row->is_active==1)
   echo '  <input id="is_active" name="is_active"  type="checkbox" checked >IS_ACTIVE';
   else
   echo '  <input id="is_active" name="is_active"  type="checkbox"  >IS_ACTIVE';

    ?> 
  
  </div>
</div>
          <div class="email editor">
     <div class="col-md-12 p-0">
         <div class="form-group">
             <label class="control-label sr-only" for="summernote">Product Descriptions </label>
             <textarea class="form-control" id="summernote" name="pro_details" rows="6" ><?php echo $row->pro_details; ?></textarea>
         </div>
     </div>
    
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="pro_quentity" value="<?php echo $row->pro_quentity; ?>" name="pro_quentity"  class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="pro_price" name="pro_price" value="<?php echo $row->pro_price; ?>" class="form-control input-md" type="text">
    
  </div>
</div>
          


    
 <!-- File Button --> 
 <div class="form-group">
  <label class="col-md-4 control-label" for="main_img">main_image</label>
  <div class="col-md-4">
  <input id="main_img" name="main_img" class="input-file" type="file" value="<?php echo $row->main_img; ?>">
  <img src="<?php echo "../../$row->main_img"; ?>" width='70'>
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="pro_imgs">auxiliary_images</label>
  <div class="col-md-4 w-50 h-50">
    <input id="pro_imgs" name="pro_imgs[]" value="<?php echo $row->pro_imgs; ?>"  multiple  class="input-file" type="file">
    <?php
  $imgs=explode(',',$row->pro_imgs);
 
 foreach( $imgs as $img){
?>
  <img src="<?php echo "../../$img"; ?>" width='70'>

<?php
  }
    ?>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
  <input type="hidden"  name="pro_id" value="<?php echo $row->pro_id; ?>" >
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">update PRODUCT</button>
  </div>
  </div>
<?php
}
?>
  </form>