<div class="block d-flex  align-items-center m-auto">
  <div class="col-6 col-md-6 col-sm-10 col-xs-10 mx-auto ">
<div class="card  mx-auto p-3" >
  <h4 class="text-center my-3">Login</h4>
<form action="run" method="post">
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="text" class="form-control" placeholder="Enter Username"  id="user_name" name="user_name" required>
  </div>
  <div class="form-group  col-8 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Enter Password" id="user_password" name="user_password" required>
  </div>
  <div class="inline-form form-check  col-8 mx-auto my-3">
    <label class="form-check-label px-3">
      <input class="form-check-input" type="checkbox">Remember me
    </label>
  <span class="float-right">Forgot <a href="http://localhost/mvcphp/user/forgotpassword">password?</a></span>
</div>
  <div class="inline-form  col-8 mx-auto align-center my-5">
  <button type="submit" class="btn btn-primary mx-auto rounded ">Submit</button>
  <a class="login-btn" href="googlelogin">Login</a>
  <a class="login-btn" href="twitter">ttt</a>
  <a href="http://localhost/mvcphp/user/forgotpassword" class="btn btn-outline mx-auto rounded">password?</a>
</div>
</form>
</div>
</div>
</div>