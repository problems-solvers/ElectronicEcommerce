
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
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 order-md-2 mb-4">
            <ul class="list-group ">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4 " >Product name</h6>
                <img class="d-block mb-2 img-resp" src="" alt="" width="72" height="72">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2 img-resp" src="" alt="" width="72px" height="72px">
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <span class="text-muted justify-content-between my-4">$12</span>
                <h6 class="my-4">Product name</h6>
                <img class="d-block mb-2 img-resp" src="" alt="" width="72" height="72">
              </li>
             
              <li class="list-group-item d-flex justify-content-between bg-light">
                <span class="text-success">$50</span>
                <div class="text-success">
                  <h6 class="my-0">Total</h6>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 order-md-1">
            <div class="accordion" id="accordionExample">
              <div class="card ">
                <div class="card-header" style="background-color:whitesmoke">
                <div class="custom-control custom-radio">
            <input  type="radio" id="ad1" name="RP-ADD" class="custom-control-input" required>
            <label class="custom-control-label" for="ad1"><h5>charge into a new address</h5>
            </label>
          </div>
                </div>

                  <div class="py-2 " id="box1">
                    <form class="needs-validation" novalidate method="POST">
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12 mx-auto">
                          <input type="text" class="form-control" id="user_name" placeholder="user_name" value=""
                            required>
                            
                        </div>
                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                          <select class="custom-select d-block w-100" id="country" required>
                            <option value="">country</option>
                            <option>United States</option>
                          </select>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                          <select class="custom-select d-block w-100" id="city" required>
                            <option value="">city</option>
                            <option>California</option>
                          </select>
                        </div>

                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                          <input type="text" class="form-control" id="street" placeholder="street" value="" required>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                          <input type="text" class="form-control " id="zip_id" placeholder="zip id" required>
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
           
              <div class="custom-control custom-radio mx-auto col-xl-8 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                <input id="paypal1" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="paypal1"><?php 
            $rows=$data['address'];
            foreach($rows as $row){
              echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id;
            }
            ?>
                </label>
             
            </div>
            
              <div class="custom-control custom-radio mx-auto col-xl-8 col-lg-4 col-md-6 col-sm-12 col-12 text-center ">
                <input id="ourbank" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="ourbank"><?php 
            $rows=$data['address'];
            foreach($rows as $row){
              echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id;
            }
            ?>
                </label>
              </div>
          

              <div class="custom-control custom-radio mx-auto col-xl-8 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                <input id="kurimi" name="paymentMethod" type="radio" class="custom-control-input" required>
                              <label class="custom-control-label" for="kurimi"><?php 
              $rows=$data['address'];
              foreach($rows as $row){
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
<button class="save" type="submit">save</button>
<input type="button" name="next" class="next action-button " value="Next" />
      </fieldset>
      <fieldset>
        <div class="row container">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 order-md-2 mb-4">
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
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mx-auto order-md-1 align-items-center  py-3 justify-content-md-center">
            <div class="card ">
              <div class="card-header" >
                select the charge campany            </div>
              <div class="card-body">
                <div class="row d-flex justify-content-center ">
                  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                    <div class="custom-control custom-radio">
                      <input id="com1" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="com1"><img class="d-block mb-2"
                          src="" alt="" width="40" height="40">
                      </label>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                    <div class="custom-control custom-radio">
                      <input id="com2" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="com2"><img class="d-block mb-2"
                          src="" alt="" width="40" height="40">
                      </label>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12 mb-3  d-flex justify-content-center">
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
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mx-auto order-md-1 align-items-center align-self-center py-3 justify-content-md-center">
              <div class="card ">
                <div class="card-header ">
                  select the charge campany              </div>
                <div class="card-body">
                  <div class="row d-flex justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                      <div class="custom-control custom-radio">
                        <input id="payment1" name="payment1" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="payment1"><img class="d-block mb-2"
                            src="" alt="" width="40" height="40">
                        </label>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
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
            <input type="submit" name="submit" class="submit action-button" value="Submit"/>

      </fieldset>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    function snakbarFunction() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
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

