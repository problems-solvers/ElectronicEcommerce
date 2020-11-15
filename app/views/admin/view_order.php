<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">ORDERS</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SHOW ORDERS</li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header ">
            <h5 class="mb-0  d-inline-block">ORDER Table</h5>
           
        </div>
        <div class="card-body ">
            <div class="table-responsive col-12 w-100">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                                           <tr>
                                           <th scope="col"  style="color:#836691;"> #</th>
                                           <th scope="col"  style="color:#836691;">Order date</th>
                                           <th scope="col"  style="color:#836691;">Deliver date</th>
                                           <th scope="col"  style="color:#836691;">Total price</th>
                                           <th scope="col"  style="color:#836691;">Orders Status</th>
                                           <th scope="col"  style="color:#836691;">View more</th>
                                           </tr>
                                       </thead>
                    <tbody>
                        <?php
  $ord=$data['order'];
  $index=0;  
  foreach($ord as $or){
    $index=$index+1; ?>
    <tr>
    <td> <?php echo $index; ?> </td>
    <td> <?php echo $or->start_date; ?> </td>
    <td> <?php echo $or->deliver_date; ?> </td>
    <td><?php echo $or->total_price; ?></td>
    <td> <?php $status='';
    if($or->order_status==1)
                   $status="In Prograss" ;
    
            else if($or->order_status==2) 
            $status="Delivered " ;

            echo $status; ?> </td>

    <td class="text-center">  
        <a href="http://localhost/ElectronicEcommerce/admin/admin_orders/viewmore?action=view&id=<?php echo $or->order_id;?>" ><i class="fa fa-th" aria-hidden="true"></i>
            </a>
    </td>
    </tr>

    <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>


        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
