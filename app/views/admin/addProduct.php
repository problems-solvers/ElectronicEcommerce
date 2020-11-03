
<form class="form-card"  id="programmer_form" action="/ElectronicEcommerce/admin/admin_product/add"  method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset">
<legend class="text-center text-dark mb-0">ADD PRODUCTS</legend>
    <div class="form-radio form-radio-inline">
        
      
        
        <div class="form-group">
        <label class="control-label" for="product_name">PRODUCT NAME</label>
        <div class="">
            <input id="product_name" name="pro_name" placeholder="PRODUCT NAME" class="form-control input-md"
                required="" type="text">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="product_name">PRODUCT Brand</label>
        <div class="">
            <input id="product_brand" name="brand" placeholder="PRODUCT BRAND" class="form-control input-md"
                required="" type="text">

        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
        <div class="">
            <select class="form-control" id="cat1" name="cat_id">
                <option value="">category</option>

                <?php

$rows=$data['categories'];

foreach($rows['parents'] as $ro){
  echo "
                                                   
  <option value='$ro->cat_id' disabled>$ro->cat_name</option>";  

  foreach($rows['child'] as $r){
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
<input id="tag_name" name="tag_name" placeholder="Tag Name" class="form-control input-md" required="" type="text">

</div>
</div>
<div class="form-group">
<label class="control-label" for="tag_data">Tag data</label>  
<div class="">

<input type="hidden" name="count"  id="count" value="1" />
<div class="controls col-12" id="profs"> 
  <div id="field" class=" form-inline">
    <input autocomplete="off" class="input form-control" id="field1" name="field[1]" type="text" placeholder="Type something" data-items="8"/>
    <button id="b1" class="btn add-more" type="button">+</button>
  </div>
            
</div>
</div>

    <div class="form-group">
        <label class=" control-label" for="pro_imgs"></label>
        <div class="">
            <input id="is_active" name="is_active" type="checkbox">IS_ACTIVE
        </div>
    </div>
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Product Descriptions </label>
                <textarea class="form-control" id="summernote" name="pro_details" rows="6"
                    placeholder="Write Descriptions"></textarea>
            </div>
        </div>

    </div>
    <br />

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="available_quantity">AVAILABLE QUANTITY</label>
        <div class="">
            <input id="pro_quentity" name="pro_quentity" placeholder="AVAILABLE QUANTITY"
                class="form-control input-md" required="" type="number">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class=" control-label" for="product_weight">PRODUCT PRICE</label>
        <div class="">
            <input id="pro_price" name="pro_price" placeholder="PRODUCT PRICE" class="form-control input-md"
                required="" type="number">

        </div>
    </div>




    <!-- File Button -->
    <div class="form-group">
        <label class=" control-label" for="main_img">main_image</label>
        <div class="">
            <input id="main_img" name="main_img" class="input-file" type="file">
        </div>
    </div>
    <!-- File Button -->
    <div class="form-group">
        <label class=" control-label" for="pro_imgs">auxiliary_images</label>
        <div class="">
            <input id="pro_imgs" name="pro_imgs[]" multiple class="input-file" type="file">
        </div>
    </div>

      
    </div>
  
    <div class="form-actions btn-sm">
    <button class="form-btn  bt " action="/ElectronicEcommerce/admin/admin_product/view"  type="submit"> Add Product</button>
</div>
    </div>
</fieldset>

</form>

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
