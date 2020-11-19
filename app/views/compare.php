<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<div class="row container text-center" > 
            <div class="col-md-12  mx-auto text-center"style="margin-top:2%;margin-bottom:2%; ">
            <h2 class="fs-title" style="color:#836691; font-weight:bold;font-size:20px;margin-left:25%">Products Comparision </h2>
            </div>
            </div>    
<div class="nam mx-auto  my-2 py-5 col-4 text-center text-light" >
 
<?php
if(isset($_SESSION['id'])){
  $x= json_encode($data); 
}
?>
</div>
<br>



<div class="container mar" style="margin-top:2%;margin-bottom:2%;">

    <div class="compareBox" style=" margin-top:-13%; margin-left:-8px; margin-right:0px;box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);">
      <!-- fieldsets -->
      <fieldset style=" box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);" class="col-md-12">
        <div class="container row show"style=" margin-left:0%;margin-top:4%;">


                <div class="col-2">
                <table class="table table-hover" style="border:5px;">
                
                    <tbody class="text-left "  style="color:#836691; font-weight:bold;font-size:16px;">
                    <tr>
                   <td>
                   <div style=" margin:10px"> 
                   <br><br><br>
                   img:
                   <br><br><br><br>
                   </div>
                    </td>
                   </tr>
                    <tr>
                   <td>Name : </td>
                   </tr>
                   <tr>
                   <td>cart :<br>
                   </td>
                   </tr>
                   <tr>
                   <td>more :<br>
                   </td>
                   </tr>
                   <tr>
                   <td>wishlist :<br>
                   </td>
                   </tr>
                   <tr>
                   <td>price :</td>
                   </tr>
                   <tr>
                   <tr>
                   <td>brand :</td>
                   </tr>

                   <tr>
                   <td>description :</td>
                   </tr>
                    </tbody>
                  </table>
</div>
<div class="col-10">
                  <table class="table table-hover " style="border:5px;">
                
                <tbody class="text-center compare-table"  style="color:#000; font-size:16px;">

              
                </tbody>
              </table>
                  </div>           

      </fieldset>
            </div>
    
         

        </div>
        <div class="container mar" style="margin-top:2%;margin-bottom:2%;">
       <div class="row container " style=" margin-top:2%;margin-bottom:1%;"> 
            <div class="col-md-12  mx-auto text-center">
            <h2 class="fs-title" style="color:#836691; font-weight:bold;font-size:16px;"></h2>
            </div>
            </div> 
    
    <div class="py-5 text-center">
    </div>
    <div style=" margin-top:-13%; margin-left:-8px; margin-right:0px;box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);">
    
            </div>
    
         

        </div>
        
       <script>
//adding comparebox data in table
        //show item in wishlist
        function loadData(){
          console.log(' i am here rererere')
        //  let tableData = '';
          let compareData = '';
          const wishlistBox = document.querySelector('.compareBox');
          const cardBoxTable = wishlistBox.querySelector('.show');
          const compareTable = wishlistBox.querySelector('.compare-table');
          //cardBoxTable.innerHTML = tableData;
          var wishlistdata;
            if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
              $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/compare/getcompare',
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
         // tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
         compareData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';

          }else{
            wishlistdata.map(data=>{
         // tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;" src="'+data.main_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addtoCart"  id="'+data.pro_id+'"><i class="fas fa-heart " style="color:#836691;"></i><span  class="mx-2">add to Cart</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br></div></div></div>';
          compareData+='<tr><td><div class="col-md-3 col-4 col-sm-8 col-xs-10" style="margin-left:37%;">  <img class="card-img-top" src="'+data.main_img+'" alt="Card image cap" width="90px" height="190px"></div></td> </tr><tr><td>'+data.pro_name+'</td></tr><tr><td><div class="col-12"><a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span  style="margin:5px;">add to cart </span></div></td>
</tr><tr><td><button style="color:black; background-color:white; border:1px #836691 solid; border-radius: 15px;">find out more>></button></td></tr>
<tr><td><a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a> &nbsp;<span  style="margin:5px;">add to wishlist</span>
</td></tr><tr><td>'+data.total_price+'</td></tr><tr><td>'+data.brand+'</td></tr><tr><td>'+data.pro_details+'</td></tr>';});}
        }
        else{
          if(JSON.parse(localStorage.getItem('compare')).length ===0){
            tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
          }else{
            JSON.parse(localStorage.getItem('compare')).map(data=>{
          // tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #836691;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;"  src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#836691;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2 addtoCart"  id="'+data.pro_id+'"><i class="fas fa-heart " style="color:#836691;" ></i><span  class="mx-2">add to Cart</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br></div></div></div>';
          compareData+='<tr><td><div class="col-md-3 col-4 col-sm-8 col-xs-10" style="margin-left:37%;">  <img class="card-img-top" src="'+data.main_img+'" alt="Card image cap" width="90px" height="190px"></div></td> </tr><tr><td>'+data.pro_name+'</td></tr><tr><td><div class="col-12"><a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span  style="margin:5px;">add to cart </span></div></td>
</tr><tr><td><button style="color:black; background-color:white; border:1px #836691 solid; border-radius: 15px;">find out more>></button></td></tr>
<tr><td><a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a> &nbsp;<span  style="margin:5px;">add to wishlist</span>
</td></tr><tr><td>'+data.total_price+'</td></tr><tr><td>'+data.brand+'</td></tr><tr><td>'+data.pro_details+'</td></tr>';});}
           
            });
          }
        }
      //  cardBoxTable.innerHTML = tableData;
        compareTable.innerHTML = compareData;
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
              
               // console.log(comparedata)

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/cart/deleteCartItem',
                    data: {cart_id:cart_id }
                    })
                    .done(function (response) {
                    //  const index = comparetdata.findIndex((x)=> x.cart_id === cart_id);
                    //  comparetdata.splice(index, 1);
                      loadData();
                    })
                    .fail(function () {
                     
                    })   
              }else {
                
                     const localItems = JSON.parse(localStorage.getItem("compare"));
                     const found = localItems.findIndex((x)=> x.pro_id === pro_id);
                     console.log(pro_id,found)
                     if(found!=null){
                     
                       localItems.splice(found, 1);

                    }
                     localStorage.setItem('compare',JSON.stringify(localItems));
                    loadData();

                     var mx= JSON.parse(localStorage.getItem('compare'))
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





