<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<?php
$_SESSION['redirect']=$_SERVER['REQUEST_URI'];
if(isset($_SESSION['order_id'])==''){
    echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/';</script>";

}
            //$order=$data['order'];
           // print_r($order);
            $adminAccount=$data['adminAccount'];
          // foreach($rows as $row){
           
?>
<div class="container-fluid mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
      <!-- progressbar -->
      <ul id="progressbar">
        <li class="active">add address</li>
        <li>paymentMethod</li>
        <li>address and payment dtails</li>
      </ul>
      <!-- fieldsets -->
      <fieldset>
        <h2 class="fs-title">add address </h2>
        <div class="row container">
          <div class="col-lg-4 order-lg-2 mb-4">
            <ul class="list-group">
            <?php
            $rows=$data['products'];
                  foreach($rows as $row){
                   echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
                   <span class="text-muted justify-content-between my-4">'.$row->pro_name.'</br>'.$row->total_price.' $</span>
                   <img class="d-block mb-2" src="'.$row->main_img.'" alt="" width="72" height="72">
                 </li>';
                  }?>
               <li class="list-group-item d-flex justify-content-between bg-light">
                <span style="color:#29242D"><?php
                $sum = 0;
                 $rows=$data['products'];
                 foreach($rows as $row){

                     $sum+= $row->total_price;

                   } echo $sum ?> $</span>
                <div style="color:#29242D">
                  <h6 class="my-0"></h6>Total
                </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-8 order-lg-1">
            <div class="accordion" id="accordionExample">
              <div class="card ">
               <div class="card-header" style="background-color:whitesmoke">
                <div class="custom-control custom-radio">
                    <input  type="radio" id="ad1" name="RP-ADD" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="ad1"><h5>charge into New Address</h5>
                    </label>
                </div>
               </div>

                  <div class="py-2 " id="box1">
                    <form class="needs-validation" novalidate method="POST">
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 mx-auto">
                          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="user_name" value=""required>
                            
                        </div>
                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                          <select class="custom-select d-block w-100" id="country" name="country" required>
                            <option value="0">country</option>
                            <option value="United">United States</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="custom-select d-block w-100" id="city"  name="city"required>
                            <option value="">city</option>
                            <option value="California">California</option>
                          </select>
                        </div>

                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="street" id="street" placeholder="street" value="" required>
                        </div>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control " name="zip_id"  id="zip_id" placeholder="zip id" required>
                        </div>
                      </div>
                  </div>
    
      <div class="card ">
                <div class="card-header" style="background-color:whitesmoke;">
                  <div class="custom-control custom-radio">
                    <input  type="radio" id="ad2" name="RP-ADD" class="custom-control-input" required>
                    <label class="custom-control-label" for="ad2"><h5>charge into a previous address</h5>
                    </label>
                  </div>
                </div>
           <div class="card-body" id="box2">
            <div class="row d-flex justify-content-center ">
              <div class="custom-control mx-auto  text-center">
                            <?php 
                  $rows=$data['address'];
                  foreach($rows as $row){
                    echo '<div class="row"> 
                    <div class="col-1"><input  class="form-check-input" type="radio" id="'.$row->address_id.'" name="paymentMethod" value="'.$row->address_id.'" /></div>';
                    echo ' <div class="col-1"> <label class="form-check-label" for="radio">';

                    echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id." </label></div></div>";
                  }
                  ?>  
              </div>
            </div>
           </div>
      </div>
</div>
<div></div>
     
     </div>
     </div>
</div>
<button type="button" name="next" id="next1" class=" next action-button bt" value="Next" >Next</button>
          </fieldset>
      <fieldset>
        <div class="row container">
          <div class="col-md-4 order-md-2 mb-4">
            <ul class="list-group">
              <?php
            $rows=$data['products'];
                  foreach($rows as $row){
                   echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
                   <span class="text-muted justify-content-between my-4">'.$row->pro_name.'</br>'.$row->total_price.' $</span>
                   <img class="d-block mb-2" src="'.$row->main_img.'" alt="" width="72" height="72">
                 </li>';
                  }?>
               <li class="list-group-item d-flex justify-content-between bg-light">
                <span style="color:#29242D"><?php
                $sum = 0;
                 $rows=$data['products'];
                 foreach($rows as $row){

                     $sum+= $row->total_price;

                   } echo $sum ?> $</span>
                <div  style="color:#29242D">
                  <h6 class="my-0"></h6>Total
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8 mx-auto order-md-1 align-items-center  py-3 justify-content-md-center">

