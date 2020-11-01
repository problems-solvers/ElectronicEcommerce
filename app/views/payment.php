<div class="container mar">
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
          <div class="col-md-4 order-md-2 mb-4">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
             
              <li class="list-group-item d-flex justify-content-between bg-light">
                <span class="text-success">$50</span>
                <div class="text-success">
                  <h6 class="my-0">Total</h6>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-md-8 order-md-1">
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
                          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="user_name" value="name"required>
                            
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
                        <button class="save" type="submit">save</button>

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
              <div class="custom-control mx-auto col-8 text-center">
                            <?php 
                  $rows=$data['address'];
                  foreach($rows as $row){
                    echo '<input  class="form-check-label" type="radio" id="'.$row->address_id.'" name="paymentMethod" value="'.$row->address_id.'" value="">';
                    echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id." ";
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
<button type="button" name="next" id="next1" class="next action-button" value="Next" >Next</button>
          </fieldset>
      <fieldset>
        <div class="row container">
          <div class="col-md-4 order-md-2 mb-4">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <span class="text-success">$50</span>
                <div class="text-success">
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
                    <label class="custom-control-label" for="add1"><h5>Add  New Payment Account</h5>
                    </label>
                </div>
               </div>

                  <div class="py-2 " id="boxx1">
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 mx-auto">
                          <input type="text" class="form-control" id="full_name" name="full_name" placeholder="full name" value="Dunia Muhammed"required>
                            
                        </div>
                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                        <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="full name" value="12121212"required>
                         </div>
                        <div class="col-md-6 ">
                        <input type="text" class="form-control" id="Exp_date" name="Exp_date" placeholder="full name" value="021-05-31T21:00:00.000Z"required>
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
              <div class="custom-control mx-auto col-8 text-center">
                            <?php 
                  $rows=$data['paymentAccounts'];
                  foreach($rows as $row){
                   echo '<input  class="form-check-label" type="radio" id="'.$row->bank_detail_id.'" name="paymentAccounts" value="'.$row->bank_detail_id.'">';
                   echo $row->full_name ,",&nbsp;". $row->Exp_date." ";
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
        <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
        <input type="button" name="next" id="next2" class="next action-button" value="Next" />
      </fieldset>
      <fieldset>
        
            <!-- <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
      </fieldset>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    $(document).ready(function() {
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

      $(".next").click(function (e) {
        var nextid=$(this).attr('id');
        var nextmsg='stop';
        if(nextid==='next1'){
           nextmsg='stop';
          if ($("#ad1").is(":checked")) {
            var zip_id=$('#zip_id').val();
              var user_name=$('#user_name').val();
              var country=$('#country').val();
              var city=$('#city').val();
              var street=$('#street').val();      //fetch form data
              $.ajax({
                async: false,
             type: "POST",
             global: false,
             dataType: 'html',
                  url: "/ElectronicEcommerce/payment/addAdress",
                  data: {zip_id:zip_id,user_name:user_name,country:country,city:city,street:street},
                  // success: function(result) {
                  // //  alert(data) 
                  // }
              })
              .done(function (response) {
              console.log('hhaha');
                 nextmsg='go';

              })
              .fail(function () {
                console.log('dss');
                  nextmsg='stop';
              })  
           }
          if($("#ad2").is(":checked")) {
            var address_id=$("input[name='paymentMethod']:checked").attr('id');
            console.log(address_id)
            $.ajax({
             async: false,
             type: "POST",
             global: false,
             dataType: 'html',
             url: "/ElectronicEcommerce/payment/updateOrderAddress",
             data: {address_id:address_id},
            success: function(result,textStatus) {
              nextmsg ='go';
            }
           })
            
         }
       }
       if(nextid==='next2'){
           nextmsg='stop';
          if ($("#add1").is(":checked")) {
              var full_name=$('#full_name').val();
              var bank_account=$('#bank_account').val();
              var Exp_date=$('#Exp_date').val();
              //var formValues= $('form').serialize();
              //console.log(formValues);
              //var formData= $(this).closest('form').serialize();        //fetch form data
              
              $.ajax({
                crossDomain: true,
           headers: {  'Access-Control-Allow-Origin': 'http://192.168.1.101' },
             type: "GET",
             global: true,
             url: "http://192.168.1.101/api/getcurrentaccount?userName="+full_name+"&BankNo="+bank_account+"&expDate="+Exp_date+"",
               
                
                  // success: function(result) {
                  // //  alert(data) 
                  // }
              })
              .done(function (response) {
              console.log(response);
              //todo the money compare and the message for error 
                $.ajax({
                async: false,
             type: "POST",
             global: false,
             dataType: 'html',
             url: "/ElectronicEcommerce/payment/addAdress",
                  data: {full_name:full_name,bank_account:bank_account,Exp_date:Exp_date},
                  // success: function(result) {
                  // //  alert(data) 
                  // }
              })
              .done(function (response) {
              console.log('hhaha');
                 nextmsg='go';

              })
              .fail(function () {
                console.log('dss');
                  nextmsg='stop';
              })  

              })
              .fail(function () {
                alert('no account like this one')
              })  
           }
          if($("#add2").is(":checked")) {
            var payment_id=$("input[name='paymentAccounts']:checked").attr('id');
            $.ajax({
                crossDomain: true,
           headers: {  'Access-Control-Allow-Origin': 'http://192.168.1.101' },
             type: "GET",
             global: true,
             url: "http://192.168.1.101/api/getcurrentaccount?userName="+full_name+"&BankNo="+bank_account+"&expDate="+Exp_date+"",
               
                
                  // success: function(result) {
                  // //  alert(data) 
                  // }
              })
              .done(function (response) {
            $.ajax({
             async: false,
             type: "Post",
             global: false,
             url: "/ElectronicEcommerce/payment/updateOrderBAccount",
             data: {payment_id:payment_id},
            success: function(result,textStatus) {
              nextmsg ='go';
              alert(nextmsg) 
            }
           })
              )}
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
        return false;
      })

  
  })
   
    // $(".next").click(function(e) {
    
     // var formData = new FormData();

/*formData.append("user_name",user_name);
formData.append("country",country);
formData.append("city",city);
formData.append("street",street);
formData.append("zip_id",zip_id);
    console.log(formData);
      e.preventDefault();*/ 
     
      
     
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