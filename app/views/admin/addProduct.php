<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h2 class="pageheader-title">E-commerce Product </h2>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Product</li>
                        <li class="breadcrumb-item active" aria-current="page"> Add Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form class="form-card form-inline col-12"  id="programmer_form" action="/ElectronicEcommerce/admin/admin_product/add"  method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset col-12">
    
      
        <div class="form-group col-12">
        <div class="col-12">
            <input id="product_name" name="pro_name" placeholder="PRODUCT NAME" class=" form-control w-100 col-12 mr-3"required="" type="text">

        </div>
    </div>

    <!-- Text input-->
    <div class="form-group col-12 m-2">

            <select class="form-control col-5 m-1" id="cat1" name="cat_id">
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
            <input id="product_brand" name="brand" placeholder="PRODUCT BRAND" class="m-1 w-100 form-control col-6"required="" type="text">

        
    </div>
    <div class="form-group col-12 m-2">
    <input id="pro_price" name="pro_price" placeholder="PRODUCT PRICE" class="form-control col-5 m-1"
                required="" type="number">
    <input id="pro_quentity" name="pro_quentity" placeholder="AVAILABLE QUANTITY" class="m-1 w-100 form-control col-6"required="" type="number">
       
         
     
       
        

       
    </div>

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
       
        <div class="col-12">
            <input class="form-control col-6 ml-3"id="is_active" name="is_active" type="checkbox"> ACTIVE
        </div>
    </div>
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote">Product Descriptions </label>
                <textarea class="form-control col-11 m-3" id="summernote" name="pro_details" rows="6"
                    placeholder="Write Descriptions"></textarea>
            </div>
        </div>

    </div>
    <br />

    <!-- Text input-->
   
    <div class="row py-4">
        <div class="col-12 mx-auto">

            <div class="input-group ">
                <label for="upload" class=" p-2 col-4 ml-4" style="background-color: #CC8B79; color:#fff;" >Main Image</label>
                <input id="upload" type="file" onchange="onFilePicked(event)"  accept="image/*"  style="display: none;">
                
            </div>
        </div>
    </div>
            <div class="row ">
        
            <div class="col-12 mx-auto">
            <div class="">
                <img id="image1"  alt="" height="200px" width="200px" name="main_img" class="img-fluid rounded shadow-sm mx-auto d-block">
            </div>

        </div>
    </div>



   
    <div class="form-group">
        <label class=" col-3 control-label" for="pro_imgs">Images</label>
        <div class="">
        <input type="file"  multiple id="gallery-photo-add" name="pro_imgs[]">
<div class="gallery" width="20px" height="20px"></div>


        </div>
    </div>

      
    
  
    <div class="form-actions btn-sm col-12">
    <button class="btn btn-outline-light col-4 mx-auto btn-color" type="submit"> Add Product</button>
</div>
   
</fieldset>

</form>

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
