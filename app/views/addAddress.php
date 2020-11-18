<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style="margin-left:20%; margin-top:-9%;">
      <!-- fieldsets -->
      <fieldset class="col-md-8 order-md-1">
        <h2 class="fs-title" style="color:#836691; font-weight:bold;">add address </h2>
        <div class="row container">


              <div class=" col-md-12 order-md-1 " style="margin-left:10px;"> 
            
                    <form class="needs-validation" novalidate method="POST">

                    <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>


                      <div class="row align-items-center mx-auto py-3">
                       
                      </div>
                      <div class="col-md-6 mx-auto">
                          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="user name" value="" required>
                        </div>
                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                        <select class="custom-select d-block w-100" id="country" name="country" required>
                            <option value="0">country</option>
                            <option value="United">United States</option>
                          </select>
                           <!-- <input type="text" class="form-control" name="country" id="country" placeholder="country" value="" required> -->
                        </div>
                        <div class="col-md-6 ">
                        <select class="custom-select d-block w-100" id="city"  name="city"required>
                            <option value="">city</option>
                            <option value="California">California</option>
                          </select> 
                          <!-- <input type="text" class="form-control " name="city"  id="city" placeholder="city" required> -->
                        </div>
                      </div>
                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="street" id="street" placeholder="street" value="" required>
                        </div>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control " name="zip_id"  id="zip_id" placeholder="zip id" required>
                        </div>
                      </div>
    
                    
                      <div class="row mx-auto py-3">
                    <div class="  col-md-4 col-sm-12 col-xs-12 mx-auto ">
        <button type="button"  class="btadd mx-auto  m-2 bt " id="add" ><i class="fas fa-plus"></i>

Add</button>
    </div>
                      </div>
                    
                    
                    </form></div>
    
 
    </div>    
    </fieldset>
            </div>
              </form>                 
    
         

        </div>

<script>
 $("#add").click(function (e) {
  var user_id=$('#user_id').val();
  var user_name=$('#user_name').val();
  var country=$('#country').val();
    var city=$('#city').val();
    console.log(country,city)
    var street=$('#street').val();
    var zip_id=$('#zip_id').val();
    console.log(user_id);
    if(user_id==='' || user_name==='' || country ==='0' || city ==='' || street ===''  || zip_id ===''){
    var x = document.getElementById("snackbar")
      x.innerHTML='please fill empty fields '
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 

   }
   else{
   $.ajax({

             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/userprofiel/NewAddress/",
             data: {user_id:user_id,user_name:user_name,country:country,city:city,street:street,zip_id:zip_id},
             success: function(response) {
    console.log("hhhh");
    window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

    var x = document.getElementById("snackbar")
      x.innerHTML='successfully Added'
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 
           
             
             },
             error:function(){
              var x = document.getElementById("snackbar")
      x.innerHTML='something went wrong'
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 
            
             }
           })}
           });
</script>
