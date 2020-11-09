<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">Offers</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SHOW OFFERS</li>
                        </ol>
                    </nav>
                    <a href="/ElectronicEcommerce/admin/admin_offers/addOffer"><button type="button"
                                          class="d-inline-block btn  btn-sm  btn-left bt"
                                          style="float:right; 	border-radius:20px;">Add Offers</button></a>
                 
                                          </div>
            </div> </div>
            </div>
<div class="container">
<ul class="nav nav-tabs">
    <li class="nav-link active"><a href="#home">Discount</a></li>
    <li class="nav-link"><a href="#menu1">Extra Item</a></li>

    <li class="nav-link"><a href="#menu2">Giff Item</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active show">
    
   
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card">
                          <div class="card-header ">
                              <h5 class="mb-0  d-inline-block">Dicount Table</h5>
                             
                          </div>
                          <div class="card-body">
                              <div class="table-responsive col-12 w-100">
                              <table id="example" class="table table-striped table-bordered second"
                                                  style="width:100%">
                                                  <thead>
                                                      <tr>
                                                          <th class="th-sm">#
                                                          </th>
                                                          <th class="th-sm">Product Name
                                                          </th>
                                                          <th class="th-sm">Extra Item
                                                          </th>
                                                         
                                                          <th class="th-sm"> Qunetity 
                                                          </th>
      
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php
      $index=1;  
      $rows=$data['extra'];
      $pro=$data['product'];
      foreach($rows as $ro){
    foreach($pro as $product){
        if($product->pro_id == $ro->extra_item_id)
        {
            $name=$product->pro_name;
    }
    }
      
      echo "
      <tr>
      <td>$index</td>                                       
      <td>$ro->pro_name</td>
      <td>$name</td>
      <td>$ro->qunetity </td>
      </tr> ";  
      $index+=1; 
      
      
      
      }
      
      
      
      ?>
                                                  </tbody>
      
                                              </table>
  
                                  </table>
                              </div>
                          </div>

    </div>
    </div>

</div>
    <div id="menu1" class="tab-pane fade">
     
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                              <div class="card">
                                  <div class="card-header ">
                                      <h5 class="mb-0  d-inline-block">Extra Item Table</h5>
                                     
                                  </div>
                                  <div class="card-body">
                                      <div class="table-responsive col-12 w-100">
                                      <table id="example" class="table table-striped table-bordered second"
                                          style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th class="th-sm">#
                                                  </th>
                                                  <th class="th-sm">Product Name
                                                  </th>
                                                  <th class="th-sm">Description
                                                  </th>
                                                 
      
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
      $index=1;  
      $rows=$data['giff'];
      
      foreach($rows as $ro){
      
      echo "
      <tr>
      <td>$index</td>                                       
      <td>$ro->pro_name </td>
      <td>$ro->description</td>
      </tr> ";  
      $index+=1; 
      
      }
      
      
      
      ?>
      
                                          </tbody>
      
                                      </table>
                                      </div>
                                  </div>
  
    </div>
   
   
  </div>
</div>
   
    
  </div>
  <div id="menu2" class="tab-pane fade">
     
     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                             <div class="card">
                                 <div class="card-header ">
                                     <h5 class="mb-0  d-inline-block"> Giff Table</h5>
                                    
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive col-12 w-100">
                                     <table id="example" class="table table-striped table-bordered second"
                                         style="width:100%">
                                         <thead>
                                             <tr>
                                                 <th class="th-sm">#
                                                 </th>
                                                 <th class="th-sm">Product Name
                                                 </th>
                                                 <th class="th-sm">Description
                                                 </th>
                                                
     
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
     $index=1;  
     $rows=$data['giff'];
     
     foreach($rows as $ro){
     
     echo "
     <tr>
     <td>$index</td>                                       
     <td>$ro->pro_name </td>
     <td>$ro->description</td>
     </tr> ";  
     $index+=1; 
     
     }
     
     
     
     ?>
     
                                         </tbody>
     
                                     </table>
                                     </div>
                                 </div>
 
   </div>
   </div>
  
 </div>
</div>

   <div id="menu2" class="tab-pane fade">
     
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                              <div class="card">
                                  <div class="card-header ">
                                      <h5 class="mb-0  d-inline-block">Extra Item Table</h5>
                                     
                                  </div>
                                  <div class="card-body">
                                      <div class="table-responsive col-12 w-100">
                                      <table id="example" class="table table-striped table-bordered second"
                                          style="width:100%">
                                          <thead>
                                              <tr>
                                                  <th class="th-sm">#
                                                  </th>
                                                  <th class="th-sm">Product Name
                                                  </th>
                                                  <th class="th-sm">Description
                                                  </th>
                                                 
      
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php
      $index=1;  
      $rows=$data['giff'];
      
      foreach($rows as $ro){
      
      echo "
      <tr>
      <td>$index</td>                                       
      <td>$ro->pro_name </td>
      <td>$ro->description</td>
      </tr> ";  
      $index+=1; 
      
      }
      
      
      
      ?>
      
                                          </tbody>
      
                                      </table>
                                      </div>
                                  </div>
  
    </div>
   
   
  </div>
</div>
   
    
  </div>
   


 
  
   
 </div>
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
    $(this).tab('active');
  });
  

  
});
</script>