

  <!-- ============================================================== -->
                    <!-- top selling products  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-5 ">
                        <div class="card box-shad">
                            <h5 class="card-header"> Most Requested Products </h5>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Brand</th>
                                                <th class="border-0">Product  Price</th>
                                                <th class="border-0">Quntitey</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $order=$data['order'];
                                        //print_r($order);
                                          $index=0;
                                        foreach($order as $val)
                                        {
                                        
 
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $val->pro_name; ?> </td>
    <td> <?php echo $val->brand; ?> </td>
    <td><?php echo $val->pro_price; ?></td>
    
            <td> <?php echo  $val->quentity; ?></td>

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>
                                           
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
                    <!-- top selling products  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 px-5 ">
                        <div class="card box-shad">
                            <h5 class="card-header"> Less Requested Products </h5>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Product Name</th>
                                                <th class="border-0">Product Brand</th>
                                                <th class="border-0">Product  Price</th>
                                                <th class="border-0">Quntitey</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $order=$data['less_order'];
                                        //print_r($order);
                                          $index=0;
                                        foreach($order as $val)
                                        {
                                        
 
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $val->pro_name; ?> </td>
    <td> <?php echo $val->brand; ?> </td>
    <td><?php echo $val->pro_price; ?></td>
    
            <td> <?php echo  $val->quentity; ?></td>

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end top selling products  -->
                    <!-- ============================================================== -->
  