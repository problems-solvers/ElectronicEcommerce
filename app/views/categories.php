<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Categories </h3>
</div>
<?php
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<div class="row container-flude" id="jar">
<div class="col-9 mx-auto ">
<div class="row">
<?php 
 $rows=$data['categories'];
 if(count($rows)){
     foreach ($rows as $row) { echo ' 

<div class="col-lg-3  col-md-4 col-sm-6 col-xm-12 my-2 mx-auto content">
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
    <!-- <div class="col-4  w-25 mx-auto  " > -->
  
<!-- <div class="row mx-auto my-4 show "  >
<div class="col-md-12 col-sm-12 col-xs-12 mx-auto ">
<img class="card-img-top" height="100%" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> 
 
       <button class="btn btn-sm px-3">SHOP NOW</button>
  </div>
  </div>
  <div class="row mx-auto my-4 show "  >
    <div class="col-md-12 col-sm-12 col-xs-12 mx-auto "> 
  <img class="card-img-top" height="100%" src="/ElectronicEcommerce/app/assets/images/4ad.png" alt="Card image cap"> 
   <button class="btn btn-sm px-3">SHOP NOW</button>
  </div> 
  </div> -->
<!-- </div> -->
</div>

  <ul style="color:#836691;" class="pagination justify-content-center pagination-sm">
  </ul>
  <style>
    .pagination{
      color:#836691;
    }
    .pagination li.active{
      background-color:#836691 !important;;
    }
   
    .page-link{
      color:#836691;
    }
    .pagination-sm .page-item:first-child .page-link {
   
    padding:5px;
}
.pagination-sm .page-link {
   
    line-height: 1.5;
}
    .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #836691;
    border-color: #836691;
}
  </style>
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