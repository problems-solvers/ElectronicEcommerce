
    <div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Your Addresses </h3>
</div>
<div class="  col-md-2 col-sm-12 col-xs-12 mx-auto ">
            <a href="http://localhost/ElectronicEcommerce/userprofiel/AddAddress/">
<button type="button " class="btadd mx-auto  m-2 bt btn-left" ><i class="fas fa-plus" ></i>
Add Address</button></a>
</div>   
<div class="row ">


<?php
$rows=$data['address'];
//print_r($rows);
if($rows>0)
{
foreach ($rows as $row)
{?> 
<div class="col-5 mx-auto">
  <div id="msform">
      <!-- fieldsets -->
    <fieldset  id="msform" class="order-md-1">
      <div class="row container" >
        <div class="order-md-1">           
          <!-- <div class=" col-md-2 order-md-1 "style="margin-top:-25%;margin-right:-50%;">       
           -->
           <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>
          <input type="hidden" class="form-control" name="address_id" id="address_id"  value="<?php  echo $row->address_id; ?>" required>
        
            <li class="submenu dropdown " style="list-style: none" >
              <a href="#" class=" dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  
               <i class="fa fa-ellipsis-v  " style="color:#836691 ;"></i>
              </a>
              <ul class="dropdown-menu" > 
                <li class="nav-item text-dark"> <a href='http://localhost/ElectronicEcommerce/userprofiel/updateAddress?action=update&id=<?php echo $row->address_id;?>' class="nav-link">update</a></li>
                <li class="nav-item text-dark"><a href="" id="del"  class="nav-link">delete</a></li> 
              </ul>
            </li>
        </div>  
      </div>
      <!-- </div> -->
     <div class=" col-md-12 order-md-1 " style="margin-left:10px;">             
       <table class="table text-left" >
<style>
    .table td, .table th {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    }
</style>
                      <tbody>
                          <tr>
                          <th scope="row" style="color:#836691;">Name : <?php echo $row->user_name; ?></th>
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
                      </tbody>
                      </table>

                  </div>
    
 
    </div>    
              </fieldset>
            </div>


        <?php }?></div>
        <?php } else { ?>
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
          
            $(document).delegate('#del', 'click', function(e){
  e.preventDefault();   
         
                var user_id=$('#user_id').val();
            var address_id=$('#address_id').val();
            swal({
                    title: "Are you sure?",
                    text: "Once clicking ok, you will not be able to cancel",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
 
          $.ajax({

             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/userprofiel/deladdress/",
             data: {user_id:user_id,address_id:address_id},
             success: function(response) {
             console.log("hhhh");
             //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');
             swal("Deleted successfuly", {
                        icon: "success",
                        });
           
             
            },
             error:function(){
                swal("Something Went wrong");
            
             }
        })
        } else {
                        swal("Canceled");
                    }
                    })
           });
         </script>