<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">Dashboard</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
<?php
$customer=$data['Customer'];
$product=$data['product'];
$order=$data['order'];


?>
    <div class="dashboard-main-wrapper">
       
                        <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Product</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php 
                                            
                                            
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
                          
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">New Customer</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php 
                                            
                                            
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
                          
                           
                             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Orders</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php 
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
         