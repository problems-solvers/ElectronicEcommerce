

  
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="mb-0  d-inline-block">Product Table</h5>
   <a href="http://localhost/ElectronicEcommerce/admin/admin_product/addProduct"><button type="button" class="d-inline-block btn btn-success btn-left" style="float:right; 	border-radius
:20px;">Add Product</button></a>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
  <thead>
    <tr>
      <th class="th-sm">#
      </th>
      <th class="th-sm">Product Name
      </th>
      <th class="th-sm">Price
      </th>
      <th class="th-sm">Quentity
      </th>
      <th class="th-sm"> Active
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
        <?php
       $rows=$data['product'];
              $index=1;                           
       foreach($rows as $row){
		   if($row->is_active=="1")
			$active="Active";
		else
			$active="de_active";
		echo "
		<tr>
		      <td>$index</td>
							<td><img class='rounded' src='../../$row->main_img' width='70'>
							<br>
							$row->pro_name</td>
		      <td>$row->pro_price</td>
		      <td>$row->pro_quentity</td>
		      <td>$active</td>


		 
		";
		echo "<td>
		<a  href='http://localhost/ElectronicEcommerce/admin/admin_product/view_product?action=view&pro_id=".$row->pro_id."' class='update'>
	  <i class='btn fas fa-info-circle ' style='font-size:24px;'></i></a>

<a href='http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class='update'>
	  <i class='btn fa fa-pencil text-primary' style='font-size:24px;'></i></a>

      <a class='delete_employee' data-emp-id='$row->pro_id' href='javascript:void(0)'>
      <i  class=' btn fa fa-trash-o text-danger' style='font-size:24px;' ></i></a>


  </td>
</tr>";
		$index+=1;
    }

          ?>
     
  </tbody>
  
</table>
</div>
                            </div>
                       
                                  
                          
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>

<script>
$(document).ready(function () {
  //Pagination numbers
  $('#example').DataTable({
    "pagingType": "simple_numbers",
	"ordering": false 
  });
  $('.dataTables_length').addClass('bs-select');
  
  $('.delete_employee').click(function(e){   
	   e.preventDefault();   
	   var empid = $(this).attr('data-emp-id');
	   var parent = $(this).parent("td").parent("tr");   
	   bootbox.dialog({
			message: "Are you sure you want to Delete ?",
			title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			buttons: {
				success: {
					  label: "No",
					  className: "btn-success",
					  callback: function() {
					  $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {       
				   $.ajax({        
						type: 'POST',
						url: 'http://localhost/ecomm/admin/product/delete',
						data: 'empid='+empid        
				   })
				   .done(function(response){        
						bootbox.alert("Delete sucssful");
						parent.fadeOut('slow');        
				   })
				   .fail(function(){        
						bootbox.alert('Error....');               
				   })              
				  }
				}
			}
	   });   
	});  
});
</script>
