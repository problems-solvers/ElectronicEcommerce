<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"/> -->
	<title>
		shopping cart with javascript using local storage -- fullyworld web tutorials
	</title>
	<link rel="stylesheet" href="index.css"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<script>
		
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
	</script>
</head>
<body>
	<div class="main">
		<header id="header" class="header">
			<div class="iconShopping">
				<p>0</p>
				<i class="fa fa-shopping-cart"></i>
			</div>
		</header>
		<div class="itemsBox">
			<div class="item">
            <?php  $rows=$data['featured'];
     foreach ($rows as $row) {
         ?>
				<img src="../../<?php  echo $row->main_img?>" />
				<div class="itemInfo">
					<h1><?php  echo $row->pro_name?></h1>
					<p>$<span><?php  echo $row->pro_price?></span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
            </div>
            <?php 
     }
     ?>
			
			
		</div>
	</div>
	<div class="cartBox">
		<div class="cart">
			<i class="fa fa-close"></i>
			<h1>Cart</h1>
			<table></table>
		</div>
	</div>


	<!-- script -->
	<script>
    
    window.onload = function(){
    //cart box
	const iconShopping = document.querySelector('.iconShopping');
	const cartCloseBtn = document.querySelector('.fa-close');
	const cartBox = document.querySelector('.cartBox');
	iconShopping.addEventListener("click",function(){
		cartBox.classList.add('active');
	});
	cartCloseBtn.addEventListener("click",function(){
		cartBox.classList.remove('active');
	});


	// adding data to localstorage
	const attToCartBtn = document.getElementsByClassName('attToCart');
	let items = [];
	for(let i=0; i<attToCartBtn.length; i++){
		attToCartBtn[i].addEventListener("click",function(e){
			if(typeof(Storage) !== 'undefined'){
				let item = {
						id:i+1,
						name:e.target.parentElement.children[0].textContent,
						price:e.target.parentElement.children[1].children[0].textContent,
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
	const cardBoxTable = cartBox.querySelector('table');
	let tableData = '';
	tableData += '<tr><th>S no.</th><th>Item Name</th><th>Item No</th><th>item Price</th><th></th></tr>';
	if(JSON.parse(localStorage.getItem('items'))[0] === null){
		tableData += '<tr><td colspan="5">No items found</td></tr>'
	}else{
		JSON.parse(localStorage.getItem('items')).map(data=>{
			tableData += '<tr><th>'+data.id+'</th><th>'+data.name+'</th><th>'+data.no+'</th><th>'+data.price+'</th><th><a href="#" onclick=Delete(this);>Delete</a></th></tr>';
		});
	}
	cardBoxTable.innerHTML = tableData;
}
    
    </script>
</body>
</html>