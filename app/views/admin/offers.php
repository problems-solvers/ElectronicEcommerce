<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">

            <h2 class="pageheader-title">E-commerce Offers</h2>
            <a href="/ElectronicEcommerce/admin/admin_offers/addOffer"><button type="button"
                    class="btn btn-outline-light float-right  btn-color">Add
                            Offers</button></a>
    
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item " aria-current="page">Offers </li>
                    </ol>
                </nav>
            
            </div>
        </div>

        <div class="container">
            <div class="tab"><button class="tablinks active" onclick="exchange(event,'home')">Discount</button>
                <button class="tablinks" onclick="exchange(event,'menu1')">Extra Item</button>
                <button class="tablinks" onclick="exchange(event,'menu2')">Giff Item</button>
            </div>



            <div id="home" class="tabcontent">


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header ">
                            <h5 class="mb-0  d-inline-block">Dicount Table</h5>

                        </div>
                        <div class="card-body ">
                            <div class="table-responsive col-12 w-100">
                                <table id="example" class="table table-striped table-bordered second"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">#
                                            </th>
                                            <th class="th-sm">Product Name
                                            </th>
                                            <th class="th-sm">Extra Item
                                            </th>

                                            <th class="th-sm"> Qunetity
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
  $index=1;  
  $rows=$data['extra'];
  $pro=$data['product'];
  $name='';
  //print_r( $pro);
  foreach($rows as $ro){
foreach($pro as $product){
    if($product->pro_id == $ro->extra_item_id)
    {
        $name=$product->pro_name;
        //echo $name;
       // print_r($pro);
}

}  
//echo $name;
  echo "
  <tr>
  <td>$index</td>                                       
  <td>$ro->pro_name</td>
  <td>$name</td>
  <td>$ro->qunetity </td>
  </tr> ";  
  $index+=1; 
  
  
  
  }
  
  
  
  ?>
                                    </tbody>

                                </table>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div id="menu1" class="tabcontent">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="mb-0  d-inline-block">Extra Item Table</h5>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive col-12 w-100">
                                    <table id="example" class="table table-striped table-bordered second"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="th-sm">#
                                                </th>
                                                <th class="th-sm">Product Name
                                                </th>
                                                <th class="th-sm">Description
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
  $index=1;  
  $rows=$data['giff'];
  
  foreach($rows as $ro){
  
  echo "
  <tr>
  <td>$index</td>                                       
  <td>$ro->pro_name </td>
  <td>$ro->description</td>
  </tr> ";  
  $index+=1; 
  
  }
  
  
  
  ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>


            </div>

            <div id="menu2" class="tabcontent">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="card-header ">
                            <h5 class="mb-0  d-inline-block"> Giff Table</h5>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive col-12 w-100">
                                <table id="example" class="table table-striped table-bordered second"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="th-sm">#
                                            </th>
                                            <th class="th-sm">Product Name
                                            </th>
                                            <th class="th-sm">Description
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
             $index=1;  
             $rows=$data['giff'];
             
             foreach($rows as $ro){
             
             echo "
             <tr>
             <td>$index</td>                                       
             <td>$ro->pro_name </td>
             <td>$ro->description</td>
             </tr> ";  
             $index+=1; 
             
             }
             
             
             
             ?>

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <script>

            function exchange(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                navlinks = document.getElementsByClassName("nav-link");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("active", "");
                    navlinks[i].className = navlinks[i].className.replace("active", "");
                    console.log(navlinks[i]);
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += "active";
            }
            $(document).ready(function () {
                /*$(".nav-tabs a").click(function(){
                  $(this).tab('active');
                  $(this).tab('show');
                });*/

                var show = document.getElementById("home");
                document.getElementById("home").style.display = "block";

                $("#del").click(function (e) {

                    var cat_id = $('#cat_id').val();
                    console.log(cat_id);



                    $.ajax({

                        async: false,
                        type: "POST",
                        global: false,
                        url: "/ElectronicEcommerce/admin/admin_cat/delcat/",
                        data: { cat_id: cat_id },
                        success: function (response) {

                            //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

                            alert("SecusseFull Delete");


                        },
                        error: function () {
                            alert("Error Delete");

                        }
                    })
                });
                $("#del_tag").click(function (e) {

                    var tag_id = $('#tag_id').val();
                    console.log(cat_id);



                    $.ajax({

                        async: false,
                        type: "POST",
                        global: false,
                        url: "/ElectronicEcommerce/admin/admin_cat/deltag/",
                        data: { tag_id: tag_id },
                        success: function (response) {

                            //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

                            alert("SecusseFull Delete");


                        },
                        error: function () {
                            alert("Error Delete");

                        }
                    })
                });

            });
        </script>