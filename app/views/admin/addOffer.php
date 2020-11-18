<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h2 class="pageheader-title">E-commerce Offers </h2>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Offers</li>
                        <li class="breadcrumb-item active" aria-current="page"> Add Offers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    <div class="row">
      <div class="col">
      <form class="form-card"  id="programmer_form" action="/ElectronicEcommerce/admin/admin_offers/add"  method="POST" enctype="multipart/form-data">

<fieldset class="form-fieldset">
    <div class="form-radio form-radio-inline">
        
      
        
        <div class="form-group">
        <label class="control-label" for="product_name">OFFER NAME</label>
        <div class="">
            <input id="product_name" name="offer_name" placeholder="OFFER NAME" class="form-control input-md"
                required="" type="text">

        </div>
    </div>

    <div class="form-group">
        <label class="control-label" for="product_name">START DATE</label>
        <div class="">
            <input id="product_name" name="start_date" placeholder=" START DATE" class="form-control input-md"
                required="" type="date">

        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="product_name">END DATE</label>
        <div class="">
            <input id="product_name" name="end_date" placeholder=" END DATE" class="form-control input-md"
                required="" type="date">

        </div>
    </div>


    
    <div class="radio">
    <legend class="text-center text-dark mb-0">OFFERS TYPE</legend>

        <div class="custom-control custom-radio">
          <input id="dicount" name="Regarding" type="radio" class="custom-control-input" value="1" required>
          <label class="custom-control-label" for="dicount">Discount <span class="statusOther" style="visibility:visible"></span></label>
          <div id="divOther" class="collapse fade">
          <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT:</label>
        <div class="">
            <select class="form-control" id="cat1" name="prro_id">

                <?php
$rows=$data['product'];

foreach($rows as $ro){
  echo "
                                                   
  <option value='$ro->pro_id' >$ro->pro_name</option>";  

  

}
?>
            </select>
        </div>
    </div>
          <label for="ifOther"> Discount:</label>
          <input id="pro_quentity" name="dicount_amont" placeholder="Discount"
                class="form-control input-md" type="number">
        </div>
        </div>



        <div class="custom-control custom-radio">
          <input id="ExtraItem" name="Regarding" type="radio" class="custom-control-input" value="2" required>
          <label class="custom-control-label" for="ExtraItem">Extra Item <span class="statusOther" style="visibility:visible"></span></label>
          <div id="NotdivOther" class="collapse fade">
          <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT:</label>
        <div class="">
            <select class="form-control" id="cat1" name="product_id">

                <?php
$rows=$data['product'];

foreach($rows as $ro){
  echo "
                                                   
  <option value='$ro->pro_id' >$ro->pro_name</option>";  

  

}
?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class=" control-label" for="product_categorie">Extra Item:</label>
        <div class="">
            <select class="form-control" id="cat1" name="extra_item">

                <?php
$rows=$data['product'];

foreach($rows as $ro){
  echo "
                                                   
  <option value='$ro->pro_id' >$ro->pro_name</option>";  

  

}
?>
            </select>
        </div>
    </div>

    <label for="ifOther"> Qunetity:</label>
          <input id="pro_quentity" name="qnetity" placeholder="qunetity"
                class="form-control input-md"  type="number">
       


    
    </div>
        </div>
        <div class="custom-control custom-radio">
          <input id="giff" name="Regarding" type="radio" class="custom-control-input" value="3" required>
          <label class="custom-control-label" for="giff">Giff <span class="statusOther" style="visibility:visible"></span></label>
          <div id="giffOther" class="collapse fade">
          <div class="form-group">
        <label class=" control-label" for="product_categorie">PRODUCT:</label>
        <div class="">
            <select class="form-control" id="cat1" name="pro_id">
                <option value="">Product </option>

                <?php

$rows=$data['product'];

foreach($rows as $ro){
  echo "
                                                   
  <option value='$ro->pro_id' >$ro->pro_name</option>";  

  

}
?>
            </select>
        </div>
    </div>
    
    
    
    <div class="email editor">
        <div class="col-md-12 p-0">
            <div class="form-group">
                <label class="control-label sr-only" for="summernote"> Descriptions </label>
                <textarea class="form-control" id="summernote" name="dscription" rows="6"
                    placeholder="Write Descriptions"></textarea>
            </div>
        </div>

    </div>
    
    </div>
        </div>
       
     </div>
        
      </div>
      <div class="form-group">
  <div class="col-12">
    <button id="singlebutton" class="btn btn-outline-light col-4 mx-auto btn-color">ADD Offers</button>
  </div>
  </div>
    </div>

  
  </div>
</fieldset>

</form>
<script>
$(document).ready(function () {
  $("input:radio[name=Regarding]").change(function () {
    if (this.id == "dicount") {
      $("#divOther").addClass("show");
    } else {
      $("#divOther").removeClass("show");
    }
    if (this.id == "ExtraItem") {
      $("#NotdivOther").addClass("show");
    } else {
      $("#NotdivOther").removeClass("show");
    }

    if (this.id == "giff") {
      $("#giffOther").addClass("show");
    } else {
      $("#giffOther").removeClass("show");
    }
  });
});
</script>

