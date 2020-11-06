
<form class="form-card"  id="programmer_form" action="/ElectronicEcommerce/admin/admin_advertiment/add"  method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset">
<legend class="text-center text-dark mb-0">ADD Advertisment</legend>
    <div class="form-radio form-radio-inline">
        
      
        
        <div class="form-group">
        <label class="control-label" for="product_name">Advertisment NAME</label>
        <div class="">
            <input id="product_name" name="adver_name" placeholder="PRODUCT NAME" class="form-control input-md"
                required="" type="text">

        </div>
    </div>

    

    <!-- Select Basic -->
    <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
        <div class="">
            <select class="form-control" id="cat1" name="offer_id">
                <option value="">category</option>

                <?php

$rows=$data['offer'];

foreach($rows as $ro){
  echo "
                                                   
  <option value='$ro->offer_id' >$ro->offer_name</option>";  

 

}
?>
            </select>
        </div>
    </div>
   
    <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT CATEGORY</label>
        <div class="">
            <select class="form-control" id="cat1" name="adver_namber">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

          
            </select>
        </div>
    </div>
   


   
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Advertisment Descriptions </label>
                <textarea class="form-control" id="summernote" name="adver_details" rows="6"
                    placeholder="Write Descriptions"></textarea>
            </div>
        </div>

    </div>
    <br />

   




    <!-- File Button -->
    <div class="form-group">
        <label class=" control-label" for="main_img">main_image</label>
        <div class="">
            <input id="main_img" name="main_img" class="input-file" type="file">
        </div>
    </div>
   
  
    <div class="form-actions btn-sm">
    <button class="form-btn  bt " action="/ElectronicEcommerce/admin/admin_advertiment/"  type="submit"> Add Product</button>
</div>
    </div>
</fieldset>

</form>

