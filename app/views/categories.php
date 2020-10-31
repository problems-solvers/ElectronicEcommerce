
<div class="form-group">
<?php 
    $s=$_SESSION['id'];
    echo $s;?>
  <label class="col-md-4 control-label" for="product_categorie"> CATEGORY PARENT</label>
  <div class="col-md-4">
  <select class="form-control" id="input-select" name='parent'>
  <option value='All'>All</option>
    <?php
    
    $rows=$data['categories'];
    foreach($rows['parents'] as $ro){
      echo "
                                                       
      <option value='$ro->cat_id'>$ro->cat_name</option>
      ";    }
    ?>
    </select>
  </div>
</div>
<div class="row w-75 mx-auto">
<?php  $rows=$data['featured'];
     foreach ($rows as $row) { echo ' 
<div class="col-3 my-2 mx-auto">

 <div class="card productCard mx-auto " >
  <img class="card-img-top" src="'.$row->main_img.'" alt="Card image cap">
  <div class="row productCardbtns mx-0">
  <a href="#" class="fas fa-heart addTowish mx-auto"></a>
 
  <a href="#" ><i class="fas fa-exchange-alt"></i></a>
  <a href="#" title="add to cart" id="'.$row->pro_id.'" class="attToCart fas fa-shopping-cart mx-auto"></a>
  </div>
  <div class="card-body py-1">
    <h5 class="card-title">'.$row->pro_name.'</h5>
    <span >'.$row->pro_price.'</span>
    <br>
    <span>'.$row->cat_name.'</span>
  </div>
 </div>
</div> ';}  
    ?>
    </div> 
    <script>
      
      window.onload = function(){
        //cart box
        const iconShopping = document.querySelector('.iconShopping');
        const cartBox = document.querySelector('.cartBox');
        iconShopping.addEventListener("click",function(){
            cartBox.classList.add('active');
        });
        $(document).ready(function() {
            console.log("empid")
            $('.attToCart').click(function (e) {
              let cart = [];
            var empid = $(this).attr('id');
            let item = {
                         pro_id:empid,
                         pro_img:e.target.parentElement.parentElement.children[0].src,
                         pro_name:e.target.parentElement.parentElement.children[2].children[0].textContent,
                         total_price:e.target.parentElement.parentElement.children[2].children[1].textContent,
                         catgory:    e.target.parentElement.parentElement.children[2].children[2].textContent,
                         quentity:1
                     };
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

            }) })}
    </script>


  

    