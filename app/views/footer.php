


<footer id="footer" class="footer">
  <div class="container-fload">

    <div class="row mainfooter py-2 align-items-center">
      <div class="col-sm-2 mx-auto ">
          
          <ul class="list-unstyled mx-auto text-light align-items-center  my-0">
            <li><a href="http://localhost/ElectronicEcommerce/home/">Home</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/categories/">Categories</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/offers/">Offers</a></li>
          </ul>
      </div>
      <div class="col-sm-2 mx-auto">
        <div class="mx-auto">
         <img src="/ElectronicEcommerce/app/assets/images/login_store_logos-2.png"   style="width:170px; height:50px;" class="mx-auto d-block ">
         </div>
         <div class="mx-auto my-2 text-center">
             <a href="#" class="mx-1" title="Facebook"><i class="fab fa-facebook-f"></i></a>
             <a href="#" class="mx-1" title="twitter"><i class="fab fa-twitter"></i></a>
             <a href="#" class="mx-1" title="instagram"><i class="fab fa-instagram"></i></a>
         </div>  		
	  	</div>
      <div class="col-sm-2 mx-auto">
            <ul class="list-unstyled float-left  my-0">
            <li><a href="http://localhost/ElectronicEcommerce/whoare/">Who we are</a></li>
            <li><a href="#">Privacy and Policy</a></li>
            <li><a href="http://localhost/ElectronicEcommerce/connect/">Contact us</a></li>
            </ul>
      </div>
    	
</div>
	<div class="row copyright">
		<div class="col-md-12 copy">
			<p class="text-center copyright py-2 my-0">&copy; Copyright 2020 - Electronic ecommerce Site.  All rights reserved.</p>
		</div>
  </div>
</footer>
</div>

 


</header>

<script src="/ElectronicEcommerce/app/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdn.amcapi.com/translation/1.2.6/cloudtranslation.min.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>



    <!-- jQuery easing plugin -->
    <script src="/ElectronicEcommerce/app/assets/libs/js/jquery.easing.min.js"></script>
<script src="/ElectronicEcommerce/app/assets/libs/js/CustomerScript.js"></script>

<script>

       $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ElectronicEcommerce/home/getCategories',
                   
                    })
                    .done(function (response) {
                      var x=JSON.parse(response);
                      var m='<li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories" id="parent">All Categories</a></li>';
                      x.forEach(element => {
                      
                        
                        m+= '<li class="nav-item"><a class="nav-link" href="http://localhost/ElectronicEcommerce/categories/show?action=get&cat_id='+element.cat_id+'">'+element.cat_name+'</a></li>';
                      });
                      const a = document.querySelector('#allCategories');
                    a.innerHTML = m;
                  //  s=  ('#allCategories').val()

                    })
                    .fail(function () {
                     
                    })   


     
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

</body>
</html>