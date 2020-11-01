<<<<<<< HEAD:app/views/cart.php


<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" style="background-color: #e0b9e4">
  <h3>This is a Wishlist</h3>
  
<?php
/*if (json_encode (c.id))
echo "yes" ;
else
echo "no";*/
//echo $_COOKIE["gfg"];
echo  $_COOKIE["height"];

if(isset($_POST['userdata']))
{
  echo "fined";
}
else 
echo "no";
if (isset($_GET["w1"]) && isset($_GET["w2"])) {

          $hello = $_GET["w1"] . " " . $_GET["w2"];}
if(isset($_COOKIE['data'])) { 
  echo "welcome ".$_COOKIE['data'];
}
if(isset($_COOKIE['fb'])) { 
  echo "welcome ".$_COOKIE['fb'];
}
?>
||||||| 967ff02:app/views/cart.php
<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" style="background-color: #e0b9e4">
  <h3>This is a Wishlist</h3>
=======
<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" style="background-color:#c5aa59">
  <h3>This is a Card</h3>
>>>>>>> upstream/master:app/views/card.php
</div>
<br>
<<<<<<< HEAD:app/views/cart.php
<h4>heddin</h4>
<div class="col-6 my-8 mx-auto cartBox">
<div class="show">



||||||| 967ff02:app/views/cart.php


<div class="col-6 my-8 mx-auto">
<div class="card  mx-auto" style="width:700px; height:200px;">
  <div class="d-flex align-content-middle">
    <div class="col-6 px-0 align-items-center ">
  <img style="height:100%; width:200px;" src="http://placehold.it/64x64" alt="Card image cap">
  </div>
  <div class="card-body col-4 py-1 m-auto mx-auto">
    <h5 class="card-title">Name</h5>
    <span >price</span>
    <br>
   
  </div>
  <div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" >
   
  <div class=" col-lg-12  close-btn" stayl=" padding:40px "> <a href="#"  title="instagram">X</a></div>
         
          
        <br><br><br>
          <div class="row my-2">   
          <div class=" mx-auto">  <a href="#"  title="Facebook"><i class="fas fa-minus"></i></a></div> 
          <div class="mx-auto"> <p>1 </p></div> 
          <div class="mx-auto">  <a href="#"  title="instagram"><i class="fas fa-plus"></i></a></div>    

         </div>
          
  </div>
  
  </div>
=======
<div class="col-6 my-8 mx-auto">
<div class="card  mx-auto" style="width:600px; height:200px; border-radius: 20px;">
  <div class="d-flex align-content-middle">
    <div class="col-6 px-0 align-items-center ">
  <img style="height:100%; width:200px;" src="http://placehold.it/64x64" alt="Card image cap">
  </div>
  <div class="card-body col-4 py-1 m-auto mx-auto">
    <h5 class="card-title">Name</h5>
    <span >price</span>
    <br>
   
  </div>
  <div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" >
   
  <div class=" col-lg-4 m-auto  my-2 close-btn" stayl=" padding:40px "> <a href="#"  title="instagram">X</a></div>
         
          
        <br><br><br>
          <div class="row my-2">   
          <div class=" mx-auto">   <a href="#"  title="instagram">-</a></div>
         
          <div class="mx-auto"> <p> 1 </p></div> 
          <div class="mx-auto">   <a href="#"  title="instagram">+</a></div>
         
         </div>
          
  </div>
  
  </div>
>>>>>>> upstream/master:app/views/card.php
</div>


<?PHP
$_SESSION['redirect']=$_SERVER['REQUEST_URI'];
echo $_SESSION['redirect'];
?>
</div><div class="nam mx-auto  my-4 py-2 col-2 text-center text-light" >
   <a href="/ElectronicEcommerce/order/addorder?page=<?php $_SERVER['REQUEST_URI'] ?>"> <button class="but" style="background-color:#c5aa59"  >Check Out</button></a>
  </div>
<br><br><br>

<script>
   //delete from cart
   function Delete(e){
			let cart = [];
			JSON.parse(localStorage.getItem('cart')).map(data=>{
				if(data.id != e.parentElement.parentElement.parentElement.children[2].children[2]){
					
					cart.push(data);

				}
            });
            
                /*let x=JSON.parse(localStorage.getItem("items"));
                console.log("heloo from cart");         
                console.log(x); */        
             
           
			localStorage.setItem('cart',JSON.stringify(cart));
			window.location.reload();
		};

</script>