<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title" >E-commerce Orders</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show Orders</li>
                            <li class="breadcrumb-item active" aria-current="page"> Orders Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="container  form-card  col-lg-12 px-5">
       
    
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style=" margin-top:-13%;">
      <!-- fieldsets -->
      <fieldset>
        <h3 >Products</h3>
                  <table class="table table-hover">
                    <thead>
                        <tr>
                            <th >Product</th>
                            <th>Quntity </th>
                            <th>Price</th>
                            <th >Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                     <?php 
                       $ord=$data['orders'];
                       $index=0;
                      
                     //print_r($ord);
                     $sum=0;
                     foreach($ord as $product){
                      //print_r($pro);
                     ?>
                        <tr>
                            <td class="col-md-9">
                            <img class="d-block mb-2" src="<?php echo $product->main_img; ?>" alt="" width="72" height="72">
                            <em><?php echo $product->pro_name; ?></em></h4>
                            </td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $product->quentity; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $product->pro_price; ?></td>
                            <td class="col-md-1 text-center"><?php echo $product->total_price; ?></td>
                        </tr>
                        <?php $sum=$sum+$product->total_price;} ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                                ToTal: <?php echo $sum;?>
                            </td>
                            <td class="text-right">
                                <strong id="tblTotalPrice"> </strong>
                            </td>
                            
                        </tr>
                    </tbody>
                  </table>
                
               <div class="row text-center">
                 <div class="col-6">
                 <address >
                    <div class="text-center">
                    <h3 >Address Information</h3>
                      </div>
                     <?php 
                       $ord=$data['orders'];
                       $index=0;
                      
                     //print_r($ord);
                     $sum=0;
                     foreach($ord as $product){
                     ?>
                        <!-- <strong>ElectronicEcommerce</strong> -->
                        <span title="Phone" id="zip_id3" >Full Name : <?php  echo $product->user_name;?> </span><br>

<span  id="username3">Country : <?php  echo $product->country;?></span><br>
<span title="Phone" id="country3">City : <?php  echo $product->city;?></span> <br>
 
<span title="Phone" id="city3" >Street: <?php  echo $product->country;?> </span><br>
 
  <span title="Phone" id="street3">Zip_id : <?php  echo $product->zip_id;?></span> <br>
<?php }?>
                  </address>
                 </div>
                 <div class="col-6">
                 <address >
                    <div class="text-center">
                    <h3 >Payment Information</h3>
                      </div> 
                      <?php 
                       $ord=$data['orders'];
                       $index=0;
                      
                     //print_r($ord);
                     $sum=0;
                     foreach($ord as $product){
                     ?>
                        <!-- <strong>ElectronicEcommerce</strong> -->
                        <span title="Phone" id="zip_id3" >Full Name : <?php  echo $product->full_name ;?> </span><br>

<span  id="username3">Bank Account : <?php  echo $product->userbank_id ;?></span><br>
<span title="Phone" id="country3">Exp Date : <?php  echo $product->ex_date ;?></span> <br>
 
 
<?php }?>
                     
                  </address>
                 </div>
               </div>
                  
      </fieldset>
            </div>
              </form>                 
    
         

        </div>
