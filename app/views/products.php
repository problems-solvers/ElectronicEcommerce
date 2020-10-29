<script>

    function Delete(e) {
        let items = [];
        JSON.parse(localStorage.getItem('items')).map(data => {
            if (data.id != e.parentElement.parentElement.children[0].textContent) {

                items.push(data);

            }
        });
        localStorage.setItem('items', JSON.stringify(items));
        window.location.reload();
    };
</script>

<div class="main">

    <div class="itemsBox">
        <div class="item">
            <?php  $rows=$data['product'];
				foreach ($rows as $row) {?>
            <div class="item mx-2">

                <div class="card productCard mx-auto ">
                    <img class="card-img-top" src="../<?php echo $row->main_img; ?>" alt="Card image cap">
                    <div class="row productCardbtns mx-0">
                        <div class="mx-auto"> <a href="#"><i class="fas fa-heart"></i></a></div>
                        <div class="mx-auto"> <a href="#"><i class="fas fa-exchange-alt"></i></a></div>
                        <a href="#" title="add to cart" class="attToCart fas fa-shopping-cart"></a>
                    </div>
                    <div class="card-body py-1">
                        <h5 class="card-title">vdefe<?php echo $row->pro_name; ?></h5>
                        <span><?php echo $row->pro_price; ?></span>
                        <input type="hidden" value="<?php echo $row->pro_id; ?>">
                        <br>
                    </div>
                </div>
            </div>

            <?php
}  
    ?>

        </div>
    </div>
</div>



<div class="cartBox">
    <div class="cart">
        <h1></h1>
    </div>
</div>
<?php


        $id=$_REQUEST['users'];
        echo $id;


?>