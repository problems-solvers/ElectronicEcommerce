   

     
      <div class="nam mx-auto  my-2 py-2 col-md-4 col-sm-12 col-xs-12 text-center text-light" style="background-color:#ee802f; border
      :3px white solid;">
 
      <h4 class="center  col-lg-12 col-8-md col-sm-12 col-xs-12 mx-auto my-1  text-center">you can register by data input</h4>
  </div>
  <div class="rowl col-lg-8 col-6 col-6-md col-sm-12 col-xs-12 mx-auto my-2 py-2    ">
        <div class="col-6-md col-sm-12 col-xs-12 order-md-1   mx-auto my-2 py-2  text-center">
          <h4 class="mb-3">sing in</h4>
          <br>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6  col-sm-12 col-xs-12 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">your number</label>
              <div class="input-group">
                <div class="input-group-prepend">

                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


            <div class="mb-3">
              <label for="address2"> message <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="sharing or complaint">
            </div>

            <div class="row">
              <div class="col-md-6  col-sm-12 col-xs-12 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>yemen</option>
                  <option>Eigept</option>
                  <option>saudi Arabia</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-6  col-sm-12 col-xs-12 mb-3">
                <label for="state">city</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>sanaa</option>
                  <option>Ibb</option>
                  <option>Taiz</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
             


              </div>

            </div>
            <div class="input-group col-lg-6 col-md-4  col-sm-12 col-xs-12 mx-auto my-2 py-2  text-center">

<div class="input-group-append   mx-auto my-2 py-2  text-center  ">
<p> <button class="bt"    href="#" role="button" onclick="myFunction()"> submit </button></a></p>

      <!-- The actual snackbar -->
      <div id="snackbar">Some text some message..</div>
</div>
</div>
        </div>
  
    <br>

    <script>

function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
 