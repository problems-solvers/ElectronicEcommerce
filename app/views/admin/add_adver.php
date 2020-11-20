<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h2 class="pageheader-title">E-commerce Advertisment </h2>


            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Advertisment</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Advertisment</li>
                    </ol>
                </nav>
          

            </div>
        </div>
    </div>
</div>
<form class="form-card"  id="programmer_form" action="/ElectronicEcommerce/admin/admin_advertiment/add"  method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset">
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
        <label class=" control-label" for="product_categorie">Offer Type</label>
        <div class="">
            <select class="form-control" id="cat1" name="offer_id">

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
        <label class=" control-label" for="product_categorie">Advertisment Number</label>
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
    
     <div class="row ">
        
        <div class="col-12 mx-auto">
        <div class="">
            <img id="image1" style="border:2px solid #CC8B79; width:150px; height:150px"  alt="" height="200px" width="200px" name="main_img" class="img-fluid rounded shadow-sm mx-auto d-block">
        </div>

    </div>
</div>


<div class="row py-4">
    <div class="col-12 mx-auto">

        <div class="input-group ">
            <label for="upload" class=" p-2 mx-auto col-4 ml-4 text-center" style="background-color: #CC8B79; color:#fff;" >Main Image</label>
            <input id="upload" type="file" onchange="onFilePicked(event)"  accept="image/*"  style="display: none;">
            
        </div>
    </div>
</div>

   
  
    <div class="form-actions btn-sm col-12 ">
    <button class="btn btn-outline-light col-4 mx-auto" style="background-color:#836691;color:white"  action="/ElectronicEcommerce/admin/admin_advertiment/"  type="submit"> Add Advertisment</button>
</div>
    </div>
</fieldset>

</form>
<script>

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
