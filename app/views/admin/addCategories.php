<div class="row my-3">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Add New Category</h2>
           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Categories</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form class="form-card"  action=""  method="POST" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="control-label mx-3" for="cat_name">Category Name</label>  
  <div class="">
  <input id="cat_name" name="cat_name" placeholder="Category Name" class="col-md-8  form-control input-md mx-3" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="  control-label mx-3" for="product_categorie"> CATEGORY PARENT</label>
  <div class="">
  <select class="input form-control my-3 mx-3 col-md-8 " id="parent" name='parent'>
  <option value='0'>Defualt</option>
    <?php
    
    $rows=$data['categories'];
    foreach($rows as $ro){
      echo "
                                                       
      <option value='$ro->cat_id'>$ro->cat_name</option>
      ";    }
    ?>
    </select>
  </div>
</div>

<div class="form-group">
        <label class="mx-2 control-label" for="pro_imgs"></label>
        <div class="mx-3">
            <input id="is_active" name="is_active" type="checkbox">IS_ACTIVE
        </div>
    </div>
<!-- Button -->
<div class="form-group">
  <div class="col-md-5">
    <button id="singlebutton"  name="singlebutton" class="btn btn-block bt">ADD Category</button>
  </div>
  </div>
  </form>
  <script>
    var cat_name=$('#cat_name').val();
    var parent=$('#parent').val();
    var is_active=$('#is_active').val();
    console.log(cat_name);
   $.ajax({
             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/admin/admin_cat/addCattegories",
             data: {cat_name:cat_name,is_active:is_active,parent:parent},
             success: function(response) {
           
             
             },
             error:function(){
              window.location.replace('http://localhost/ElectronicEcommerce/admin/admin_cat/');

alert("SecusseFull Add");
             }
           })
    </script>
 
