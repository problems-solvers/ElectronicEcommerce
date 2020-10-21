<?php $rows=$data['product'];
foreach($rows as $row){
  ?>   
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider "  style="height:400px">
                                        <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="../../<?php echo $row->main_img; ?>" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                             <span class="sr-only">Previous</span>
                                                  </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                 <span class="sr-only">Next</span>
                                                     </a>
                                        </div>
                                    </div>
                                </div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details" style="height:400px">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3"><?php echo $row->pro_name; ?></h2>
                                           
                                            <h3 class="mb-0 text-primary"><?php echo $row->pro_price; ?></h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Quantity</h4>
                                            <div class="product-qty  d-inline-block">
                                                <div class="quantity  d-inline-block">
                                                    <input type="number" class=" d-inline-block" value="<?php echo $row->pro_quentity; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                       
                                        <div class="product-description">
                                            <h4 class="mb-1">Descriptions</h4>
                                            <p><?php echo $row->pro_details; ?></p>
                                            <a href='http://localhost/ElectronicEcommerce/admin/admin_product' class="btn btn-primary btn-block btn-sm">Back</a>
                                            <a href='http://localhost/ecomm/admin/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class="btn btn-primary btn-block btn-sm">Update</a>
                                        </div>
                                    </div>
                                </div>
                              
                                <?php
}
                                ?>