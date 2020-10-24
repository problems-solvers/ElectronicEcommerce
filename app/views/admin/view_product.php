<?php $rows=$data['product'];
foreach($rows as $row){
  ?>   
<div class="container">
	        
	        <div class="row">
	        	<div class="col-md-6">
	        		<div id="slider" class="owl-carousel product-slider">
						<div class="item">
						  	<img src="<?php echo "../../$row->main_img"; ?>">
						</div>
                        <?php
  $imgs=explode(',',$row->pro_imgs);
 
  foreach( $imgs as $img){
 ?>
						<div class="item">
						  	<img src="<?php echo "../../$img"; ?>">
						</div>
                        <?php

  }
  ?>
						
						
					</div>
					<div id="thumb" class="owl-carousel product-thumb">
						<div class="item">
                        <img src="<?php echo "../../$row->main_img"; ?>">
						</div>
						
                        <?php
  $imgs=explode(',',$row->pro_imgs);
 
  foreach( $imgs as $img){
 ?>
						<div class="item">
						  	<img src="<?php echo "../../$img"; ?>">
						</div>
                        <?php

  }
  ?>
					</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="product-dtl">
        				<div class="product-info">
		        			<div class="product-name"> <h2 class="mb-3"><?php echo $row->pro_name; ?></h2>
                                            <h3 class="mb-3"><?php echo $row->cat_name; ?></h3>
                                            <h4 class="mb-3"><?php echo $row->tag_name; ?> :<?php echo $row->tag_data; ?></h4>
                                            </div>
		        			
		        			<div class="product-price-discount"><span><?php echo $row->pro_price; ?>$</span></div>
		        		</div>
<p>
<?php echo $row->pro_details; ?>
</p>	        			
	        			<div class="product-count">
                        <div class="product-size border-bottom">
                                            <h4>Quantity</h4>
                                            <div class="product-qty  d-inline-block">
                                                <div class="quantity  d-inline-block">
                                                   <?php echo $row->pro_quentity; ?>
                                                </div>
                                            </div>
                                            
                                        </div>
	        				
                                        <a href='http://localhost/ElectronicEcommerce/admin/admin_product' class="btn btn-success btn-block btn-sm">Back</a>
                                            <a href='http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class="btn btn-warning btn-block btn-sm">Update</a>	        			</div>
	        		</div>
	        	</div>
	        </div>
	       
			
		</div>
	</div>
    <?php
}
    ?>