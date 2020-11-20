<?php
include("app/config/config.php");

$redirectTo="http://localhost/ElectronicEcommerce/user/facebooklogin";
$data=["email"];
$loginUrl = $helper->getLoginUrl($redirectTo, $data);

 //$user = $facebook->getUser();
//page?<?php $_SERVER['REQUEST_URL']

?>

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
            
  <form method="post" action="run"  id="form1" onchange="validation();">
  <div class="form-group col-md-8 col-sm-12 col-xs-12 mx-auto my-5">
    <!-- <label for="user_name">Email address:</label> -->
    <input type="text" class="form-control"  placeholder="Enter Username"  id="user_name" name="user_name" required>
    <small id="helpId1" class="text-muted"></small>
  </div>
  <div class="form-group  col-md-8 col-sm-12 col-xs-12 mx-auto my-5">
    <!-- <label for="password">Password:</label> -->
    <input type="password" class="form-control" placeholder="Enter Password" id="user_password" name="user_password" required>
    <small id="helpId2" class="text-muted"></small>
  </div> 
  
  <!-- <div class="inline-form form-check   col-md-10 col-sm-12 col-xs-12 mx-auto my-3">

    <label class="form-check-label px-3">
      <input class="form-check-input" type="checkbox">Remember me
    </label>
  <span class="float-right"> <a href="http://localhost/ElectronicEcommerce/user/forgotpassword">Forgot password?</a></span>
</div> -->


<div class=" d-flex justify-content-flex-around col-md-8 mx-auto  my-4  justify-content-between">
 
  <button type="submit" id="submit" class="bt disabled mx-3 pb-4 "   onclick="myFunction()">login</button>
      <!-- The actual snackbar -->
<!-- <div id="snackbar">Some text some message..</div> -->


 <a href="http://localhost/ElectronicEcommerce/user/register" class="bt1 btn mx-3">register</a>


</div>
<H5>OR</H5>
<div class=" d-flex justify-content-flex-around col-md-8 mx-auto  my-4  justify-content-between">
<a  href="googlelogin"><img src="/ElectronicEcommerce/app/assets/images/loging.png"    width="150px"></a> 
<a href=' <?php echo  $loginUrl ;?>'><img src="/ElectronicEcommerce/app/assets/images/loginfb.png"  width="150px"></a>
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

// function myFunction() {
//     // Get the snackbar DIV
//     var x = document.getElementById("snackbar")

//     // Add the "show" class to DIV
//     x.className = "show";

//     // After 3 seconds, remove the show class from DIV
//     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
// }
</script>
<script>

$(document).ready(function() {


$('#submit').click(function(e){
  e.preventDefault();


  var name = $("#user_name").val();
  var password = $("#user_password").val();
  var x;
  if(localStorage.getItem("cart")==null){
      x=null;
  }
  else
  { x= JSON.parse(localStorage.getItem("cart")); }
  console.log(JSON.parse(localStorage.getItem("cart")) );
  console.log("before ajax");

  $.ajax({
      type: "POST",
      url: "http://localhost/ElectronicEcommerce/user/run",
      context: document.body,
      data: {user_name:name, user_password:password ,cartdata: JSON.stringify(x) },
      global: true,
      async: false,
      dataType: 'json',
    })
      .done(function (response) {
        console.log("respons");
        console.log(response[0])
        if (response[0]=='Admin') {
          window.location.href ='http://localhost/ElectronicEcommerce/admin/admin_dashboard';
          console.log("admin");

        }
        if(response[0]=='back'){
          localStorage.removeItem('cart');
               var x= JSON.parse(localStorage.getItem("cart"))
               console.log(x)
          console.log("block ");

         window.location.href ='http://localhost/'+response[1];

        }
        if(response[0]=='User'){
          localStorage.removeItem('cart');
               var x= JSON.parse(localStorage.getItem("cart"))
               console.log(x)
          console.log("user");

          window.location.href ='http://localhost/ElectronicEcommerce/';

        }
        if(response[0]=='notlogedin'){
          window.location.href ='http://localhost/ElectronicEcommerce/user/login';
          console.log("notlogin");

        }
        else{
          console.log('couldnt')
          console.log(response[0]);

        }
      })
      .fail(function () {
        console.log("failed");
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
	login_btn.className = "btn enabled bt mx-auto pb-4"
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
