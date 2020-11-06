


<div id="carouselExampleIndicators" class=" col-md-8 col-sm-12 col-xs-12 mx-auto carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner " style="height:300px; ">
    <div class="carousel-item active ">
      <img class="d-block w-100 " src="http://placehold.it/64x64" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/64x64" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/64x64" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="mx-auto  my-2 py-2 col-md-4 col-sm-12 col-xs-12 text-center text-light" style="background-color:#CC8B79">
  <h3>This is a title</h3>
</div>
<div id="owl-one" class=" owl-carousel owl-theme mx-auto">
<?php  $rows=$data['Recent'];
     foreach ($rows as $row) { echo ' 
<div class="item mx-2">

 <div class="card productCard mx-auto " >
  <img class="card-img-top" src="'.$row->main_img.'" alt="Card image cap">
  
  <div class="card-body py-1">
    <h5 class="card-title">'.$row->pro_name.'</h5>
    <span style="float:right; color:#5F3870; font-weight:bold;">'.$row->pro_price.'</span>

    <span>'.$row->cat_name.'</span>
  </div>
  <div class="row productCardbtns mx-0">
    <a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a>
    <a  title="add to compare" id="'.$row->pro_id.'" class="fas fa-exchange-alt addTocompare mx-auto" ></a>
    <a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>          
  </div>
 </div>
</div> ';}  
    ?>
  
</div>

<div class="row mx-auto my-2" style="height:300px;">
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto "> <img class="card-img-top "  height="50%" src="http://placehold.it/64x64" alt="Card image cap"></div>
    <div class="col-md-5 col-sm-12 col-xs-12 mx-auto ">  <img class="card-img-top" height="50%" src="http://placehold.it/64x64" alt="Card image cap"></div>
</div>
<div class="mx-auto my-2 py-2 col-md-4 col-sm-12 col-xs-12 text-center text-light" style="background-color:#CC8B79">
  <h3>This is a title</h3>
</div>

<div id="owl-two" class=" owl-carousel owl-theme mx-auto">
<?php  $rows=$data['Featured'];
     foreach ($rows as $row) { echo ' 
      <div class="item mx-2">

      <div class="card productCard mx-auto " >
       <img class="card-img-top" src="'.$row->main_img.'" alt="Card image cap">
       
       <div class="card-body py-1">
         <h5 class="card-title">'.$row->pro_name.'</h5>
         <span style="float:right; color:#5F3870; font-weight:bold;">'.$row->pro_price.'</span>
     
         <span>'.$row->cat_name.'</span>
       </div>
       <div class="row productCardbtns mx-0">
         <a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a>
         <a  title="add to compare" id="'.$row->pro_id.'" class="fas fa-exchange-alt addTocompare mx-auto" ></a>
         <a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>          
       </div>
      </div>
     </div> ';}  
    ?>
  
</div>

<div class="row mx-auto my-2" style="height:300px;">
    <div class="col-md-3 col-sm-12 col-xs-12 mx-auto "> <img class="card-img-top "  height="50%" src="http://placehold.it/64x64" alt="Card image cap"></div>
    <div class="col-md-3 col-sm-12 col-xs-12 mx-auto ">  <img class="card-img-top" height="50%" src="http://placehold.it/64x64" alt="Card image cap"></div>
    <div class="col-md-3 col-sm-12 col-xs-12 mx-auto ">  <img class="card-img-top" height="50%" src="http://placehold.it/64x64" alt="Card image cap"></div>
</div>


 <script>
      
     //text cut
  window.onload = function(){
     text_truncate = function(str, length, ending) {
      if (length == null) {
        length = 100;
      }
      if (ending == null) {
        ending = '...';
      }
      if (str.length > length) {
        return str.substring(0, length - ending.length) + ending;
      } else {
        return str;
      }
    };
    const titles = document.getElementsByClassName('card-title')
    console.log(titles)
    for(i=0;i<titles.length; i++ ){
     x= titles[i].innerText
     titles[i].innerText=text_truncate(x,16)
    }
        //cart box
      //  const iconShopping = document.querySelector('.iconShopping');
        // const cartBox = document.querySelector('.cartBox');
        // iconShopping.addEventListener("click",function(){
        //     cartBox.classList.add('active');
        // });
    $(document).ready(function() {
            console.log("empid")
      $('.attToCart').click(function (e) {
          let cart = [];
          var empid = $(this).attr('id');
          let item = {
                   pro_id:empid,
                   pro_img:e.target.parentElement.parentElement.children[0].src,
                   pro_name:e.target.parentElement.parentElement.children[1].children[0].textContent,
                   total_price:e.target.parentElement.parentElement.children[1].children[1].textContent,
                   catgory:    e.target.parentElement.parentElement.children[1].children[2].textContent,
                   quentity:1
                  };
          console.log(item)
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
                const iconShoppingP = document.querySelector('.iconShopping p');
                var cartdata = JSON.parse(localStorage.getItem('cart'))
                iconShoppingP.innerHTML = cartdata.length;
          }

      }) 
      $('.addTocompare').click(function (e) {
          let compare = [];
          var empid = $(this).attr('id');
          let item = {
                   pro_id:empid,
                   pro_img:e.target.parentElement.parentElement.children[0].src,
                   pro_name:e.target.parentElement.parentElement.children[1].children[0].textContent,
                   total_price:e.target.parentElement.parentElement.children[1].children[1].textContent,
                   catgory:    e.target.parentElement.parentElement.children[1].children[2].textContent,
                   quentity:1
                  };
          console.log(item)
          if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
            compare.push(item)
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/compare/addCompare',
                    data:  "comparedata="+JSON.stringify(compare) 
                })
                .done(function (response) {
                    console.log('hhaha');
                })
                .fail(function () {
                   console.log('dss');
                })      
          } else {
                 if(JSON.parse(localStorage.getItem('compare')) === null){
                     localStorage.setItem("compare",JSON.stringify(compare));
                  }else{
                     const localItems = JSON.parse(localStorage.getItem("compare"));
                     localItems.map(data=>{
                         if(item.pro_id == data.pro_id){
                             item.quentity = data.quentity + 1;
                             
                         }else{
                          compare.push(data);
                         }
                         localStorage.setItem("compare",JSON.stringify(compare));
                     });
                     compare.push(item);
                     localStorage.setItem('compare',JSON.stringify(compare));
                     var mx= JSON.parse(localStorage.getItem('compare'))
                     console.log('fds',mx)
                  }
                  compare = [];
                const iconShoppingP = document.querySelector('.iconShopping p');
                var comparedata = JSON.parse(localStorage.getItem('compare'))
                iconShoppingP.innerHTML = comparedata.length;
          }

      }) 
      $('.addTowish').click(function (e) {
          let cart = [];
          var empid = $(this).attr('id');
          let item = {
                   pro_id:empid,
                   pro_img:e.target.parentElement.parentElement.children[0].src,
                   pro_name:e.target.parentElement.parentElement.children[1].children[0].textContent,
                   total_price:e.target.parentElement.parentElement.children[1].children[1].textContent,
                   catgory:    e.target.parentElement.parentElement.children[1].children[2].textContent,
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
                const iconShoppingP = document.querySelector('.iconShopping p');
                var cartdata = JSON.parse(localStorage.getItem('wishlist'))
                iconShoppingP.innerHTML = cartdata.length;
          }

      }) 
    })
  }
    </script>
