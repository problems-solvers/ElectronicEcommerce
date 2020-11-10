<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>

  <div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Cart</h3>
</div>
<?php
if(isset($_SESSION['id'])){
  $x= json_encode($data); 
}
?>
<br>
<!-- <h4>heddin</h4> -->
<div class="row col-12">
<div class="col-5 my-8 mx-auto cartBox">
<div class="show">

</div> 
        
</div>

<div class="col-5 my-8 mx-auto cartBox">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">The Total Amount Of The Cart is </h5>
    <h6 class="card-subtitle mb-2 text-muted" id="totalPrice"></h6>
     <button class="bt" id="checkoutbtn">Check Out</button>
  </div>

</div>

  </div>
  </div>

<script>
//adding cartbox data in table
        //show item in cart
      // 
        //show item in cart
        function loadData(){
          console.log(' i am here rererere')
          let tableData = '';
          const cartBox = document.querySelector('.cartBox');
          const totalPrice = document.querySelector('#totalPrice');
          const cardBoxTable = cartBox.querySelector('.show');
          //cardBoxTable.innerHTML = tableData;
          var cartdata;
            if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
              $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/getCart',
                    global: true,
                async: false,
                dataType: 'json',
                    })
                    .done(function (response) {
                      cartdata=response;
                    })
                    .fail(function () {
                     
                    })  
            // <?php
            // $x= json_encode($data); 
            //   ?>
          console.log('hi')
        // var cartdata = 
        <?php //echo $x; ?>;
        console.log(cartdata);
         if(cartdata[0] === 'nothingonCart'){
            tableData ="<img src='/ElectronicEcommerce/app/assets/images/no.jpg'><h2 class='text-center'>No data in cart</h2>"
          }else{
         cartdata.map(data=>{
          tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="row mx-1 align-content-middle"><a  href="http://localhost/ElectronicEcommerce/product/productdetale?action=view&pro_id='+data.pro_id+'" class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;" src="'+data.main_img+'" alt="Card image cap"></a><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addToWish" id="'+data.pro_id+'"><i class=" mdi mdi-heart-outline" style="color:#836691;"></i><span  class="mx-2">add to wishlist</span> </a></div></div><div  ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br><br><br><div class="row my-2" style=" position:absolute;  right:20px ; color:#836691; font-size:20px; bottom:0px; "> <div class=" mx-2">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-minus-circle " ></i></a></div> <div class="mx-2"> <p>' +data.quentity+'</p></div>  <div class="mx-2">  <a  class="addqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-plus-circle " ></i></a></div>    </div></div></div></div>';
          });
            var sum= 0;
           

             for (var i = 0; i < cartdata.length; i++){

              sum += parseFloat(cartdata[i].total_price);
             }
            totalPrice.innerHTML = parseFloat(sum).toFixed( 2 );

          }
          
        }
        else{
          if(JSON.parse(localStorage.getItem('cart')) === null){
            tableData ="no data in cart"
          }else{
            JSON.parse(localStorage.getItem('cart')).map(data=>{
           tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="row mx-1 align-content-middle"><a     href="http://localhost/ElectronicEcommerce/product/productdetale?action=view&pro_id='+data.pro_id+'" class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;"  src="'+data.pro_img+'" alt="Card image cap"></a><div class="card-body py-1 m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+parseFloat(data.total_price*data.quentity).toFixed( 2 )+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addToWish" id="'+data.pro_id+'"><i class=" mdi mdi-heart-outline " style="color:#836691;" ></i><span  class="mx-2 ">add to wishlist</span> </a></div></div><div  ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br><br><br><div class="row my-2" style=" position:absolute;  right:20px ; color:#836691; font-size:20px; bottom:0px; "> <div class=" mx-2">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-minus-circle " ></i></a></div> <div class="mx-2"> <p>' +data.quentity+'</p></div>  <div class="mx-2">  <a  class="addqty"  id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-plus-circle " ></i></a></div>    </div></div></div></div>';
            });
            var cartData =JSON.parse(localStorage.getItem('cart'))
            var sum=0;
            for (var i = 0; i < cartData.length; i++){
              sum += parseFloat(cartData[i].total_price*cartData[i].quentity);
             }
             totalPrice.innerHTML = parseFloat(sum);
          }
        }
        cardBoxTable.innerHTML = tableData;
      }
      window.onload = function(){
          console.log('gg')
          loadData();
      
        $(document).ready(function() {
          $(document).delegate('.deletefromCart', 'click', function(){
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                // <?php
                //   $x= json_encode($data); 
                //  ?>
                console.log('hi')
               // var cartdata = ;
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/deleteCartItem',
                    data: {cart_id:cart_id }
                    })
                    .done(function (response) {
                     // const index = cartdata.findIndex((x)=> x.cart_id === cart_id);
                     // cartdata.splice(index, 1);
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
              totalqtycart()     
          });
        $(document).delegate('.addqty', 'click', function(e){
            console.log("empid")
              let cart = [];
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
           // $(this).attr('id');
             var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
             if(parseInt(qty)<0){
              qty =1
             }
              e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)+1
             var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
              var price= e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/getCart',
                    global: true,
                async: false,
                dataType: 'json',
                    })
                    .done(function (response) {
                      cartdata=response;
                    })
                    .fail(function () {
                     
                    })  
               const found = cartdata.find((x)=> x.pro_id === pro_id);
                           console.log(pro_id,found.total_price,found.pro_price)
               console.log(cartdata);
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/updateqty',
                    data: {qty:qty, cart_id:cart_id , total_price:found.total_price, price : found.pro_price }
                    })
                    .done(function (response) {
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=(parseFloat(qty) * parseFloat(found.pro_price) ).toFixed( 2 )+'$'
                        console.log('hhaha');
                        $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/getCart',
                    global: true,
                      async: false,
                      dataType: 'json',
                       })
                    .done(function (response) {
                      cartData=response;
                      var sum= 0;
                       for (var i = 0; i < cartData.length; i++){
                         sum += parseFloat(cartData[i].total_price);
                       }
                       totalPrice.innerHTML = parseFloat(sum).toFixed( 2 );
                    })  
                      

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
                     e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=(parseFloat(qty)*parseFloat(localItems[found].total_price)).toFixed( 2 )+'$'
                    }
                     
                     localStorage.setItem('cart',JSON.stringify(localItems));
                     var cartData =JSON.parse(localStorage.getItem('cart'))
                      var sum=0;
                      for (var i = 0; i < cartData.length; i++){
                        sum += parseFloat(cartData[i].total_price*cartData[i].quentity);
                       }
                       totalPrice.innerHTML = parseFloat(sum);
                     
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
        $(document).delegate('.decreseqty', 'click', function(e){
            console.log("empid")
              let cart = [];
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
           // $(this).attr('id');
            var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
            if(parseInt(qty)<0){
              qty =1
             }
            if(parseInt(qty)-1 !=0){
           e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent=parseInt(qty)-1
            }
            else{
              e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent= 1
            }
           var qty= e.target.parentElement.parentElement.parentElement.children[1].children[0].textContent
          
           var price= e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent
            if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
              $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/getCart',
                    global: true,
                async: false,
                dataType: 'json',
                    })
                    .done(function (response) {
                      cartdata=response;
                    })
                    .fail(function () {
                     
                    })  
        
                const found = cartdata.find((x)=> x.pro_id === pro_id);
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/updateqty',
                    data: {qty:qty, cart_id:cart_id , total_price:found.total_price, price : found.pro_price }
                    })
                    .done(function (response) {
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=(parseFloat(qty) * parseFloat(found.pro_price) ).toFixed( 2 )+'$'
                        console.log('hhaha');
                        $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/getCart',
                    global: true,
                      async: false,
                      dataType: 'json',
                       })
                    .done(function (response) {
                     var  cartData=response;
                     var sum= 0;
                      for (var i = 0; i < cartData.length; i++){
                       sum += parseFloat(cartData[i].total_price);
                      }
                     totalPrice.innerHTML = parseFloat(sum).toFixed( 2 );
                    }) 
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
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=(parseFloat(localItems[found].total_price)*parseFloat(qty)).toFixed( 2 )+'$'
                     }
                     
                     localStorage.setItem('cart',JSON.stringify(localItems));
                     var cartData =JSON.parse(localStorage.getItem('cart'))
                      var sum=0;
                      for (var i = 0; i < cartData.length; i++){
                        sum += parseFloat(cartData[i].total_price*cartData[i].quentity);
                       }
                       totalPrice.innerHTML = parseFloat(sum);
                     
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
        $(document).delegate('#checkoutbtn', 'click', function(e){
          
          $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/order/addorder',
                    dataType: 'json',
                    })
                    .done(function (response) {
                      console.log(response)
                      if(response[0] =='notlogedin'){
                        console.log('hhaha');
                     const localItems = JSON.parse(localStorage.getItem("cart"));

                        if(localItems==0)
                        alert("please shopping  before checkout");

                        else
                      { 
                         window.location.href = 'http://localhost/ElectronicEcommerce/user/login'


}

                      }
                      if(response[0] !='notlogedin'){
                        console.log('login');

                        const localItems = JSON.parse(localStorage.getItem("cart"));
                        console.log(response[0]);

                        if(response[0] =='nothingtoadd')
                        {
                                                     
                      console.log('inside nothing');

                      alert("please shopping  before checkout");

                     }

                       // else
                        //window.location.href = 'http://localhost/ElectronicEcommerce/user/login/'


                      }
                      
                      
                      if(response[0] =='faildaddedtoOrder'){
                        console.log('faildaddedtoOrder');
                        alert("faildaddedtoOrder");
                        //window.location.href = 'http://localhost/ElectronicEcommerce/cart'


                      }
                      if(response[0] =='gotopayment'){
                        full_name="ersad";
                        totalqtycart()     
                       // window.location.href = 'http://localhost/ElectronicEcommerce/payment?userName='+full_name+'';
                        window.location.href = 'http://localhost/ElectronicEcommerce/payment/';

                      }
                      if(response[0] =='nothingtoadd'){
                        console.log('hhaha');

                      }
                      else{

                      }
                    })
                    .fail(function () {
                        console.log('dss');
                    })  
        })
        $(document).delegate('.addToWish', 'click', function(e){
          let cart = [];
          var empid = $(this).attr('id');
          let item = {
                   pro_id:empid,
                   pro_img:e.target.parentElement.parentElement.parentElement.children[0].children[0].src,
                   pro_name:e.target.parentElement.parentElement.children[0].textContent,
                   total_price:e.target.parentElement.parentElement.children[1].textContent,
                   quentity:1
                  };
          console.log(item)
          if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                cart.push(item)
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/wishlist/addtoWishlist',
                    data:  "wishlistdata="+JSON.stringify(cart) 
                })
                .done(function (response) {
                    console.log('hhaha');
                })
                .fail(function () {
                   console.log('dss');
                }) 
                totalqtywishlist()     
          } else {
                 if(JSON.parse(localStorage.getItem('wishlist')) === null){
                     localStorage.setItem("wishlist",JSON.stringify(cart));
                  }else{
                     const localItems = JSON.parse(localStorage.getItem("wishlist"));
                     localItems.map(data=>{
                         if(item.pro_id == data.pro_id){
                             item.quentity = data.quentity + 1;
                             
                         }else{
                             cart.push(data);
                         }
                         localStorage.setItem("wishlist",JSON.stringify(cart));
                     });
                     cart.push(item);
                     localStorage.setItem('wishlist',JSON.stringify(cart));
                     var mx= JSON.parse(localStorage.getItem('wishlist'))
                     console.log('fds',mx)
                  }
                   cart = [];
                   totalqtywishlist()
          }

      })   
      })
         

}
        
</script>