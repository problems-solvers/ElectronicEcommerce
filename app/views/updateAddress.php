<?php
$rows=$data['address'];
//print_r($rows);

foreach ($rows as $row)
{?> 

<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style="margin-left:20%; margin-top:-9%;">
      <!-- fieldsets -->
      <fieldset class="col-md-8 order-md-1">
        <h2 class="fs-title" style="color:#836691; font-weight:bold;">Update address </h2>
        <div class="row container">


              <div class=" col-md-12 order-md-1 " style="margin-left:10px;"> 
            
                    <form class="needs-validation" novalidate method="POST">
                    <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>
        <input type="hidden" class="form-control" name="address_id" id="address_id"  value="<?php  echo $row->address_id; ?>" required>
         


                    <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="country" id="country"  value="<?php echo $row->country; ?>" required>
                        </div>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control " name="city"  id="city" value="<?php echo $row->city; ?>"  required>
                        </div>
                      </div>
                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="street" id="street"  value="<?php echo $row->street; ?>" required>
                        </div>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control " name="zip_id"  id="zip_id" value="<?php echo $row->zip_id; ?>" required>
                        </div>
                      </div>
    
                    
                      <div class="row mx-auto py-3">
                    <div class="  col-12 mx-auto ">
        <button type="button" id="update" class="btadd mx-auto col-12  m-2 bt " ><i class="fas fa-edit"></i>

Update</button>
    </div>
                      </div>
                    
                    
                    </form></div>
    
 
    </div>    
              </fieldset>
            </div>
              </form>

                </form>
            </div>
        </div>
    </div>

                      
    
         

        </div>

<?php
}
?>
<script>
          $("#update").click(function (e) {
                var user_id=$('#user_id').val();
            var address_id=$('#address_id').val();
            var user_id=$('#user_id').val();
  var country=$('#country').val();
    var city=$('#city').val();
    var street=$('#street').val();
    var zip_id=$('#zip_id').val();
  console.log("user_id=");
  console.log(user_id);
  console.log(address_id);
                console.log(user_id);
 
   $.ajax({

             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/userprofiel/update_old_address/",
             data: {user_id:user_id,address_id:address_id,country:country,city:city,street:street,zip_id:zip_id},
             success: function(response) {
    console.log("hhhh");
    window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

alert("SecusseFull Add");
           
             
             },
             error:function(){
alert("Error Add");
            
             }
           })
           });
         </script>
