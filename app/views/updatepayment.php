<?php
$rows=$data['payment'];
//print_r($rows);

foreach ($rows as $row)
{


?>
<div class="container mar">
    <div class="py-5 text-center">
    </div>
    <form id="msform" method="POST">
    <div style="margin-left:20%; margin-top:-9%;">
      <!-- fieldsets -->
      <fieldset class="col-md-8 order-md-1">
        <h2 class="fs-title"style="color:#836691; font-weight:bold;">update payment </h2>
        <div class="row container">


              <div class=" col-md-12 order-md-1 " style="margin-left:10px;"> 
            
                    <form class="needs-validation" novalidate method="POST">
                    <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>
        <input type="hidden" class="form-control" name="payment_id" id="payment_id"  value="<?php  echo $row->payment_id; ?>" required>
       
    


                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-7 mx-auto">
                        <input type="text" class="form-control" id="full_name" name="full_name" value="<?php  echo $row->full_name;?>" required>
                            
                        </div>
                      </div>

                      <div class="row align-items-center mx-auto py-3">
                        <div class="col-md-6 ">
                        <input type="text" class="form-control" id="bank_account" name="bank_account" value="<?php  echo $row->userbank_id;?>"required>
                        </div>
                        <div class="col-md-6 ">
                        <input type="date" class="form-control" id="Exp_date" name="Exp_date" value="<?php  echo $row->ex_date;?>" required>
                        </div>
                      </div>
    
                    
                      <div class="row mx-auto py-3">
                    <div class="  col-md-12 mx-auto ">
                    <button type="button" id="update" class="btadd mx-auto  col-12  m-2 bt btn-left" ><i class="fas fa-edit"></i>

update</button>
    </div>
                      </div>
                    
                    
                    </form></div>
    
 
    </div>    
    </fieldset>
            </div>
              </form>                 
    
         

        </div>
        <?php 

}
?>
<script>
   $("#update").click(function (e) {
    var user_id=$('#user_id').val();
  var full_name=$('#full_name').val();
    var Exp_date=$('#Exp_date').val();
    var bank_account=$('#bank_account').val();
    var payment_id=$('#payment_id').val();

  console.log(user_id);
  //console.log(address_id);
                console.log(user_id);
 
   $.ajax({

             async: false,
             type: "POST",
             global: false,
             url: "/ElectronicEcommerce/userprofiel/update_old_payment/",
             data: {user_id:user_id,payment_id:payment_id,full_name:full_name,bank_account:bank_account,Exp_date:Exp_date},
             success: function(response) {
    console.log("hhhh");
    window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/payment/');

alert("SecusseFull Add");
           
             
             },
             error:function(){
alert("Error Add");
            
             }
           })
           });

</script>

