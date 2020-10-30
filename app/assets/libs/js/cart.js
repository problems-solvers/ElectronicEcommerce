
    window.onload = function(){
        //cart box
        const iconShopping = document.querySelector('.iconShopping');
        const cartBox = document.querySelector('.cartBox');
        iconShopping.addEventListener("click",function(){
            cartBox.classList.add('active');
        });
      
        $(document).ready(function() {
            let cart = [];
            console.log("empid")
            $('.attToCart').click(function (e) {
            console.log("empid")
            var empid = $(this).attr('id');
            if(typeof(Storage) !== 'undefined'){
                 let item = {
                         id:empid,
                         name:e.target.parentElement.parentElement.children[2].textContent,
                         price:e.target.parentElement.parentElement.children[2].children[0].textContent,
                         proID:e.target.parentElement.parentElement.children[2].children[2].value,
                         no:1
                     };
                 if(JSON.parse(localStorage.getItem('cart')) === null){
                     cart.push(item);
                     localStorage.setItem("cart",JSON.stringify(cart));
                   
                   //  window.location.reload();
                 }else{
                     const localItems = JSON.parse(localStorage.getItem("cart"));
                     localItems.map(data=>{
                         if(item.id == data.id){
                             item.no = data.no + 1;
                             
                         }else{
                             cart.push(data);
                         }
                         localStorage.setItem("cart",JSON.stringify(cart));
                       
                     });
                     cart.push(item);
                     localStorage.setItem('cart',JSON.stringify(cart));
                     var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log('fds',mx)
                              //  window.location.reload();
                }
                cart = [];
                var mx= JSON.parse(localStorage.getItem('cart'))
                     console.log('fds',mx)
                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/ecomm/cart/addCart',
                    data:  mx
                    })
                    .done(function (response) {
                        console.log('hhaha');
                    })
                    .fail(function () {
                       console.log('dss');
                    })
            }else{
                        alert('local storage is not working on your browser');
                    }
            })
            var mx= JSON.parse(localStorage.getItem('cart'))
           // localStorage.removeItem('cart')
              console.log('fds',mx)
        }); 
    
        // adding data to localstorage
        const attToCartBtn = document.getElementsByClassName('attToCart');
       // let cart = [];
        // for(let i=0; i<attToCartBtn.length; i++){
        //     console.log(attToCartBtn.length)
        //     attToCartBtn[i].addEventListener("click",function(e){
        //         if(typeof(Storage) !== 'undefined'){
        //             let item = {
        //                     id:i+1,
        //                     name:e.target.parentElement.parentElement.children[2].textContent,
        //                     price:e.target.parentElement.parentElement.children[2].children[0].textContent,
        //                     proID:e.target.parentElement.parentElement.children[2].children[2].value,
        //                     no:1
        //                 };
        //             if(JSON.parse(localStorage.getItem('cart')) === null){
        //                 cart.push(item);
        //                 localStorage.setItem("cart",JSON.stringify(cart));
                      
        //               //  window.location.reload();
        //             }else{
        //                 const localItems = JSON.parse(localStorage.getItem("cart"));
        //                 localItems.map(data=>{
        //                     if(item.id == data.id){
        //                         item.no = data.no + 1;
                                
        //                     }else{
        //                         cart.push(data);
        //                     }
        //                     localStorage.setItem("cart",JSON.stringify(cart));
        //                     var mx= JSON.parse(localStorage.getItem('cart'))
        //                     console.log('fds')
        //                 });
        //                 cart.push(item);
        //                 localStorage.setItem('cart',JSON.stringify(cart));
        //               //  window.location.reload();
        //             }
                   
        //         }else{
        //             alert('local storage is not working on your browser');
        //         }
                
        //     });
        //     var mx= JSON.parse(localStorage.getItem('cart'))
        //     console.log('fds',mx)
        //     return
        // }
        // adding data to shopping cart 
            //this code is to view number of product in cart
    
        const iconShoppingP = document.querySelector('.iconShopping p');
        let no = 0;
        JSON.parse(localStorage.getItem('cart')).map(data=>{
            no = no+data.no;	});
        iconShoppingP.innerHTML = no;
    
    
        //adding cartbox data in table
        //show item in cart
        const cardBoxTable = cartBox.querySelector('.show');
        let tableData = '';
        if(JSON.parse(localStorage.getItem('cart'))[0] === null){
        }else{
            JSON.parse(localStorage.getItem('cart')).map(data=>{
           
                tableData +='<div class="card  mx-auto" style="width:700px; height:200px;"><div class="d-flex align-content-middle"><div class="col-6 px-0 align-items-center "><img style="height:100%; width:200px;" src="http://placehold.it/64x64" alt="Card image cap"></div><div class="card-body col-4 py-1 m-auto mx-auto"><h5 class="card-title">'+data.name+'</h5><span >'+data.price+'</span><br></div><div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" ><div class=" col-lg-12  close-btn" stayl=" padding:40px "> <a href="#" onclick=Delete(this);>X</a></div><br><br><br><div class="row my-2"> <div class=" mx-auto">  <a href="#"  title="Facebook"><i class="fas fa-minus" onclick=minus(this);></i></a></div> <div class="mx-auto"> <p>' +data.no+'</p></div>  <div class="mx-auto">  <a href="#"  title="instagram"><i class="fas fa-plus" onclick=plus(this);></i></a></div>    </div></div></div></div>';
            });
        }
        cardBoxTable.innerHTML = tableData;
              
        
       

     
    }
        