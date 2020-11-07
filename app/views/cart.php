<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Cart</h3>
</div>
<div class="nam mx-auto  my-2 py-2 col-4 text-center text-light" >

  
<?php
if(isset($_SESSION['id'])){
  $x= json_encode($data); 
}
?>
</div>
<br>
<!-- <h4>heddin</h4> -->
<div class="row">
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


<script>
//adding cartbox data in table
        //show item in cart
      function loadData(){
          console.log(' i am here rererere')
          let tableData = '';
          const cartBox = document.querySelector('.cartBox');
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
            tableData ="no data in cart"
          }else{
         cartdata.map(data=>{
          tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #5F3870;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;" src="'+data.main_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#5F3870;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2"><i class="fas fa-heart " style="color:#5F3870;"></i><span  class="mx-2">add to wishlist</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br><br><br><div class="row my-2" style=" position:absolute;  right:20px ; color:#5F3870; font-size:20px; bottom:0px; "> <div class=" mx-2">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-minus-circle " ></i></a></div> <div class="mx-2"> <p>' +data.quentity+'</p></div>  <div class="mx-2">  <a  class="addqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-plus-circle " ></i></a></div>    </div></div></div></div>';
          });}
        }
        else{
          if(JSON.parse(localStorage.getItem('cart')) === null){
            tableData ="no data in cart"
          }else{
            JSON.parse(localStorage.getItem('cart')).map(data=>{
           tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #5F3870;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;"  src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#5F3870;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2"><i class="fas fa-heart " style="color:#5F3870;" ></i><span  class="mx-2">add to wishlist</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br><br><br><div class="row my-2" style=" position:absolute;  right:20px ; color:#5F3870; font-size:20px; bottom:0px; "> <div class=" mx-2">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-minus-circle " ></i></a></div> <div class="mx-2"> <p>' +data.quentity+'</p></div>  <div class="mx-2">  <a  class="addqty"  id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-plus-circle " ></i></a></div>    </div></div></div></div>';
            });
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
 
          });

         $('.addqty').click(function (e) {
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
                     e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(qty)*parseFloat(localItems[found].total_price)+'$'

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
                      e.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].textContent=parseFloat(localItems[found].total_price)*parseFloat(qty)+'$'
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
        $('#checkoutbtn').click(function (e) {
          $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/order/addorder',
                    dataType: 'json',
                    })
                    .done(function (response) {
                      console.log(response)
                      if(response[0] =='notlogedin'){
                        console.log('hhaha');

                      }if(response[0] =='faildaddedtoOrder'){
                        console.log('hhaha');

                      }
                      if(response[0] =='gotopayment'){
                        window.location.href = 'http://localhost/ElectronicEcommerce/payment'

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
            
          })
         

}
        
</script>