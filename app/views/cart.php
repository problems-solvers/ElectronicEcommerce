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
<div class="col-12 my-3 ">


	<div class="cartBox">
		<div class="cart">
			<h1>Cart</h1>
            <div class="table-responsive">
			<table id="example" class="table table-striped table-bordered second" style="width:100%"></table>
		</div>
	</div>
	</div>
	</div>


	<!-- script -->
	<script>
    
    window.onload = function(){
    //cart box
	const iconShopping = document.querySelector('.iconShopping');
	const cartBox = document.querySelector('.cartBox');
	iconShopping.addEventListener("click",function(){
		cartBox.classList.add('active');
	});
	


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
	tableData += '<tr><th class="th-sm">no</th><th class="th-sm">Image</th><th class="th-sm">Item Name</th><th class="th-sm">Quentity</th><th class="th-sm">item Price</th><th class="th-sm"></th></tr>';
	if(JSON.parse(localStorage.getItem('items'))[0] === null){
		tableData += '<tr><td colspan="5">No items found</td></tr>'
	}else{
		JSON.parse(localStorage.getItem('items')).map(data=>{
			tableData += '<tr><th>'+data.id+'</th><th> <img scr="'+data.img+'"></th><th>'+data.name+'</th><th>'+data.no+'</th><th>'+data.price+'</th><th><a href="#" onclick=Delete(this);>Delete</a></th></tr>';
		});
	}
	cardBoxTable.innerHTML = tableData;
}
    
    </script>
</body>
</html>