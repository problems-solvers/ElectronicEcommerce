
    window.onload = function(){
        console.log("outsede");         
        let x=JSON.parse(localStorage.getItem("items"));
        console.log("heloo from vrijiohwfhbckuwfbwjufgjwugycj");         
        console.log(x);  
        json_encode (x) ;
        //cart box
        const iconShopping = document.querySelector('.iconShopping');
        const cartBox = document.querySelector('.cartBox');
        iconShopping.addEventListener("click",function(){
            cartBox.classList.add('active');
        });
        <?
        $count = 5;
        
        echo "document.write(count);";
        
        ?> 
    
    
        // adding data to localstorage
        const attToCartBtn = document.getElementsByClassName('attToCart');
        let items = [];
        for(let i=0; i<attToCartBtn.length; i++){
            attToCartBtn[i].addEventListener("click",function(e){
                if(typeof(Storage) !== 'undefined'){
                    let item = {
                            id:i+1,
                            name:e.target.parentElement.parentElement.children[2].textContent,
                            price:e.target.parentElement.parentElement.children[2].children[0].textContent,
                            proID:e.target.parentElement.parentElement.children[2].children[2].value,
                            no:1
                        };
                    if(JSON.parse(localStorage.getItem('items')) === null){
                        items.push(item);
                        localStorage.setItem("items",JSON.stringify(items));
                        window.location.reload();
                    }else{
                        const localItems = JSON.parse(localStorage.getItem("items"));
                        localItems.map(data=>{
                            if(item.id == data.id){
                                item.no = data.no + 1;
                            }else{
                                items.push(data);
                            }
                        });
                        items.push(item);
                        localStorage.setItem('items',JSON.stringify(items));
                        window.location.reload();
                    }
                }else{
                    alert('local storage is not working on your browser');
                }
                document.location="http://localhost/ElectronicEcommerce/cart/?Screen="+x;

            });
        }
        // adding data to shopping cart 
            //this code is to view number of product in cart
    
        const iconShoppingP = document.querySelector('.iconShopping p');
        let no = 0;
        JSON.parse(localStorage.getItem('items')).map(data=>{
            no = no+data.no;	});
        iconShoppingP.innerHTML = no;
    
    
        //adding cartbox data in table
        //show item in cart
        const cardBoxTable = cartBox.querySelector('.show');
        let tableData = '';
        if(JSON.parse(localStorage.getItem('items'))[0] === null){
        }else{
            JSON.parse(localStorage.getItem('items')).map(data=>{
           
                tableData +='<div class="card  mx-auto" style="width:700px; height:200px;"><div class="d-flex align-content-middle"><div class="col-6 px-0 align-items-center "><img style="height:100%; width:200px;" src="http://placehold.it/64x64" alt="Card image cap"></div><div class="card-body col-4 py-1 m-auto mx-auto"><h5 class="card-title">'+data.name+'</h5><span >'+data.price+'</span><br></div><div class="col-2 m-auto productCardbtnsV  align-content-middle align-middle" ><div class=" col-lg-12  close-btn" stayl=" padding:40px "> <a href="#" onclick=Delete(this);>X</a></div><br><br><br><div class="row my-2"> <div class=" mx-auto">  <a href="#"  title="Facebook"><i class="fas fa-minus"></i></a></div> <div class="mx-auto"> <p>' +data.no+'</p></div>  <div class="mx-auto">  <a href="#"  title="instagram"><i class="fas fa-plus"></i></a></div>    </div></div></div></div>';
            });
        }
        cardBoxTable.innerHTML = tableData;
              
        
          
        //delete from cart
        function Delete(e){
			let items = [];
			JSON.parse(localStorage.getItem('items')).map(data=>{
				if(data.id != e.parentElement.parentElement.children[0].textContent){
					
					items.push(data);

				}
            });
            
                     
             
           
			localStorage.setItem('items',JSON.stringify(items));
			window.location.reload();
        };
          
            