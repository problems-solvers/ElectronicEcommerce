<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style="margin-left:20%; margin-top:-9%;">
      <!-- fieldsets -->
      <fieldset class="col-md-8 order-md-1">
        <h2 class="fs-title" style="color:#836691; font-weight:bold;">add payment </h2>
        <div class="row container">


              <div class=" col-md-12 order-md-1 " style="margin-left:10px;"> 
            
                    <form class="needs-validation" novalidate method="POST">


                    <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>

                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-7 mx-auto">
                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="full name" required>
                            
                        </div>
                      </div>

                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                        <input type="text" class="form-control" id="bank_account" name="bank_account" placeholder="bank account"required>
                        </div>
                        <div class="col-md-6 ">
                        <input type="date" class="form-control" id="Exp_date" name="Exp_date" placeholder="Exp_date" required>
                        </div>
                      </div>
    
                    
                      <div class="row mx-auto py-3">
                    <div class="  col-md-4 col-sm-12 col-xs-12 mx-auto ">
        <button type="button" class="btadd mx-auto  m-2 bt "  id="add" ><i class="fas fa-plus"></i>

add</button>
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
  var full_name=$('#full_name').val();
    var Exp_date=$('#Exp_date').val();
    var bank_account=$('#bank_account').val();
    console.log(Exp_date);
   if(user_id==='' || full_name ==='' || Exp_date ===''){
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
             url: "/ElectronicEcommerce/userprofiel/Newpayment/",
             data: {user_id:user_id,full_name:full_name,bank_account:bank_account,Exp_date:Exp_date},
             success: function(response) {
    console.log("hhhh");
    window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/payment/');

// alert("SecusseFull Add");

             
    // Get the snackbar DIV
       var x = document.getElementById("snackbar")
      x.innerHTML='Added successfully'
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
