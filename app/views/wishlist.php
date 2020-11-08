<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel col-12"> Wishlist</h3>
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
<div class="col-5 my-8 mx-auto wishlistBox">

<div class="show">

</div> 
        
</div>


<script>
//adding wishlistbox data in table
        //show item in wishlist
        function loadData(){
          console.log(' i am here rererere')
          let tableData = '';
          const wishlistBox = document.querySelector('.wishlistBox');
          const cardBoxTable = wishlistBox.querySelector('.show');
          //cardBoxTable.innerHTML = tableData;
          var wishlistdata;
            if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
              $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/wishlist/getWishlist',
                    global: true,
                async: false,
                dataType: 'json',
                    })
                    .done(function (response) {
                      wishlistdata=response;
                    })
                    .fail(function () {
                     
                    })  
            // <?php
            // $x= json_encode($data); 
            //   ?>
          console.log('hi')
        <?php //echo $x; ?>;
        console.log(wishlistdata);
         if(wishlistdata[0] === 'nothingonWishlist'){
          tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
          }else{
            wishlistdata.map(data=>{
          tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;" src="'+data.main_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addtoCart"  id="'+data.pro_id+'"><i class="fas fa-heart " style="color:#836691;"></i><span  class="mx-2">add to Cart</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br></div></div></div>';
          });}
        }
        else{
          if(JSON.parse(localStorage.getItem('wishlist')).length ===0){
            tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
          }else{
            JSON.parse(localStorage.getItem('wishlist')).map(data=>{
           tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;"  src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addtoCart"  id="'+data.pro_id+'"><i class="fas fa-heart " style="color:#836691;" ></i><span  class="mx-2">add to Cart</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br></div></div></div>';
            });
          }
        }
        cardBoxTable.innerHTML = tableData;
          }
      window.onload = function(){
          
          loadData();
      
        $(document).ready(function() {
          $(document).delegate('.deletefromCart', 'click', function(){
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
               
                console.log('hi')
              
               // console.log(wishlistdata)

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/deleteCartItem',
                    data: {cart_id:cart_id }
                    })
                    .done(function (response) {
                    //  const index = wishlistdata.findIndex((x)=> x.cart_id === cart_id);
                    //  wishlistdata.splice(index, 1);
                      loadData();
                    })
                    .fail(function () {
                     
                    })   
              }else {
                
                     const localItems = JSON.parse(localStorage.getItem("wishlist"));
                     const found = localItems.findIndex((x)=> x.pro_id === pro_id);
                     console.log(pro_id,found)
                     if(found!=null){
                     
                       localItems.splice(found, 1);

                    }
                     localStorage.setItem('wishlist',JSON.stringify(localItems));
                    loadData();

                     var mx= JSON.parse(localStorage.getItem('wishlist'))
                     console.log(localItems,found,'fds',mx)
              }
              totalqtywishlist() 
          });
        $(document).delegate('.addtoCart', 'click', function(e){
            // add to cart problem
            let cart = [];
          var empid = $(this).attr('id');
          console.log(e.target.parentElement.parentElement.parentElement.children[0].children[0].src)
          let item = {
                   pro_id:empid,
                   pro_img:e.target.parentElement.parentElement.parentElement.children[0].children[0].src,
                   pro_name:e.target.parentElement.parentElement.children[0].textContent,
                   total_price:e.target.parentElement.parentElement.children[1].textContent.substring(0, e.target.parentElement.parentElement.children[1].textContent.length - 1),
                    //catgory:    e.target.parentElement.parentElement.children[1].textContent,
                   quentity:1
                  };
          console.log(item,)
          if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                cart.push(item)
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/addCart',
                    data:  "cartdata="+JSON.stringify(cart) 
                })
                .done(function (response) {
                    console.log('hhaha');
                })
                .fail(function () {
                   console.log('dss');
                }) 
                totalqtycart()     
          } else {
                 if(JSON.parse(localStorage.getItem('cart')) === null){
                     localStorage.setItem("cart",JSON.stringify(cart));
                  }else{
                     const localItems = JSON.parse(localStorage.getItem("cart"));
                     localItems.map(data=>{
                         if(item.pro_id == data.pro_id){
                             item.quentity = data.quentity + 1;
                             
                         }else{
                             cart.push(data);
                         }
                         localStorage.setItem("cart",JSON.stringify(cart));
                     });
                     cart.push(item);
                     localStorage.setItem('cart',JSON.stringify(cart));
                     var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log('fds',mx)
                  }
                   cart = [];
                   totalqtycart()
          }

          })

           
            
            
          })
         

}
        
</script>