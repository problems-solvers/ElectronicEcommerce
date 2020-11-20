
<div class="py-4" style="height:100%;background: rgb(120,76,18);
      background: linear-gradient(293deg, rgba(120,76,18,0.1) 0%, rgba(145,122,33,0.1) 82%, rgba(247,81,185,0.1) 100%);">


<div class="col-6 text-center mx-auto mt-3" >
<a class="navbar-brand" href="#"> <img
                        src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png" class="float-left "
                        style="width:300px; height:50px;"></a>
</div>
    <div id="msform" > 

   
    <div class="mx-auto" >
      <!-- fieldsets -->
      <fieldset class="col-md-8 order-md-1 mx-auto ">
        <h2 class="fs-title" style="color:#836691; font-weight:bold;">LogIn</h2>
        <div class="row container">


              <div class=" col-md-12 order-md-1 " style="margin-left:10px;"> 
<form action="signup" method="post" id="form1" onchange="validation();">
<div class="col-12 col-sm-12 col-xs-12 mx-auto my-5 text-center">
  <div class="inlining-form mx-auto col-4 col-md-4 col-sm-8 col-xs-8  "> 
<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" required/>
<small id="helpId1" class="text-muted"></small>
</div>
<div class="inlining-form mx-auto col-4 col-sm-12 col-xs-12 col-md-4 col-sm-8 col-xs-8  "> 
<input type="text" class="form-control mx-auto " name="last_name" id="last_name" placeholder="Last name" required/>
<small id="helpId2" class="text-muted"></small>
</div>
</div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="text" class="form-control" placeholder="Enter Username"  id="user_name" name="user_name" required>
    <small id="helpId3" class="text-muted"></small>
  </div>
  <div class="form-group col-8 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="email" class="form-control" placeholder="Enter email"  id="user_email" name="user_email" required>
    <small id="helpId4" class="text-muted"></small>
    <!--<input type="hidden" class="form-control" placeholder="Enter role"  id="user_role" name="user_role" value="3"> -->

  </div>
  <div class="form-group  col-8 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Enter Password" id="user_password" name="user_password" required>
    <small id="helpId5" class="text-muted"></small>
  </div>
  <div class="form-group  col-8 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Confirm Password" id="user_password" name="confirm_password" required>
    <small id="helpId6" class="text-muted"></small>
  </div>
 
  
  <div class="inlining-form  col-12 mx-auto  my-3 align-center text_center">
  <div class=" inlining col-2 "></div>
  <div class=" inlining col-4 mx-auto ">
  <button type="submit" class="bt mx-auto disabled" id="signup_btn"  onclick="myFunction()">signup</button>
  
      <!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div><!-- The actual snackbar -->
</div>
  <!-- 
  <div id="snackbar" class="hide">Some text some message..</div>-->

  <div class="inlining col-4 mx-auto">
  <button type="button" class="bt1 mx-auto"><a href="http://localhost/ElectronicEcommerce/user/login" >login</button></a>
</div>

</div>
</form></div>
    
    </div>
        </div>    
        </fieldset>
                </div>               
                </div>
             
    
    <div class=" d-flex  align-items-center m-auto"  >
      <div class="col-6 col-md-6 col-sm-10 col-xs-10 mx-auto ">
      
    <div class="mx-auto p-3" >
    
    </div>
    </div>
    </div>
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
<!--
<script>
function snackbarFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
-->



  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->
<!-- 
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username"  id="user_name" name="user_name" required>
    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Enter email"  id="email_id" name="email_id" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>

    <button type="submit">register</button> -->
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  <!-- </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"><a href="http://localhost/mvcphp/user/login">login</a></span>
  </div> -->



  <script>
var form1=document.getElementById("form1");
var sub=document.getElementById("sub");


var mass1=document.getElementById("helpId1");
var mass2=document.getElementById("helpId2");
var mass3=document.getElementById("helpId3");
var mass4=document.getElementById("helpId4");
var mass5=document.getElementById("helpId5");
var mass6=document.getElementById("helpId6");

var nameFormat= /^[A-Za-z ]+$/;
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

var signup_btn = document.querySelector("#signup_btn");
signup_btn.disabled = true;




function validation(){
if( nameFormat.test(form1[0].value) && nameFormat.test(form1[1].value) && nameFormat.test(form1[2].value) &&  mailformat.test(form1[3].value) && paswd.test(form1[4].value) && (form1[5].value=== form1[4].value))
{
	signup_btn.disabled = false;
	signup_btn.className = "btn enabled"
}
else{
	signup_btn.disabled = true;
}
}


form1[0].addEventListener("input",function confirmName() 
{ 
    
if(form1[0].value.match(nameFormat))
{  

    form1[0].style.borderColor="green";
return true;
}
else
{
  mass1.innerHTML = "*Enter field Name ";
  form1[0].style.borderColor="red";
return false;
}
});
form1[1].addEventListener("input",function confirmName() 
{ 
    
if(form1[1].value.match(nameFormat))
{  
    form1[1].style.borderColor="green";
return true;
}
else
{
  mass2.innerHTML = "*Enter field Name ";
   form1[1].style.borderColor="red";
return false;
}
});

form1[2].addEventListener("input",function confirmName() 
{ 
    
if(form1[2].value.match(nameFormat))
{
    form1[2].style.borderColor="green";
return true;
}
else
{
  mass3.innerHTML = "*Enter field Name ";
    form1[2].style.borderColor="red";
return false;
}
});


form1[3].addEventListener("input",function confirmEmail() 
{ 
if(form1[3].value.match(mailformat))
{
    form1[3].style.borderColor="green";
return true;
}
else
{
    mass4.innerHTML = "*Enter Field Email ";
    form1[3].style.borderColor="red";
return false;
}
});

form1[4].addEventListener("input",function CheckPassword() 
{ 
if(form1[4].value.match(paswd)) 
{ 
    form1[4].style.borderColor="green";

return true;
}
else
{ 
    mass5.innerHTML = "*  Password Should Contain a Number/Carcter/Special Carcter  ";
    form1[4].style.borderColor="red";

return false;
}
});

form1[5].addEventListener("input",function confirmPass() 
{ 
if(form1[5].value!=form1[4].value) 
{ 
    mass6.innerHTML = "* Not Match  The password ";
    form1[5].style.borderColor="red";
    return false;
}
else
{ 
    form1[5].style.borderColor="green";
    return true;
}
});




</script>
