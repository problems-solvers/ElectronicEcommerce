

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
</div>
<br>
<h4>heddin</h4>
<div class="col-6 my-8 mx-auto cartBox">
<div class="show">



</div>



</div><div class="nam mx-auto  my-4 py-2 col-2 text-center text-light" >
  
      <button class="but" >Loge in</button>
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