<!-- 
            <div class="card ">
              <div class="card-header" >
                select the charge campany            
              </div>
              <div class="card-body">
                <div class="row d-flex justify-content-center ">
                  <div class="col-md-4 mb-3 ">
                    <div class="custom-control custom-radio">
                      <input id="com1" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="com1"><img class="d-block mb-2"
                          src="" alt="" width="40" height="40">
                      </label>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div> -->


            <div class="accordion" id="accordionExample">
              <div class="card ">
               <div class="card-header" style="background-color:whitesmoke">
                <div class="custom-control custom-radio">
                    <input  type="radio" id="add1" name="RP-ADDD" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="add1"><h5>Add New Payment Account</h5>
                    </label>
                </div>
               </div>

                  <div class="py-2 " id="boxx1">
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 mx-auto">
                          <input type="text" class="form-control" id="full_name" name="full_name" placeholder="full Name" value=""required>
                            
                        </div>
                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                        <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="Bank Account" value=""required>
                         </div>
                        <div class="col-md-6 ">
                        <input type="date" class="form-control" id="Exp_date" name="Exp_date" placeholder="Exp date" value=""required>
                           </div>

                      </div>
                  </div>
    
                <div class="card ">
                <div class="card-header" style="background-color:whitesmoke;">
                  <div class="custom-control custom-radio">
                    <input  type="radio" id="add2" name="RP-ADDD" class="custom-control-input" required>
                    <label class="custom-control-label" for="add2"><h5>Use a previous Payment account</h5>
                    </label>
                  </div>
                </div>
           <div class="card-body" id="boxx2">
            <div class="row d-flex justify-content-center ">
              <div class="custom-control mx-auto text-center">
                            <?php 
                  $rows=$data['paymentAccounts'];
                  foreach($rows as $row){
                   echo '<div class="row"> 
                   <div class="col-1"><input  class="form-check-input" type="radio" id="'.$row->payment_id.'" full_name="'.$row->full_name.'" exp_date="'.$row->ex_date.'" name="paymentAccounts" value="'.$row->userbank_id.'"></div>';
                   echo ' <div> <label class="form-check-label" for="radio">';
                   echo $row->full_name ,",&nbsp;". $row->ex_date."</label></div></div> ";
                  }
                  ?>  
              </div>
            </div>
           </div>
    
