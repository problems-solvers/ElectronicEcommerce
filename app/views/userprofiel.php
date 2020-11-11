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
   
  <img src="/ElectronicEcommerce/app/assets/images/img_avatar.png"  class="img-circle" styel=" border-radius:50%" alt="Cinque Terre" width="140" height="120" > 
</div>
        
<form action="signup" method="post" id="form1" class="text-center">
<div class="col-12 col-sm-12 col-xs-12 mx-auto my-5 text-center">
  <div class="inlining-form mx-auto col-4 col-md-4 col-sm-8 col-xs-8  "> 
<label>First Name :<?php echo $row->first_name;?></lable>
<small id="helpId1" class="text-muted"></small>
</div>
</div>
<div class="col-12 col-sm-12 col-xs-12 mx-auto my-5 text-center">

<div class="inlining-form mx-auto col-4 col-sm-12 col-xs-12 col-md-4 col-sm-8 col-xs-8  "> 
<label>last Name :<?php echo $row->last_name;?></lable>
<small id="helpId2" class="text-muted"></small>
</div>
</div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <label >User Name :<?php echo $row->user_name;?></lable>
    <small id="helpId3" class="text-muted"></small>
  </div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <label>Email:<?php echo $row->user_email;?></lable>
    <small id="helpId4" class="text-muted"></small>
    <!--<input type="hidden" class="form-control" placeholder="Enter role"  id="user_role" name="user_role" value="3"> -->

  </div>
 
  
  

</div>
</form>
</div>
</div>

<br>
<?php
 }
?>