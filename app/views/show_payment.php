
                <div class="container mx-auto">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quntity </th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                     <?php 
                     $pro=$data['product'];
                     foreach($pro as $product){
                     ?>
                        <tr>
                            <td class="col-md-9"><em><?php echo $product->pro_name; ?></em></h4>
                            </td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $product->quentity; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $product->pro_price; ?></td>
                            <td class="col-md-1 text-center"><?php echo $product->total_price; ?></td>
                        </tr>
               <?php }
               ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                                <strong>ToTal:<?php echo $product->pro_price*$product->quentity;?> </strong>
                            </td>
                           
                        </tr>
                    </tbody>
                </table>
                <?php 
 $rows=$data['order'];
            foreach($rows as $row){
                ?>
                    <address >
                    <div class="text-center">
                    <h1>User Information</h1>
                </div>
                        <strong>ElectronicEcommerce</strong>
                        <strong class="ml-3">User Name :<?php echo $row->user_name;?></strong>
                        <br>
                        <abbr title="Phone" >  country: </abbr> <?php echo $row->country;?>
                         
                        <abbr title="Phone" class="ml-5"> city :  </abbr><?php echo $row->city;?>
                         <br>
                          <br>
                          <abbr title="Phone">street : </abbr> <?php echo $row->street;?>
                     
                        <abbr title="Phone" class="ml-5">Zip_id</abbr> <?php echo $row->zip_id;?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo $row->start_date;?></em>
                    </p>
                    <p>
                        <em>Receipt : <?php echo $row->order_id;?></em>
                    </p>
                </div>
            </div>
         
        </div>
    </div>
    
    <div class="row">
               
               <td>
               <a href="http://localhost/ElectronicEcommerce/payment/updateorder" ><button type="button" class="btn btn-success btn-sm mx-2 ">
                   Confirmation  
               </button></a>
            </td>
               <td>
            <a href="http://localhost/ElectronicEcommerce/payment/delete" ><button type="button" class="btn btn-danger btn-sm mx-2">
                   Cancel
               </button></a></td>
           </div>
</div>
<?php
exit();
}
?>