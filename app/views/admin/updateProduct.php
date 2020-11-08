<?php 
$rows=$data['updateProduct'];
foreach($rows as $row){
    //to do update controller
    ?>
<form class="form-card" action="http://localhost/ElectronicEcommerce/admin/admin_product/update" method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset">
<legend class="text-center text-dark mb-0">UPDATE  PRODUCTS</legend>
    <div class="form-radio form-radio-inline">
        
      
        
        <div class="form-group">
        <label class="control-label" for="product_name">PRODUCT NAME</label>
        <div class="">
            <input id="product_name" name="pro_name" value="<?php echo $row->pro_name; ?>" class="form-control input-md"
                required="" type="text">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="product_name">PRODUCT Brand</label>
        <div class="">
            <input id="product_brand" name="brand"  class="form-control input-md"
                required="" type="text" value="<?php echo $row->brand; ?>">

        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
        <div class="">
            <select class="form-control" id="cat1" name="cat_id">
            <option value='<?php $row->cat_id?>' disabled><?php echo $row->cat_name?></option>";  

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
<label class=" control-label" for="tag_name">Tag Name</label>  
<div class="">
<input id="tag_name" name="tag_name" value='<?php echo $row->tag_name;?>' class="form-control input-md" required="" type="text">

</div>
</div>
<div class="form-group">
<label class="control-label" for="tag_data">Tag data</label>  
<div class="">


<input type="hidden" name="count"  id="count" value="1" />
<div class="controls col-12" id="profs"> 
  <div id="field" class=" form-inline">
    <input autocomplete="off" class="input form-control" id="field1" name="field[1]" type="text" value='<?php echo  $row->tag_data;?>' data-items="8"/>
    <button id="b1" class="btn add-more" type="button">+</button>
  </div>
            
</div>
</div>

    <div class="form-group">
        <label class=" control-label" for="pro_imgs"></label>
        <div class="">
        <?php
    if($row->is_active==1)
   echo '  <input id="is_active" name="is_active"  type="checkbox" checked >IS_ACTIVE';
   else
   echo '  <input id="is_active" name="is_active"  type="checkbox"  >IS_ACTIVE';

    ?>        </div>
    </div>
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Product Descriptions </label>
                <textarea class="form-control" id="summernote" name="pro_details" rows="6"
                    placeholder="Write Descriptions"><?php echo $row->pro_details; ?></textarea>
            </div>
        </div>

    </div>
    <br />

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="available_quantity">AVAILABLE QUANTITY</label>
        <div class="">
            <input id="pro_quentity" name="pro_quentity" value="<?php echo $row->pro_quentity; ?>"
                class="form-control input-md" required="" type="number">
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="product_weight">PRODUCT PRICE</label>
        <div class="">
            <input id="pro_price" name="pro_price"  value="<?php echo $row->pro_price; ?>" class="form-control input-md"
                required="" type="number">

        </div>
    </div>




    <!-- File Button -->
    <div class="form-group">
        <label class=" control-label" for="main_img">main_image</label>
        <div class="">
            <input id="main_img" name="main_img" class="input-file" type="file" value="<?php echo $row->main_img; ?>">
                <img src="<?php echo "../../$row->main_img"; ?>" width='70'>
        </div>
    </div>
    <!-- File Button -->
    <div class="form-group">
        <label class=" control-label" for="pro_imgs">auxiliary_images</label>
        <div class="">
            <input id="pro_imgs" name="pro_imgs[]" multiple  type="file"value="<?php echo $row->pro_imgs; ?>" multiple class="input-file"
                    type="file">
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

      
    </div>
  
    <div class="form-group btn-sm">
            <div class="col-md-4">
                <input type="hidden" name="pro_id" value="<?php echo $row->pro_id; ?>">
                <input type="hidden" name="tag_id" value="<?php echo $row->tag_id; ?>">
                <input type="hidden" name="tag_details_id" value="<?php echo $row->tag_details_id; ?>">
        <button class="bt col-12 btn-fulied " action="/ElectronicEcommerce/admin/admin_product/view"  type="submit">Update</button>
                </div>
        </div>
        <?php
}
?>
   
</fieldset>

</form>

<!--<a href="/ElectronicEcommerce/admin/admin_product/"><button id="singlebutton" name="singlebutton" class="btn btn-primary  btn-right bt">Cancel</button></a>
-->
<script>
        $(document).ready(function(){
var next = 1;
$(".add-more").click(function(e){
    e.preventDefault();
    var addto = "#field" + next;
    var addRemove = "#field" + (next);
    next = next + 1;
    var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field[' + next + ']" type="text">';
    var newInput = $(newIn);
    var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
    var removeButton = $(removeBtn);
    $(addto).after(newInput);
    $(addRemove).after(removeButton);
    $("#field" + next).attr('data-source',$(addto).attr('data-source'));
    $("#count").val(next);  
    
        $('.remove-me').click(function(e){
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length-1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
            next=next-1;
        });
});



});
</script>
