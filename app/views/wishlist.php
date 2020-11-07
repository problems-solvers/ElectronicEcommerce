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
              tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
          });}
        }
        else{
          if(JSON.parse(localStorage.getItem('wishlist')).length ===0){
            tableData ='<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="mx-3 img-rounded"><p class="text-center col-12 mb-5">no data available for this category</p>';
          }else{
            JSON.parse(localStorage.getItem('wishlist')).map(data=>{
           tableData +='<div class="card  mx-auto my-3  px-2 py-2" style=" border:1px solid #5F3870;  border-radius:10px;"><div class="d-flex align-content-middle"><div   class=" px-0 align-items-center " style="height:150px; width:150px;"><img style="height:150px; width:150px;"  src="'+data.pro_img+'" alt="Card image cap"></div><div class="card-body py-1  m-auto  mx-auto"><h5 class="card-title">'+data.pro_name+'</h5><span style="font-weight:bold; color:#5F3870;">'+data.total_price+'$</span><br><div class="py-2   align-content-end"><a   class="my-3 py-2"><i class="fas fa-heart " style="color:#5F3870;" ></i><span  class="mx-2">add to wishlist</span> </a></div></div><div class="col-3" ><div   style=" position:absolute; top:0px; right:5px ;font-size:20px; "> <a    class="deletefromCart" id="'+data.cart_id+'" pro_id="'+data.pro_id+'" ><i class="fas fa-times " ></i></a></div><br><br><br><div class="row my-2" style=" position:absolute;  right:20px ; color:#5F3870; font-size:20px; bottom:0px; "> <div class=" mx-2">  <a   class="decreseqty" id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-minus-circle " ></i></a></div> <div class="mx-2"> <p>' +data.quentity+'</p></div>  <div class="mx-2">  <a  class="addqty"  id="'+data.cart_id+'" pro_id="'+data.pro_id+'"><i class="fas fa-plus-circle " ></i></a></div>    </div></div></div></div>';
            });
          }
        }
        cardBoxTable.innerHTML = tableData;
          }
      window.onload = function(){
          
          loadData();
      
        $(document).ready(function() {$(document).delegate('.deletefromCart', 'click', function()
{
            var cart_id = $(this).attr('id');
            var pro_id =  $(this).attr('pro_id');
            console.log(pro_id)
              if (<?php echo isset($_SESSION['id'])?'true':'false'; ?>) {
                <?php
                  $x= json_encode($data); 
                 ?>
                console.log('hi')
                var wishlistdata = <?php echo $x; ?>;
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
 
});

           
            
            
          })
         

}
        
</script>