

<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" style="background-color: #e0b9e4">
  <h3>This is a Wishlist</h3>
  

</div>
<br>
<h4>heddin</h4>
<div class="col-6 my-8 mx-auto wishtBox">
<div class="show">



</div>



</div><div class="nam mx-auto  my-4 py-2 col-2 text-center text-light" >
  
      <button class="but" >Loge in</button>
  </div>
<br><br><br>

<script>
   //delete from cart
   function Delete(e){
			let items = [];
			JSON.parse(localStorage.getItem('wish')).map(data=>{
				if(data.id != e.parentElement.parentElement.parentElement.children[2].children[2]){
					
					items.push(data);

				}
            });
            
                /*let x=JSON.parse(localStorage.getItem("items"));
                console.log("heloo from cart");         
                console.log(x); */        
             
           
			localStorage.setItem('wish',JSON.stringify(items));
			window.location.reload();
		};

</script>