<div class="row container col-md-2 col-sm-12 col-xm-12"> 
            <div class=" mx-auto ">
            <a href="http://localhost/ElectronicEcommerce/userprofiel/AddAddress/">
<button type="button " class="btadd mx-auto  m-2 bt btn-left" ><i class="fas fa-plus" ></i>
Add Address</button></a>
</div>       
    </div>
<?php
$rows=$data['address'];
//print_r($rows);
if($rows>0)
{
    echo '  <div class="row container col-12 " style=" margin-top:2%;margin-bottom:1%;"> 
            <div class="col-md-8  mx-auto text-center">
            <h2 class="fs-title text-center" style="color:#836691; font-weight:bold;">show your address </h2>
            </div>
            </div> ';
foreach ($rows as $row)
{?> 
        <div class="container mar">
      
           
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style="margin-left:27%; margin-top:-13%;">
      <!-- fieldsets -->
      <fieldset class="col-md-6 order-md-1">
        <div class="row container" style="margin-left:10%;">
        <div class=" col-md-10 order-md-1 ">  </div>           
        <div class=" col-md-2 order-md-1 "style="margin-top:-25%;margin-right:-50%;">       
        <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>
        <input type="hidden" class="form-control" name="address_id" id="address_id"  value="<?php  echo $row->address_id; ?>" required>
         
        <li class="nav-item submenu dropdown ">
<span class="badge badge-light"> </span>
   <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  
             <i class="fa fa-ellipsis-v  " style="color:#836691 ;"></i></a>
<ul class="dropdown-menu" > 
<li class="nav-item text-dark"> <a href='http://localhost/ElectronicEcommerce/userprofiel/updateAddress?action=update&id=<?php echo $row->address_id;?>' class="nav-link">update</a></li>
<li class="nav-item text-dark"><a href="" class="nav-link " id="del" >delete</a></li> 
</ul>
</li>
</div>
</div>
       
              <div class=" col-md-12 order-md-1 " style="margin-left:10px;">             
            <table class="table text-left" >

                      <tbody>
                          <tr>
                          <th scope="row" style="color:#836691;">Name : <?php echo$_SESSION['user_name'];  ?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">Country :<?php echo $row->country;  ?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">City : <?php echo $row->city;  ?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">Street : <?php echo $row->street;  ?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">Zip-id :<?php echo $row->zip_id;  ?></th>
                          <td></td>
                          </tr>
                          <th scope="row"></th>
                          <td></td>
                          </tr>
                      </tbody>
                      </table>

                  </div>
    
 
    </div>    
              </fieldset>
            </div>

              </form>                 
    


        </div>
        <?php 
    }} else { ?>
    <div class="row container col-2"> 
            <div class=" mx-auto col-md-2 col-sm-12 col-xm-12">
            <a href="http://localhost/ElectronicEcommerce/userprofiel/AddAddress/">
<button type="button " class="btadd mx-auto  m-2 bt btn-left" ><i class="fas fa-plus" ></i>
Add Address</button>
</a>
</div>       
    </div>
    <div class="container col-12 text-center">

    <h1> You Don't Have Any  Address ! <h1>
    <h3> Plese Add Address</h3>
    <img src="/ElectronicEcommerce/app/assets/images/no.jpg">
    </div>
    <?php } ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
          /*  function myFunction() {
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                        });
                    } else {
                        swal("Your imaginary file is safe!");
                    }
                    });
            }*/
          
            $("#del").click(function (e) {
                var user_id=$('#user_id').val();
            var address_id=$('#address_id').val();
  
  console.log("user_id=");
  console.log(user_id);
  console.log(address_id);
                console.log(user_id);
 
   $.ajax({

             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/userprofiel/deladdress/",
             data: {user_id:user_id,address_id:address_id},
             success: function(response) {
    console.log("hhhh");
    //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

alert("SecusseFull Delete");
           
             
             },
             error:function(){
alert("Error Add");
            
             }
           })
           });
         </script>