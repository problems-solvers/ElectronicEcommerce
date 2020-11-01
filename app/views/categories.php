
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie"> CATEGORY PARENT</label>
  <div class="col-md-4">
  <select class="form-control" id="parent" name='parent'>
  <option value='All'>All</option>
  <?php
    
    $rows=$data['categories'];
   
    foreach($rows['parents'] as $ro){
      echo "
                                                       
      <option value='$ro->cat_id' >$ro->cat_name</option>";  
    
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
<div class="row w-75 mx-auto">
<?php  $rows=$data['featured'];
     foreach ($rows as $row) { echo ' 
<div class="col-lg-3  col-md-4 col-sm-6 col-xm-12 my-2 mx-auto">

 <div class="card productCard mx-auto " >
  <img class="card-img-top " src="'.$row->main_img.'" alt="Card image cap">
  <div class="row productCardbtns mx-0 mt-2">
  <a href="#" class="fas fa-heart addTowish mx-auto"></a>
  <div class="mx-auto">  <a href="#" ><i class="fas fa-exchange-alt"></i></a></div> 
          <a href="#" title="add to cart" class="attToCart fas fa-shopping-cart mx-auto"></a>
          </div>
  <div class="card-body py-1">
    <h5 class="card-title">'.$row->pro_name.'</h5>
    <span >'.$row->pro_price.'</span>
    <br>
    <span>'.$row->cat_name.'</span>
  </div>
 </div>
</div> ';}  
    ?>
    </div> 

    <script>
$('#parent').change(function () {
                var id=$('#parent').val();
                console.log(id);
                $.ajax({
        type: 'POST',
        url: 'http://localhost/ElectronicEcommerce/categories/sub_cat',
        data: { id:id},
        success: function (data) {
          

        }
          
            }); 
            });
    </script>