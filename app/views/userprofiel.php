<?php
 $ros=$data['userprofiel'];
 //print_r($ros);
 foreach ($ros as $row){

 
 ?>
<br>
<div class="block d-flex  align-items-center col-12 col-md-12 col-sm-12 col-xs-12 m-auto">
  <div class="col-6 col-md-6 col-sm-12 col-xs-12 mx-auto ">
<div class="card  mx-auto p-3" >
<div class="imguser   mx-auto p-2 "  >
   
  <img src="/ElectronicEcommerce/app/assets/images/img_avatar2.png " class="img-circle" styel=" border-radius:40px" alt="Cinque Terre" width="140" height="120" > 
</div>
        
<form action="signup" method="post" id="form1" onchange="validation();">
<div class="col-12 col-sm-12 col-xs-12 mx-auto my-5 text-center">
  <div class="inlining-form mx-auto col-4 col-md-4 col-sm-8 col-xs-8  "> 
<input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $row->first_name;?>" readOnly/>
<small id="helpId1" class="text-muted"></small>
</div>
<div class="inlining-form mx-auto col-4 col-sm-12 col-xs-12 col-md-4 col-sm-8 col-xs-8  "> 
<input type="text" class="form-control mx-auto " name="last_name" id="last_name" value="<?php echo $row->last_name;?>" readOnly/>
<small id="helpId2" class="text-muted"></small>
</div>
</div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="text" class="form-control" placeholder="Enter Username"  id="user_name" value="<?php echo $row->user_name;?>" readOnly/>
    <small id="helpId3" class="text-muted"></small>
  </div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="email" class="form-control" placeholder="Enter email"  id="user_email" value="<?php echo $row->user_email;?>" readOnly/>
    <small id="helpId4" class="text-muted"></small>
    <!--<input type="hidden" class="form-control" placeholder="Enter role"  id="user_role" name="user_role" value="3"> -->

  </div>
  <div class="form-group  col-8 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Enter Password" id="user_password" value="<?php echo $row->user_password;?>" readOnly/>
    <small id="helpId5" class="text-muted"></small>
  </div>
  <div class="form-group  col-8 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Confirm Password" id="user_password" value="<?php echo $row->confirm_password;?>" readOnly/>
    <small id="helpId6" class="text-muted"></small>
  </div>
 
  
  

</div>
</form>
</div>
</div>

<br>
<?php
 }
?>