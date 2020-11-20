<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">

            <h2 class="pageheader-title">E-commerce Reports</h2>

            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                        <li class="breadcrumb-item " aria-current="page"> Reports </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="tab"><button class="tablinks active" onclick="exchange(event,'home')">Most Customer</button>
                <button class="tablinks" onclick="exchange(event,'menu1')">Less Customer</button></div>


            <div class="tab-content">
                <div id="home" class="tabcontent">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="card box-shad">
                            <div class="card-header ">
                                <h5 class="mb-0  d-inline-block">Most Ordered Customer  </h5>

                            </div>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">First Name</th>
                                                <th class="border-0">Last Name</th>
                                                <th class="border-0">User  Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $order=$data['user'];
                                        //print_r($order);
                                          $index=0;
                                        foreach($order as $val)
                                        {
                                        
 
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $val->first_name; ?> </td>
    <td> <?php echo $val->last_name; ?> </td>
    <td><?php echo $val->user_email; ?></td>
    
          

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
            </div>

        </div>
        <div id="menu1" class="tabcontent">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="card box-shad">
                    <div class="card-header ">
                        <h5 class="mb-0  d-inline-block">Less Ordered Customer  </h5>
                    </div>
                            <div class="card-body p-0 text-center">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">First Name</th>
                                                <th class="border-0">Last Name</th>
                                                <th class="border-0">User  Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $order=$data['less_user'];
                                        //print_r($order);
                                          $index=0;
                                        foreach($order as $val)
                                        {
                                        
 
    $index=$index+1; ?>
                                   <tr>      <td> <?php echo $index; ?> </td>
    <td> <?php echo $val->first_name; ?> </td>
    <td> <?php echo $val->last_name; ?> </td>
    <td><?php echo $val->user_email; ?></td>
    
          

                                            </tr>
                                            
                                           
                                         
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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