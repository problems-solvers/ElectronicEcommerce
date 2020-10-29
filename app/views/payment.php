
<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="post">
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
                <h5 class="">
                   <input type="radio" name="RP-ADD" value="red" id="ad1"> 
                   <label>charge into a new address</label>
                 
                  </h5>
                </div>

                  <div class="py-2 " id="box1">
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
               

    
      <div class="card ">
        <div class="card-header" style="background-color:whitesmoke;">
        <h5 class="">
                   <input type="radio" name="RP-ADD" id="ad2"> 
                   <label>charge into a previous address</label>
                 
                  </h5>
        </div>
        <div class="card-body" id="box2">
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
    <script>
      $(function () {

        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
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

      });
    </script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function () {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