</div>
<div></div>
     
     </div>
     </div>


              </div>
              </div>  
         <input type="button" name="previous" class="bt1  previous action-button" value="Previous" /> 
        <input type="button" name="next" id="next2" class="next action-button" value="Next" />
      </fieldset>
      <fieldset>
        <h3 style="color:#F37C21; font-weight:bold; opacity:70%;">Products</h3>
        <div class="table-responsive ">
                  <table class="table table-hover">
                    <thead>
                        <tr>
                          
                        <th  scope="col">Product Image</th>
                            <th  scope="col">Product Name</th>
                            <th  scope="col">Quntity </th>
                            <th  scope="col" class="text-center">Price</th>
                            <th  scope="col" class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                     <?php 
                     $pro=$data['products'];
                     foreach($pro as $product){
                     ?>
                        <tr>
                           <td style="vertical-align:center;">
                            <img class=" mb-2" src="<?php echo $product->main_img; ?>" alt="" width="72" height="72">
                            </td>
                            <td style="vertical-align:center;">
                            <?php echo $product->pro_name; ?>
                            </td>
                           
                            <td  style="text-align: center; vertical-align:center;" > <?php echo $product->quentity; ?> </td>
                            <td class=" text-center" style="vertical-align:center;"><?php echo $product->pro_price; ?> $</td>
                            <td class=" text-center" style="vertical-align:center;"><?php echo $product->total_price; ?> $</td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                                <strong>ToTal: </strong>
                            </td>
                            <td class="text-right">
                                <strong id="tblTotalPrice"> </strong>
                            </td>
                            
                        </tr>
                    </tbody>
                  </table>
                  </div>
               <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-6">
                 <div style="    padding: 10px;">
                    <div class="text-center" >
                    <h4 style="color:#F37C21; font-weight:bold; opacity:70%;">Address Information</h4>
                      </div>
                     
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
                          <th scope="row"  id="username3" ></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="country3"></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="city3" ></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" id="street3">Z</th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" id="zip_id3"></th>
                          <td></td>
                          </tr>
                      </tbody>
                      </table>

                        <!-- <strong>ElectronicEcommerce</strong> -->
                        <!-- <span class="ml-3" id="username3"></span>
                        <br>
                        <span title="Phone" id="country3"></span> 
                        <br>
                        <span title="Phone" id="city3" class="ml-5"> </span>
                         <br>
                          <span title="Phone" id="street3"></span> 
                          <br>
                        <span title="Phone" id="zip_id3" class="ml-5"> </span> -->
                     </div>
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6">
                 <div style=" 
                 padding: 10px;">
                    <div class="text-center">
                    <h4 style="color:#F37C21; font-weight:bold; opacity:70%;">Payment Information</h4>
                      </div> 
                        <!-- <strong>ElectronicEcommerce</strong> -->
                        <table class="table text-left text-light" >
<style>
    /* .table td, .table th {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    font-size:12px;
    color:rgb(71, 71, 71);

    } */
</style>
                      <tbody>
                          <tr>
                          <th scope="row"id="bankid3" >Name : <?php  echo $product->full_name ;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"  id="expDate3">Bank Account : <?php  echo $product->userbank_id ;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"   id="fullName">Exp Date : <?php  echo $product->ex_date ;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row"   id="total_price">Exp Date : <?php  echo $product->ex_date ;?></th>
                         
                          </tr>

                      </tbody>
                      </table>
                        <!-- <span class="ml-3" id="bankid3"></span>
                        <br>
                        <span title="Phone" id="expDate3" ></span>
                        <br>
                        <span title="Phone" id="fullName" class="ml-5"></span>
                         <br>
                          <span title="Phone" id="total_price" ></span>
                      -->
                    </div>
                 </div>
               </div>
                  
                 
   
            <input type="button" name="previous" class="previous action-button" value="Cancel" /> 
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
      </fieldset>



      <!--show oreder-->
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {
      console.log("before next ");

      if ($("#ad1").is(":checked")) {
       $("#box1").show();
       $("#box2").hide();
     }
      if($("#ad2").is(":checked")) {
       $("#box2").show();
       $("#box1").hide();
     }
     if ($("#add1").is(":checked")) {
       $("#boxx1").show();
       $("#boxx2").hide();
     }
      if($("#add2").is(":checked")) {
       $("#boxx2").show();
       $("#boxx1").hide();
     }
     function nextfun() {
       
      }
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches
      var orderData;
      console.log("before next ");

      $(".next").click(function (e) {
        var nextid=$(this).attr('id');
        var nextmsg='stop';
        console.log("if next ");

        if(nextid==='next1'){
          console.log("if first ");

           nextmsg='stop';
          if ($("#ad1").is(":checked")) {
            var zip_id=$('#zip_id').val();
              var user_name=$('#user_name').val();
              var country=$('#country').val();
              var city=$('#city').val();
              var street=$('#street').val();      //fetch form data
              if(user_name!=''&& country!=''&& city!=''&& street!=''&& zip_id!=''){
              $.ajax({
                async: false,
                type: "POST",
                global: false,
                  url: "/ElectronicEcommerce/payment/addAdress",
                  data: {zip_id:zip_id,user_name:user_name,country:country,city:city,street:street},
              })
            
              .done(function (response) {
                if(response[0]=='noorder'){
                  //todo Message or ROute
                 // alert('hhhaa')
                 console.log("nooorder ghj");
                 window.location.replace('http://localhost/ElectronicEcommerce/cart');

           
                }
                // }
                // if(response[0]=='done'){
                //   //todo Message or ROute
                //   nextmsg='go';
                // }
                else{
                 
                  nextmsg='go';
                }


              })
              .fail(function () {
                //todo Message or ROute
                //console.log('rr')
                swal({
                     text: 'something went wrong ..!',
                     });
                  nextmsg='stop';
              }) 
              }
              else{ swal({
     text: 'please, fill the fields!',
       });
           } 
           }
          if($("#ad2").is(":checked")) {
            var address_id=$("input[name='paymentMethod']:checked").attr('id');
            console.log(address_id);
            if(address_id){
              console.log(address_id);
            $.ajax({
             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/payment/updateOrderAddress",
             data: {address_id:address_id},
             success: function(response) {
              if(response[0]=='noorder'){
                  //todo Message or ROute
               // alert('hhhaa')
                  window.location.replace('http://localhost/ElectronicEcommerce/cart');

                }else{
                 
                  nextmsg='go';
                }
             
             }
           })
          }
          else{ swal({
          text: 'please, choose one address!',
          });
           }
          }
        }
       if(nextid==='next2'){
           nextmsg='stop';
           var totalprice=<?php
            $rows=$data['products']; $sum = 0;
            foreach ($rows as $item) {
                $sum += $item->total_price;
            }echo $sum; ?>;
          if ($("#add1").is(":checked")) {
              var full_name=$('#full_name').val();
              var bank_account=$('#bank_account').val();
              var Exp_date=$('#Exp_date').val();
              //var formValues= $('form').serialize();
              //console.log(formValues);
              //var formData= $(this).closest('form').serialize();        //fetch form data
              if(full_name!=''&& bank_account!=''&& Exp_date!=''){
              $.ajax({
                crossDomain: true,
              // headers: {  'Access-Control-Allow-Origin': 'http://192.168.1.101' },
               type: "GET",
                global: true,
                async: false,
                dataType: 'json',
               url: "http://localhost:5320/api/getcurrentaccount?userName="+full_name+"&BankNo="+bank_account+"&expDate="+Exp_date+"&totalPrice="+totalprice,
              
              })
              .done(function (response) {
                 if(response.available==false){
                   //todo Error MEssage
                   //alert('hhhaa')
                   if(response.errorMessage==1){
                     //no money
                   // alert('hhhaa')
                   swal({
                    text: 'there is no money in your account..!',
                     
                     });
                   }
                   if(response.errorMessage==2){
                     //no account
                    //alert('hhhaa')
                    swal({
                      text: 'there is no account..!',
                     });
                   }
                   if(response.errorMessage==3){
                     //no enough money
                    //alert('hhhaa')
                    swal({
                      text: 'there is no enough money in your account..!',
                     
                     });
                   }
                 }
                 if(response.available==true){
                 //todo the money compare and the message for error 
                 $.ajax({
                async: false,
                type: "POST",
                global: false,
                  url: "/ElectronicEcommerce/payment/addPayment",
                  data: {full_name:full_name,bank_account:bank_account,Exp_date:Exp_date},
              })
              .done(function (response) {
                if(response[0]=='noorder'){
                  //todo Message or ROute
                //alert('hhhaa')
                swal({
                     text: 'there is no order..!',
                     });
                }
                else{
                  orderData =JSON.parse(response);
                console.log(orderData,orderData[0].user_name)
                      $('#username3').text('Name: '+orderData[0].user_name);
               $('#country3').text('country:'+orderData[0].country);
                  $('#city3').text('city:'+orderData[0].city);
                $('#street3').text('street:'+orderData[0].street);
                $('#zip_id3').text('zip id:'+orderData[0].zip_id);
                $('#bankid3').text('Bank Card Id: '+orderData[0].userbank_id);
               $('#expDate3').text('Expiry Date: '+orderData[0].ex_date);
              $('#fullName').text('Full Name: '+orderData[0].full_name);
            $('#total_price').text('Total Price: '+orderData[0].total_price);
          $('#tblTotalPrice').text(orderData[0].total_price);
                 nextmsg='go';
                }
              })
              .fail(function () {
                //todo message
                swal({
                     text: 'something went wrong ..!',
                     });
                  nextmsg='stop';
                  })  
                
                 }
              })
              .fail(function () {
                //todo error message

                swal({
                     text: 'no connection to the bank somethings went wrong!',
                     });
              })  
              }
              else{ swal({
     text: 'please, fill these fields!',
       });
           }
           }
          if($("#add2").is(":checked")) {
            var payment_id =$("input[name='paymentAccounts']:checked").attr('id');
            var bank_account=$("input[name='paymentAccounts']:checked").attr('value');
            var full_name=$("input[name='paymentAccounts']:checked").attr('full_name');
            var Exp_date=$("input[name='paymentAccounts']:checked").attr('exp_date');
            if(payment_id!=''&& bank_account!=''&& full_name!=''&& Exp_date!=''){
            $.ajax({
              crossDomain: true,
              async: false,
               type: "GET",
                global: true,
                dataType: 'json',
              url: "http://localhost:5320/api/getcurrentaccount?userName="+full_name+"&BankNo="+bank_account+"&expDate="+Exp_date+"&totalPrice="+totalprice,
                  // success: function(result) {
                  // //  alert(data) 
                  // }
            })
            .done(function (response) {
              console.log(response)
                 if(response.available==false){
                   //todo error message
                   //alert('hhhaa')
                   swal({
                     text: 'something went wrong..!',
                     });
                 }
                 if(response.available==true){
                  $.ajax({
                    async: false,
                    type: "Post",
                    global: false,
                    datType:'json',
                    url: "/ElectronicEcommerce/payment/updateOrderBAccount",
                    data: {payment_id:payment_id},
                  
                  }).done(function (response) {
                    if(response[0]=='noorder'){
                      //todo Message or ROute
                     // alert('hhhaa')
                     swal({
                     text: 'there is no order..!',
                     });
                      }else{
                          orderData =JSON.parse(response);
                         console.log(orderData,orderData[0].user_name)
                         $('#username3').text('Name: '+orderData[0].user_name);
                         $('#country3').text('country:'+orderData[0].country);
                            $('#city3').text('city:'+orderData[0].city);
                          $('#street3').text('street:'+orderData[0].street);
                          $('#zip_id3').text('zip id:'+orderData[0].zip_id);
                          $('#bankid3').text('Bank Card Id: '+orderData[0].userbank_id);
                         $('#expDate3').text('Expiry Date: '+orderData[0].ex_date);
                        $('#fullName').text('Full Name: '+orderData[0].full_name);
                        $('#total_price').text('Total Price: '+orderData[0].total_price);
                          $('#tblTotalPrice').text(orderData[0].total_price);
                        nextmsg ='go';
                       }
                  })
                  .fail(function () {
                //todo error message

                swal({
                     text: 'Check your internet conntection!',
                     });
              })  
                 }
             
           })
         }
         else{ swal({
     text: 'these can not be empty..plese, fill them!',
       });
           }
        }
  
       }
       console.log(nextmsg)
       if(nextmsg ==='go'){
        if (animating) return false;
          animating = true;
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({ opacity: 0 }, {
            step: function (now, mx) {
              //as the opacity of current_fs reduces to 0 - stored in "now"
              //1. scale current_fs down to 80%
              scale = 1 - (1 - now) * 0.2;
              //2. bring next_fs from the right(50%)
              left = (now * 50) + "%";
              //3. increase opacity of next_fs to 1 as it moves in
              opacity = 1 - now;
              current_fs.css({ 'transform': 'scale(' + scale + ')' });
              next_fs.css({ 'left': left, 'opacity': opacity });
            },
            duration: 800,
            complete: function () {
              current_fs.hide();
              animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
         });
       }
        
      });
     
      $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
          step: function (now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1 - now) * 50) + "%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({ 'left': left });
            previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
          },
          duration: 800,
          complete: function () {
            current_fs.hide();
            animating = false;
          },
          //this comes from the custom easing plugin
          easing: 'easeInOutBack'
        });
      });

      $(".submit").click(function () {
        var full_name =orderData[0].full_name;
        var userBank =orderData[0].userbank_id;
        var totalprice =orderData[0].total_price;
        var exp_date =orderData[0].ex_date;
        var recievedAccount =<?php echo $adminAccount[0]->userbank_id;?>;
        swal({
  icon: "success",
  text: 'Its done successfully..',
});
        $.ajax({
                crossDomain: true,
              // headers: {  'Access-Control-Allow-Origin': 'http://192.168.1.101' },
               type: "GET",
               global: true,
               async: false,
               dataType: 'json',
               url: "http://localhost:5320/api/getcurrentaccount?userName="+full_name+"&BankNo="+userBank+"&expDate="+exp_date+"&totalPrice="+totalprice,
              
              })
              .done(function (response) {
                 if(response.available==false){
                   //to do error message
                   if(response.errorMessage==1){
                     //no money
                   // alert('hhhaa')
                   swal({
                    text: 'there is no money in your account..!',
                     
                     });
                   }
                   if(response.errorMessage==2){
                     //no account
                    //alert('hhhaa')
                    swal({
                      text: 'there is no account like this..!',
                     });
                   }
                   if(response.errorMessage==3){
                     //no enough money
                    //alert('hhhaa')
                    swal({
                      text: 'there is no enough money in your account..!',
                     
                     });
                   }
                 }
                 if(response.available==true){
                 
                 $.ajax({
                  type: "POST",
                global: true,
                async: false,
                dataType: 'json',
               url: "http://localhost:5320/api/InsertNewTransaction",
                  data: {recievedAccount:recievedAccount,paiedAccount:userBank,createdAt:Date.now(),transReason:'buying from log store',money:totalprice},
              })
              .done(function (response) {
                if(response.insertId){
                  $.ajax({
                  type: "POST",
                  global: true,
                  async: false,
                  dataType: 'json',
                  url: "/ElectronicEcommerce/payment/updateStatus",
                  data: {status:'2'},
                 })
                 .done(function (response) {
                   if(response[0]=='done'){
                     //todo go to feedback page
                     //alert('success')
                    // window.location.replace('http://localhost/ElectronicEcommerce/feedback');
                    nextmsg='go';
                   }else{
                     //error message
                     swal({
                     text: 'sorry, field ..!',
                     });
                   }
                 })
                 .fail(function () {
                   console.log('dss');
                   //todo error message
                   swal({
                     text: 'something went wrong ..!',
                     });
                     nextmsg='stop';
                 }) 
               }
                

              })
              .fail(function () {
                //NOTDONE FROM BANK 
                //todo error messages
                swal({
                     text: 'something went wrong ..please check your internet..!',
                     });
                console.log('dss');
                  nextmsg='stop';
              })  
                
                 }
              })
              .fail(function () {
                //todo error messages
                swal({
                     text: 'there is an error with your internet connection.!',
                     });
              })  
             
        return false;
 
      
    
    })
  })
   
     
      
     
  //});
  </script>
    <script>
 $(function() {
  $("input[name='RP-ADDD']").click(function() {
  if ($("#add1").is(":checked")) {
       $("#boxx1").show();
       $("#boxx2").hide();
     }
      if($("#add2").is(":checked")) {
       $("#boxx2").show();
       $("#boxx1").hide();
     }
    });
   $("input[name='RP-ADD']").click(function() {
     if ($("#ad1").is(":checked")) {
       $("#box1").show();
       $("#box2").hide();
     }
      if($("#ad2").is(":checked")) {
       $("#box2").show();
       $("#box1").hide();
     }
   });
 });
</script>