<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light" >
  <h3 class="titel">Your Payment Accounts </h3>
</div>
<div class="  col-md-2 col-sm-12 col-xs-12 mx-auto ">
            <a href="http://localhost/ElectronicEcommerce/userprofiel/addPayment/">
<button type="button " class="btadd mx-auto  m-2 bt btn-left" ><i class="fas fa-plus" ></i>
Add Payment</button></a>
</div>
<div class="row ">
<?php
$rows=$data['payment'];
//print_r($rows);
$coun=count($rows);
$index=0;
if($coun>0){
foreach ($rows as $row)
{?> 
    <div class="col-5 mx-auto">
   
    <div id="msform" method="POST">
  <!-- fieldsets -->
      <fieldset class="order-md-1">
     <div class="row container">
      <div class="order-md-1 "> 
        <input type="hidden" class="form-control" name="user_id" id="user_id"  value="<?php  echo $_SESSION['id']; ?>" required>
        <input type="hidden" class="form-control" name="payment_id" id="payment_id"  value="<?php  echo $row->payment_id; ?>" required>
           
        <li class="nav-item submenu dropdown "  style="list-style: none" >
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  
             <i class="fa fa-ellipsis-v mx-1 " style="color:#836691 ;"></i>
            </a>
            <ul class="dropdown-menu" > 
                <li class="nav-item text-dark"> <a href='http://localhost/ElectronicEcommerce/userprofiel/updatepayment?action=update&id=<?php echo $row->payment_id;?>' class="nav-link">update</a></li>
                <li class="nav-item text-dark"><a class="nav-link"  id="del" >delete</a></li> 
            </ul>
        </li>
      </div>
     </div>
     <style>
    .table td, .table th {
    border-bottom: 1px solid #dee2e6;
    border-top: none;
    }
</style>       
              <div class=" col-md-12 order-md-1 " style="margin-left:10px;">             
            <table class="table text-left" >

                  <tbody>
                          <tr>
                          <th scope="row" style="color:#836691;">Name :<?php  echo $row->full_name;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">Bank account :<?php  echo $row->userbank_id;?></th>
                          <td></td>
                          </tr>
                          <tr>
                          <th scope="row" style="color:#836691;">Expire date :<?php  echo $row->ex_date;?></th>
                          <td></td>
                          </tr>
                      </tbody>
            </table>

                  </div>
    

              </fieldset>
</div>                 
    
         

        </div>
        <?php }?></div>
        <?php } else { ?>
    <div class="row container col-12"> 
           
    </div>
    <div class="container col-12 text-center my-3">

    <h1> You Don't Have Any  Payment ! <h1>
    <h3> Plese Add Payment</h3>
    <img src="/ElectronicEcommerce/app/assets/images/no.jpg">
    </div>
    <?php }  ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
            /*function myFunction() {
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
            var payment_id=$('#payment_id').val(); 
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
url: "/ElectronicEcommerce/userprofiel/delpayment/",
data: {user_id:user_id,payment_id:payment_id},
success: function(response) {
    swal("Deleted successfuly", {
                        icon: "success",
                        });
    //  var x = document.getElementById("snackbar")
    //   x.innerHTML='deleted successfully'
    //   x.className = "show";
    //   setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 
},
error:function(){
      //alert("Error Add");
          // Get the snackbar DIV
          swal("Something Went wrong");
                   
}
   })
                       
                    } else {
                        swal("Canceled");
                    }
                    });
  
            // bootbox.dialog({
			// message: "Are you sure you want to Delete ?",
			// title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			// buttons: {
			// 	success: {
			// 		  label: "No",
			// 		  className: "btn-success",
			// 		  callback: function() {
			// 		  $('.bootbox').modal('hide');
			// 	  }
			// 	},
			// 	danger: {
			// 	  label: "Delete!",
			// 	  className: "btn-danger",
			// 	  callback: function() {  } }})
           });
         </script>