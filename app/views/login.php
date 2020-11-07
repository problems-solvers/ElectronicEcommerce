<?php
include("app/config/config.php");

$redirectTo="http://localhost/ElectronicEcommerce/user/facebooklogin";
$data=["email"];
$loginUrl = $helper->getLoginUrl($redirectTo, $data);

 //$user = $facebook->getUser();
//page?<?php $_SERVER['REQUEST_URL']

?>
<div class="col-6 text-center mx-auto mt-3">
<a class="navbar-brand" href="#"> <img
                        src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png" class="float-left "
                        style="width:300px; height:50px;"></a>
</div>
<div class="block d-flex  align-items-center m-auto">
  <div class="col-6 col-md-6 col-sm-10 col-xs-10 mx-auto ">
<div class="card  mx-auto p-3" >
  <h4 class="text-center my-3">Login</h4>
<form action="run" method="post" id="form1" onchange="validation();">
  <div class="form-group col-md-6 col-sm-12 col-xs-12 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="text" class="form-control" placeholder="Enter Username"  id="user_name" name="user_name" required>
    <small id="helpId1" class="text-muted"></small>
  </div>
  <div class="form-group  col-md-6 col-sm-12 col-xs-12 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Enter Password" id="user_password" name="user_password" required>
    <small id="helpId2" class="text-muted"></small>
  </div> 
  
  <div class="inline-form form-check   col-md-6 col-sm-12 col-xs-12 mx-auto my-3">

    <label class="form-check-label px-3">
      <input class="form-check-input" type="checkbox">Remember me
    </label>
  <span class="float-right"> <a href="http://localhost/ElectronicEcommerce/user/forgotpassword">Forgot password?</a></span>
</div>

<div class="col-md-7 mx-auto">
<a  href="googlelogin"><img src="../app/assets/images/loging.png"  class=" mx-auto"  width="150px"></a> 
<a href=' <?php echo  $loginUrl ;?>'><img src="../app/assets/images/loginfb.png" class=" flex-end" width="150px"></a>
</div>
<div class="inlining-form  col-md-12 col-sm-12 col-xs-12 mx-auto  my-3 align-center text_center">
  <div class=" inlining col-md-2 col-sm-12 col-xs-12"></div>
  <div class=" inlining col-md-4 col-sm-12 col-xs-12 mx-auto ">
  <button type="submit" class="bt mx-auto login_btn" onclick="myFunction()">login</button>
      <!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>
</div>

  <div class="inlining col-md-4 col-sm-12 col-xs-12 mx-auto">
  <button type="button" class="bt1 mx-auto"><a href="http://localhost/ElectronicEcommerce/user/register" >register</button></a>
</div>

</div>
</form>
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
<script>

$(document).ready(function() {


$('#submit').click(function(e){
  e.preventDefault();


  var name = $("#user_name").val();
  var password = $("#user_password").val();

  var x= JSON.parse(localStorage.getItem("cart")) 
  $.ajax({
      type: "POST",
      url: "http://localhost/ElectronicEcommerce/user/run",
      context: document.body,
      data: {user_name:name, user_password:password , cartdata: JSON.stringify(x) },
      success: function(result) {
        //console.log(result);
        if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
               localStorage.removeItem('cart');
               var x= JSON.parse(localStorage.getItem("cart"))
               console.log(x)
        }
        else{
          console.log('couldnt')
        }
    },
    error: function(result){
       alert("Error saving concert");
       }
  })


});
});
var form1=document.getElementById("form1");
var mass1=document.getElementById("helpId1");
var mass2=document.getElementById("helpId2");
var login_btn=document.getElementById("submit");
var nameFormat= /^[A-Za-z ]+$/;
var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{4,15}$/;
function validation(){
if( nameFormat.test(form1[0].value) )
{
	login_btn.disabled = false;
	login_btn.className = "btn enabled"
}
else{
	login_btn.disabled = true;
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
form1[1].addEventListener("input",function CheckPassword() 
{ 
if(form1[1].value.match(paswd)) 
{ 
    form1[1].style.borderColor="green";

return true;
}
else
{ 
    mass2.innerHTML = "*  Password Should Contain a Number/Carcter/Special Carcter  ";
    form1[1].style.borderColor="red";

return false;
}
});

</script>
