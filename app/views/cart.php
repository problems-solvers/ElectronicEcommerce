<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" style="background-color: #e0b9e4">
  <h3>This is a Wishlist</h3>
  
<?php
if(isset($_SESSION['id'])){
  $x= json_encode($data); 
}
?>
</div>
<br>
<h4>heddin</h4>
<div class="col-6 my-8 mx-auto cartBox">
<div class="show">

</div>



</div><div class="nam mx-auto  my-4 py-2 col-2 text-center text-light" >
  
      <button class="but" >Check Out</button>
  </div>
<br><br><br>

<script>
//adding cartbox data in table
        //show item in cart
        function loadData(){
          console.log(' i am here rererere')
          let tableData = '';
          const cartBox = document.querySelector('.cartBox');
          const cardBoxTable = cartBox.querySelector('.show');
          cardBoxTable.innerHTML = tableData;
            if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
            <?php
            $x= json_encode($data); 
              ?>
          console.log('hi')
         var cartdata = <?php echo $x; ?>;
         if(cartdata[0] === null){
            tableData ="no data in cart"
          }else{
         cartdata.map(data=>{
           
           tableData +='<div class="card  mx-auto" style="width:700px; height:200px;"><div class="d-flex align-content-middle"><div class="col-6 px-0 align-items-center "><img style="height:100%; width:200px;" src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body col-4 py-1 m-auto mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span >'+data.total_price+'</span><br></div><div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" ><div class=" col-lg-12  close-btn" stayl=" padding:40px "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-minus " ></i></a></div><br><br><br><div class="row my-2"> <div class=" mx-auto">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" title="Facebook"><i class="fas fa-minus " ></i></a></div> <div class="mx-auto"> <p>' +data.quentity+'</p></div>  <div class="mx-auto">  <a  class="addqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" title="instagram"><i class="fas fa-plus " ></i></a></div>    </div></div></div></div>';
          });}
        }
        else{
          if(JSON.parse(localStorage.getItem('cart')) === null){
            tableData ="no data in cart"
          }else{
            JSON.parse(localStorage.getItem('cart')).map(data=>{
           
                tableData +='<div class="card  mx-auto" style="width:700px; height:200px;"><div class="d-flex align-content-middle"><div class="col-6 px-0 align-items-center "><img style="height:100%; width:200px;" src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body col-4 py-1 m-auto mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span >'+data.total_price+'</span><br></div><div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" ><div class=" col-lg-12  close-btn" stayl=" padding:40px "> <a class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-minus " ></i></a></div><br><br><br><div class="row my-2"> <div class=" mx-auto">  <a    class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" title="Facebook"><i class="fas fa-minus" ></i></a></div> <div class="mx-auto"> <p>' +data.quentity+'</p></div>  <div class="mx-auto">  <a   class="addqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" title="instagram"><i class="fas fa-plus" ></i></a></div>    </div></div></div></div>';
            });
          }
        }
        cardBoxTable.innerHTML = tableData;
          }
      window.onload = function(){
          
          loadData();
      
        $(document).ready(function() {
          $('.deletefromCart').click(function (e) {
            console.log("empid")
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                <?php
                  $x= json_encode($data); 
                 ?>
                console.log('hi')
                var cartdata = <?php echo $x; ?>;
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/deleteCartItem',
                    data: {cart_id:cart_id }
                    })
                    .done(function (response) {
                      const index = cartdata.findIndex((x)=> x.cart_id === cart_id);
                      cartdata.splice(index, 1);
                      loadData();
                    })
                    .fail(function () {
                     
                    })   
              }else {
                
                     const localItems = JSON.parse(localStorage.getItem("cart"));
                     const found = localItems.findIndex((x)=> x.pro_id === pro_id);
                     console.log(pro_id,found)
                     if(found!=null){
                     
                       localItems.splice(found, 1);

                    }
                     localStorage.setItem('cart',JSON.stringify(localItems));
                    loadData();

                     var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log(localItems,found,'fds',mx)
              }
            })
            $('.addqty').click(function (e) {
            console.log("empid")
              let cart = [];
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
           // $(this).attr('id');
             var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
              e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)+1
             var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
              var price= e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                <?php
                  $x= json_encode($data); 
                    ?>
                console.log('hi')
               var cartdata = <?php echo $x; ?>;
               const found = cartdata.find((x)=> x.pro_id === pro_id);
                           console.log(pro_id,found.total_price,found.pro_price)
               console.log(cartdata);
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/updateqty',
                    data: {qty:qty, cart_id:cart_id , total_price:found.total_price, price : found.pro_price }
                    })
                    .done(function (response) {
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(qty) * parseFloat(found.pro_price) 
                        console.log('hhaha');
                    })
                    .fail(function () {
                      e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)-1
                       console.log('dss');
                    })   
              }else {
                
                     const localItems = JSON.parse(localStorage.getItem("cart"));
                     const found = localItems.findIndex((x)=> x.pro_id === pro_id);
                     console.log(pro_id,found)
                     if(found!=null){
                       console.log('hello',qty)
                      localItems[found].quentity =parseInt(qty)
                     e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(qty)*parseFloat(localItems[found].total_price)

                     }
                     
                     localStorage.setItem('cart',JSON.stringify(localItems));
                     var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log(localItems,found,'fds',mx)
              //     }
              //   cart = [];
              
              //   const iconShoppingP = document.querySelector('.iconShopping p');
              //   var cartdata = JSON.parse(localStorage.getItem('cart'))
              //   iconShoppingP.innerHTML = cartdata.length;
              // }
              }
            }) 
            $('.decreseqty').click(function (e) {
            console.log("empid")
              let cart = [];
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
           // $(this).attr('id');
            var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
            if(parseInt(qty)-1 !=0){
           e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)-1
            }
           var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
           var price= e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                <?php
            $x= json_encode($data); 
              ?>
          console.log('hi')
         var cartdata = <?php echo $x; ?>;
                const found = cartdata.find((x)=> x.pro_id === pro_id);
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/updateqty',
                    data: {qty:qty, cart_id:cart_id , total_price:found.total_price, price : found.pro_price }
                    })
                    .done(function (response) {
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(qty) * parseFloat(found.pro_price) 
                        console.log('hhaha');
                    })
                    .fail(function () {
                      e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)+1
                       console.log('dss');
                    })   
              }else {
                
                     const localItems = JSON.parse(localStorage.getItem("cart"));
                     const found = localItems.findIndex((x)=> x.pro_id === pro_id);
                     console.log(pro_id,found)
                     if(found!=null){
                       console.log('hello',qty)
                      localItems[found].quentity =parseInt(qty)
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(localItems[found].total_price)*parseFloat(qty)
                     }
                     
                     localStorage.setItem('cart',JSON.stringify(localItems));
                     var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log(localItems,found,'fds',mx)
              //     }
              //   cart = [];
              
              //   const iconShoppingP = document.querySelector('.iconShopping p');
              //   var cartdata = JSON.parse(localStorage.getItem('cart'))
              //   iconShoppingP.innerHTML = cartdata.length;
              // }
              }
            })
            
            
          })
   function Delete(e){
    if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {

    }else{

    
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
  }


}
        
</script>