<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">Dashboard</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
<?php
$customer=$data['Customer'];
$product=$data['product'];
$order=$data['order'];


?>
    <div class="dashboard-main-wrapper mx-auto align-self-center">
       
                        <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12  mx-auto align-self-center">
                                <div class="card box-shad " style="border-top:#6f42c1 3px solid ">
                                    <div class="card-body">
                                        <h5 class="text-muted ">Product</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1 text-center"><?php 
                                            
                                            
                                            foreach($product as $key=>$val)
                                                 {
                                                        foreach($val as $key=>$value)
                                                 {
                                                 echo $value;
                                                 }
                                                 }
                                                                                           
                                           
                                            ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12  mx-auto align-self-center">
                                <div class="card box-shad" style="border-top:#6f42c1 3px solid ">
                                    <div class="card-body">
                                        <h5 class="text-muted ">New Customer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1 text-center"><?php 
                                            
                                            
                                            foreach($customer as $key=>$val)
                                            {
                                                   foreach($val as $key=>$value)
                                            {
                                            echo $value;
                                            }}
                                            ?></h1>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                          
                           
                             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12  mx-auto align-self-center">
                                <div class="card box-shad"style="border-top:#6f42c1 3px solid;">
                                    <div class="card-body">
                                        <h5 class="text-muted ">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1 text-center"><?php 
                                             foreach($order as $key=>$val)
                                             {
                                                    foreach($val as $key=>$value)
                                             {
                                             echo $value;
                                             }
                                          }
                                            ?></h1>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            </div>
                       
                        
                    </div>
                </div>
            </div>

               <!-- ============================================================== -->
                    <!-- top selling products  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-5 ">
                        <div class="card box-shad">
                            <h5 class="card-header">Top Order </h5>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Order Date</th>
                                                <th class="border-0">Deliver Date</th>
                                                <th class="border-0">Total Price</th>
                                                <th class="border-0">Order Status</th>
                                                <th class="border-0">Customer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
  $ord=$data['orders'];
  $index=0;  
  foreach($ord as $or){
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $or->start_date; ?> </td>
    <td> <?php echo $or->end_date; ?> </td>
    <td><?php echo $or->total_price; ?></td>
    <td> <?php $status='';
    if($or->order_status==1)
                   $status="In Prograss" ;
    
            else if($or->order_status==2) 
            $status="Delivered " ;

            echo $status; ?> </td>
            <td> <?php echo $or->first_name.' '.$or->last_name; ?></td>

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>
                                            <tr>
                                                <td colspan="8"><a href="http://localhost/ElectronicEcommerce/admin/admin_orders" class="btn btn-outline-light float-right  mx-auto btn-color">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end top selling products  -->
                    <!-- ============================================================== -->
         
               <!-- ============================================================== -->
                    <!-- last user  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-5 ">
                        <div class="card box-shad">
                            <h5 class="card-header">Last Registered </h5>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">First Name</th>
                                                <th class="border-0">Last Name</th>
                                                <th class="border-0">User Email</th>
                                                <th class="border-0">Create Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
  $ord=$data['user'];
  $index=0;  
  foreach($ord as $or){
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $or->first_name; ?> </td>
    <td> <?php echo $or->last_name; ?> </td>
    <td><?php echo $or->user_email; ?></td>
            <td> <?php echo $or->create_date ; ?></td>

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>
                                            <tr>
                                                <td colspan="8"><a href="http://localhost/ElectronicEcommerce/admin/admin_cust/" class="btn btn-outline-light float-right  mx-auto btn-color">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- endlast user -->
                    <!-- ============================================================== -->
         