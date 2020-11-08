<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Categories </h3>
</div>
<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<div class="container" id="jar">
<div class="row w-75 mx-auto ">
<?php 
 $rows=$data['categories'];
 if(count($rows)){
     foreach ($rows as $row) { echo ' 

<div class="col-lg-4  col-md-5 col-sm-6 col-xm-12 my-2 mx-auto content">
<a href="http://localhost/ElectronicEcommerce/product/productdetale?action=view&pro_id='.$row->pro_id.'" style="color:#303030; height:100%; text-decoration:none;">
<div class="card productCard mx-auto " >
<img class="card-img-top" src="'.$row->main_img.'" alt="Card image cap">

<div class="card-body py-1">
  <h5 class="cardtitle">'.$row->pro_name.'</h5>
  <span style="float:right; color:#836691; font-weight:bold;">'.$row->pro_price.'$</span>

  <span>'.$row->cat_name.'</span>
</div>
<div class="row productCardbtns mx-0">
  <a  title="add to wishlist" id="'.$row->pro_id.'" class="mdi mdi-heart-outline addTowish mx-auto"></a>
  <a  title="add to compare" id="'.$row->pro_id.'" class="fas fa-exchange-alt addTocompare mx-auto" ></a>
  <a  title="add to cart" id="'.$row->pro_id.'" class="attToCart mdi  mdi-cart-outline mx-auto"></a>          
</div>
</div>
 </a>
</div> ';} }
else{
  //todo image to show no data
  echo '<img src="/ElectronicEcommerce/app/assets/images/no.jpg" class="img-rounded">
  <p class="text-center col-12 mb-5">no data available for this category</p>';
} 
    ?>
    </div>
</div>
<nav>
  <ul class="pagination justify-content-center pagination-sm">
  </ul>

</nav>
    <script>
      
    //   window.onload = function(){
    //     //cart box
    //     const iconShopping = document.querySelector('.iconShopping');
    //     const cartBox = document.querySelector('.cartBox');
    //     iconShopping.addEventListener("click",function(){
    //         cartBox.classList.add('active');
    //     });
    //     $(document).ready(function() {
    //         console.log("empid")
    //         $('.attToCart').click(function (e) {
    //           let cart = [];
    //         var empid = $(this).attr('id');
    //         let item = {
    //                      pro_id:empid,
    //                      pro_img:e.target.parentElement.parentElement.children[0].src,
    //                      pro_name:e.target.parentElement.parentElement.children[2].children[0].textContent,
    //                      total_price:e.target.parentElement.parentElement.children[2].children[1].textContent,
    //                      catgory:    e.target.parentElement.parentElement.children[2].children[2].textContent,
    //                      quentity:1
    //                  };
    // if (<?php // echo isset($_SESSION['id'])?'true':'false'; ?>) {
    //             cart.push(item)
    //             $.ajax({
    //                 type: 'POST',
    //                 url: 'http://localhost/ElectronicEcommerce/cart/addCart',
    //                 data:  "cartdata="+JSON.stringify(cart) 
    //                 })
    //                 .done(function (response) {
    //                     console.log('hhaha');
    //                 })
    //                 .fail(function () {
    //                    console.log('dss');
    //                 })   
            
    // } else {
      
    //              if(JSON.parse(localStorage.getItem('cart')) === null){
    //                  localStorage.setItem("cart",JSON.stringify(cart));
    //              }else{
    //                  const localItems = JSON.parse(localStorage.getItem("cart"));
    //                  localItems.map(data=>{
    //                      if(item.pro_id == data.pro_id){
    //                          item.quentity = data.quentity + 1;
                             
    //                      }else{
    //                          cart.push(data);
    //                      }
    //                      localStorage.setItem("cart",JSON.stringify(cart));
    //                  });
    //                  cart.push(item);
    //                  localStorage.setItem('cart',JSON.stringify(cart));
    //                  var mx= JSON.parse(localStorage.getItem('cart'))
    //                  console.log('fds',mx)
    //               }
    //             cart = [];
              
    //             const iconShoppingP = document.querySelector('.iconShopping p');
    //     var cartdata = JSON.parse(localStorage.getItem('cart'))
    //     iconShoppingP.innerHTML = cartdata.length;
    //           }

    //         }) })}
    </script>


  

    <script>
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
    const titles = document.getElementsByClassName('cardtitle')
  
    for(i=0;i<titles.length; i++ ){
     x= titles[i].innerText
     titles[i].innerText=text_truncate(x,16)
    }
$('#parent').change(function () {
                var id=$('#parent').val();
                console.log(id);
                $.ajax({
        type: 'POST',
        url: 'http://localhost/ElectronicEcommerce/categories/sub_cat',
        data: { id:id},
        success: function (data) {
          

        }
          
            }); 
            });
    </script>
    <script>
      // Returns an array of maxLength (or less) page numbers
// where a 0 in the returned array denotes a gap in the series.
// Parameters:
//   totalPages:     total number of pages
//   page:           current page
//   maxLength:      maximum size of returned array
function getPageList(totalPages, page, maxLength) {
  if (maxLength < 5) throw "maxLength must be at least 5";

  function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
  if (totalPages <= maxLength) {
    // no breaks in list
    return range(1, totalPages);
  }
  if (page <= maxLength - sideWidth - 1 - rightWidth) {
    // no break on left of page
    return range(1, maxLength - sideWidth - 1)
      .concat([0])
      .concat(range(totalPages - sideWidth + 1, totalPages));
  }
  if (page >= totalPages - sideWidth - 1 - rightWidth) {
    // no break on right of page
    return range(1, sideWidth)
      .concat([0])
      .concat(
        range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
      );
  }
  // Breaks on both sides
  return range(1, sideWidth)
    .concat([0])
    .concat(range(page - leftWidth, page + rightWidth))
    .concat([0])
    .concat(range(totalPages - sideWidth + 1, totalPages));
}

$(function() {
  // Number of items and limits the number of items per page
  var numberOfItems = $("#jar .content").length;
  var limitPerPage = 9;
  // Total pages rounded upwards
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  // Number of buttons at the top, not counting prev/next,
  // but including the dotted buttons.
  // Must be at least 5:
  var paginationSize = 7;
  var currentPage;

  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;
    currentPage = whichPage;
    $("#jar .content")
      .hide()
      .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
      .show();
    // Replace the navigation items (not prev/next):
    $(".pagination li").slice(1, -1).remove();
    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>")
        .addClass(
          "page-item " +
            (item ? "current-page " : "") +
            (item === currentPage ? "active " : "")
        )
        .append(
          $("<a>")
            .addClass("page-link")
            .attr({
              href: "javascript:void(0)"
            })
            .text(item || "...")
        )
        .insertBefore("#next-page");
    });
    return true;
  }

  // Include the prev/next buttons:
  $(".pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Next")
    )
  );
  // Show the page links
  $("#jar").show();
  showPage(1);

  // Use event delegation, as these items are recreated later
  $(
    document
  ).on("click", ".pagination li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
  });
  $("#next-page").on("click", function() {
    return showPage(currentPage + 1);
  });

  $("#previous-page").on("click", function() {
    return showPage(currentPage - 1);
  });
  $(".pagination").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
  });
});

    </script>