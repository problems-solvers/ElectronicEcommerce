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
            </div><div class="  form-card  col-lg-12 px-5">
        <div class="row container " style=" margin-top:2%;margin-bottom:1%;"> 
            <!-- <div class="col-md-10  mx-auto text-center">
            <h3 class="fs-title my-2" style="color:#F37C21; font-weight:bold; opacity:65%"> Order Details </h3>
            </div> -->
            </div> 
    
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style=" margin-top:-13%;">
      <!-- fieldsets -->
      <fieldset>
        <h4 style="color:rgb(71, 71, 71); font-weight:bold;">Products</h4>
                  <table class="table table-responsive table-hover" style="opacity:80%">
                    <thead>
                        <tr>
                        <th style="color:#F37C21;">Product Image</th>
                            <th style="color:#F37C21;">Product Name</th>
                            <th style="color:#F37C21;">Quntity </th>
                            <th class="text-center" style="color:#F37C21;">Price</th>
                            <th class="text-center"style="color:#F37C21;">Total</th>
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
                        <td style="vertical-align:center;">
                            <img class="d-block mb-2" src="<?php echo $product->main_img; ?>" alt="" width="72" height="72">
                            </td>
                            <td style="vertical-align:center;">
                             <p><?php echo $product->pro_name; ?></p></h4>
                            </td>
                            <td  style="text-align: center; vertical-align:center;" > <?php echo $product->quentity; ?> </td>
                            <td class=" text-center" style="vertical-align:center;"><?php echo $product->pro_price; ?> $</td>
                            <td class=" text-center" style="vertical-align:center;"><?php echo $product->total_price; ?> $</td>
                       </tr>
                        <?php $sum=$sum+$product->total_price;} ?>
                        <tr class="text-center">
                        <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-center" style="color:rgb(71, 71, 71); ; font-weight:bold;">
                                ToTal:
                            </td>
                
                
                            <td class="text-right">
                                <strong id="tblTotalPrice"> <?php echo $sum;?> </strong>
                            </td>
                            

                        </tr>
                    </tbody>
                  </table>
                
               <div class="row text-center">
                 <div class="col-6">
                 <address >
                 <div class="text-left" style="margin-top:20px;">
                    <h5 style="color:#F37C21; font-weight:bold; opacity:70%;">Address Information</h5>
                      </div>
                      <?php 
                       $ord=$data['orders'];
                       $index=0;
                      
                     //print_r($ord);
                     $sum=0;
                     ?>
       <table class="table text-left text-light" >
<style>
    .table td, .table th {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    font-size:13px;
    color:rgb(71, 71, 71);
    }
</style>
                      <tbody>
                          <tr>
                          <th scope="row" id="zip_id3" >Full Name : <?php  echo $product->user_name;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="username3">Country : <?php  echo $product->country;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="city3" >Street: <?php  echo $product->street;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" id="street3">Zip_id : <?php  echo $product->zip_id;?></th>
                          <td></td>
                          </tr>
                      </tbody>
                      </table>

                  </address>
                 </div>
                 <div class="col-6">

                 <address >
                 <div class="text-left" style="margin-top:20px;">
                    <h5 style="color:#F37C21; font-weight:bold; opacity:70%;">Payment Information</h5>
                      </div>
                      <?php 
                       $ord=$data['orders'];
                       $index=0;
                      
                     //print_r($ord);
                     $sum=0;
                     ?>
       <table class="table text-left text-light" >
<style>
    .table td, .table th {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    font-size:12px;
    color:rgb(71, 71, 71);

    }
</style>
                      <tbody>
                          <tr>
                          <th scope="row"id="zip_id3" >Name : <?php  echo $product->full_name ;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="username3">Bank Account : <?php  echo $product->userbank_id ;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"   id="country3">Exp Date : <?php  echo $product->ex_date ;?></th>
                          <td></td>
                          </tr>

                      </tbody>
                      </table>

                  </div>
                  </address>

                 </div>
               </div>
                  
      </fieldset>
            </div>
              </form>                 
    
         

        </div>
