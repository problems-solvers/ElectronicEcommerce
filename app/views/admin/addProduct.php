<!-- start add form-->
<form class="form-horizontal" action="/ElectronicEcommerce/admin/admin_product/add" method="POST"
    enctype="multipart/form-data">
    <fieldset>

        <!-- Form Name -->
        <legend>PRODUCTS</legend>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="pro_name" placeholder="PRODUCT NAME" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">PRODUCT Brand</label>
            <div class="col-md-4">
                <input id="product_brand" name="brand" placeholder="PRODUCT BRAND" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
            <div class="col-md-4">
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
            <label class="col-md-4 control-label" for="pro_imgs"></label>
            <div class="col-md-4">
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
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>
            <div class="col-md-4">
                <input id="pro_quentity" name="pro_quentity" placeholder="AVAILABLE QUANTITY"
                    class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_weight">PRODUCT PRICE</label>
            <div class="col-md-4">
                <input id="pro_price" name="pro_price" placeholder="PRODUCT PRICE" class="form-control input-md"
                    required="" type="text">

            </div>
        </div>




        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="main_img">main_image</label>
            <div class="col-md-4">
                <input id="main_img" name="main_img" class="input-file" type="file">
            </div>
        </div>
        <!-- File Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pro_imgs">auxiliary_images</label>
            <div class="col-md-4">
                <input id="pro_imgs" name="pro_imgs[]" multiple class="input-file" type="file">
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <div class="col-md-4">
                <button id="singlebutton" action="/ElectronicEcommerce/admin/admin_product/view" name="singlebutton"class="btn btn-primary mybtn" style="backgroun-color:none;">ADD PRODUCT</button>
            </div>
        </div>
</form>
<script>

    $('#cat1').change(function () {
        var cat1 = $('#cat1').val();
        if (cat1 != '') {
            $.ajax({
                url: "http://localhost/ElectronicEcommerce/admin/admin_product/child",
                method: "POST",
                data: { cat1: cat1 },
                success: function (data) {
                    $('#cat2').html(data);
                }
            });
        }
        else {
            $('#cat2').html('<option value="">Select City</option>');
        }
    });
</script>