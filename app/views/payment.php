
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

                <input type="radio" value="new" name="address">

                  <h4 class="">

                    charge into a new address
                  </h4>
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
               
<?php
//$id=$data['order_id'];
//echo $id;
?>
    
      <div class="card ">
        <div class="card-header" style="background-color:whitesmoke;">

          <input type="radio" value="old" name="address">
          <h4 class="">
          charge into previos address
            
          </h4>
        </div>
        <div class="card-body" id="box2">
          <div class="row d-flex justify-content-center ">
           
              <div class="custom-control custom-radio mx-auto col-8 text-center">
                            <?php 
            $rows=$data['address'];
            foreach($rows as $row){
              echo '<input  class="custom-control-label" type="radio" name="paymentMethod" value="'.$row->address_id.'" >';
              echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id;
            }
            ?>
                </label>
             
            </div>
            
             
          
                     </div>
                    </div>
</div></div>
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
            <div class="card ">
              <div class="card-header" >
                select the charge campany            </div>
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
                  <div class="col-md-4 mb-3">
                    <div class="custom-control custom-radio">
                      <input id="com2" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="com2"><img class="d-block mb-2"
                          src="" alt="" width="40" height="40">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3  d-flex justify-content-center">
                    <div class="custom-control custom-radio">
                      <input id="com3" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="com3"><img class="d-block mb-2"
                          src="" alt="" width="40" height="40">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 mx-auto order-md-1 align-items-center align-self-center py-3 justify-content-md-center">
              <div class="card ">
                <div class="card-header ">
                  select the charge campany              </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mb-3">
                      <div class="custom-control custom-radio">
                        <input id="payment1" name="payment1" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="payment1"><img class="d-block mb-2"
                            src="" alt="" width="40" height="40">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="custom-control custom-radio">
                        <input id="payment2" name="payment1" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="payment2"><img class="d-block mb-2"
                            src="" alt="" width="40" height="40">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>  
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
      </fieldset>
      <fieldset>
        
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
      </fieldset>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    
   
     $(".next").click(function(e) {
      var zip_id=document.getElementById('zip_id').value;
      var user_name=document.getElementById('user_name').value;
      var country=document.getElementById('country').value;
      var city=document.getElementById('city').value;
      var street=document.getElementById('street').value;
      var formValues= $('form').serialize();
     // var formData = new FormData();

/*formData.append("user_name",user_name);
formData.append("country",country);
formData.append("city",city);
formData.append("street",street);
formData.append("zip_id",zip_id);
    console.log(formData);
      e.preventDefault();*/ 
      console.log(formValues);

      var formData= $(this).closest('form').serialize();        //fetch form data
            $.ajax({
                type: "POST",
                url: "/ElectronicEcommerce/payment/addAdress",
                data: formData,
                success: function(result) {
                  alert(data) 
                }
            });
  });
  </script>
    <script>
 $(function() {
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
