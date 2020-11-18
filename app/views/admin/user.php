<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title" >E-commerce Customer</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show Customer</li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card ">
        <div class="card-header ">
            <h5 class="mb-0  d-inline-block">Customer Table</h5>
           
        </div>
        <div class="card-body ">
            <div class="table-responsive col-12 w-100">
                <table id="example" class="table table-striped table-bordered second text-center">
                <thead>
                                           <tr>
                                           <th scope="col" > #</th>
                                           <th scope="col" > User Name</th>
                                           <th scope="col" >User Email</th>
                                           <th scope="col" >Create  Date</th>
                                           <th scope="col" >Status</th>
                                           <th scope="col" >Action</th>
                                           
                                           </tr>
                                       </thead>
                    <tbody class="text-center">
                        <?php
  $ord=$data['Customer'];
  //print_r($ord);
  $index=0;  
  foreach($ord as $or){
    $index=$index+1; 
    ?>
    <tr>
    <td> <?php echo $index; ?> </td>
    <td> <?php echo $or->first_name." " . $or->last_name; ?> </td>
    <td> <?php echo $or->user_email; ?> </td>
    <td><?php echo $or->create_date; ?></td>
    <td> <?php $status='';
    if($or->is_active==1)
                   $status="Active" ;
    
            else
            $status="Inactive " ;

            echo $status; 
            
            ?>
            
            <input type="hidden"  id="is_active" value="<?php echo $status; ?> "></td>
            <input type="hidden"  id="user_id" value="<?php echo $or->user_id; ?> ">

    <td class="text-center">  
       <?php 
       if( $status=="Active")
echo '<a  id="up_user"><button type="button" class="btn btn-default btn-color">Inactive</button>
</a>';
else
echo '<a  class="btn " id="up_user"  ><button type="button" class="btn btn-default btn-color">Active</button>
</a>';

       ?>
       
    </td>
    </tr>

    <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>



     <script>
  $("#up_user").click(function (e) {
               
               var user_id=$('#user_id').val();
               var is_active=$('#is_active').val();
               
             console.log(user_id);
             
            
                         
              $.ajax({
           
                        async: false,
                        type: "POST",
                        global: false,
                        url:"/ElectronicEcommerce/admin/admin_cust/update/",
                        data: {user_id:user_id,is_active:is_active},
                        success: function(response) {
             
               //window.location.replace('http://localhost/ElectronicEcommerce/admin/admin_cust/');
           
           alert("SecusseFull ");
                      
                        
                        },
                        error:function(){
           alert("Error ");
                       
                        }
                      })
                      });
  
  </script>