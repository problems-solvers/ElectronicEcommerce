
    
  
                      <?php 
                     $ord=$data['order'];
                     $coun=count($ord);
                     $index=0;
                     if($coun>0){
                       echo '<div class="container col-12  mar">
                       <div class="row container " style=" margin-top:2%;margin-bottom:1%;"> 
                           <div class="col-md-12  mx-auto text-center">
                           <h2 class="fs-title" style="color:#836691; font-weight:bold;">show your order </h2>
                           </div>
                           </div> 
                         <div class="py-5 text-center">
                       </div>
                       <form id="msform" method="POST">
                       <div style="margin-left:8%; margin-top:-13%;">
                         <!-- fieldsets -->
                         <fieldset  class="col-md-10 order-md-1"> 
                       <div class="row container" >
                                 <div class=" col-md-12 order-md-1 " >             
                               <table class="table " >
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
                                           ';
                     foreach($ord as $or){
                       $index=$index+1;
                     ?>
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
                              <a href="http://localhost/ElectronicEcommerce/userprofiel/viewmore?action=view&id=<?php echo $or->order_id;?>" ><i class="fa fa-th" aria-hidden="true"></i>
                                  </a>
                          </td>
                          </tr>

                          <?php } ?>
                             
                         
                         
                         
                      </tbody>
                      </table>

                  </div>

                  </div>         


              </fieldset>
            </div>
              </form>                 
    
         

        </div>
                     <?php  } else { ?>
    
    <div class="container col-12 text-center">

    <h1> You Don't Have Any  Orders ! <h1>
    <h3> Plese Shooping from Our Store</h3>
    <img src="/ElectronicEcommerce/app/assets/images/no.jpg">
    </div>
    <?php } ?>