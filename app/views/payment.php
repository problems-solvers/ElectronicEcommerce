
<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform">
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
                  <h4 class="">

                    charge into a new address
                  </h4>
                </div>

                  <div class="py-2">
                    <form class="needs-validation" novalidate>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 mx-auto">
                          <input type="text" class="form-control" id="user_name" placeholder="user_name" value=""
                            required>
                            
                        </div>
                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                          <select class="custom-select d-block w-100" id="country" required>
                            <option value="">country</option>
                            <option>United States</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="custom-select d-block w-100" id="city" required>
                            <option value="">city</option>
                            <option>California</option>
                          </select>
                        </div>

                      </div>
                      <div class="row align-items-center mx-3 py-3">
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" id="street" placeholder="street" value="" required>
                        </div>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control " id="zip_id" placeholder="zip id" required>
                        </div>
                        
                      </div>
                     
                  </div>
               
<?php
$id=$data['order_id'];
//echo $id;
?>
    
      <div class="card ">
        <div class="card-header" style="background-color:whitesmoke;">
          <h4 class="">
          charge into previos address
            
          </h4>
        </div>
        <div class="card-body">
          <div class="row d-flex justify-content-center ">
           
              <div class="custom-control custom-radio mx-auto col-8 text-center">
                <input id="paypal1" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="paypal1"><?php 
            $rows=$data['address'];
            foreach($rows as $row){
              echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id;
            }
            ?>
                </label>
             
            </div>
            
              <div class="custom-control custom-radio mx-auto col-8 text-center ">
                <input id="ourbank" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="ourbank"><?php 
            $rows=$data['address'];
            foreach($rows as $row){
              echo $row->user_name ,",&nbsp;". $row->country, ",&nbsp;".$row->city, ",&nbsp;".$row->street,",&nbsp;".$row->zip_id;
            }
            ?>
                </label>
              </div>
          

              <div class="custom-control custom-radio mx-auto col-8 text-center">
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
<input type="button" name="next" class="next action-button" value="Next" />
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

  

