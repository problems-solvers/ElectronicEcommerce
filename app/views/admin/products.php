

  
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header ">
                                <h5 class="mb-0  d-inline-block">Product Table</h5>
   <a href="http://localhost/ElectronicEcommerce/admin/admin_product/addProduct"><button type="button" class="d-inline-block btn btn-success btn-left" style="float:right; 	border-radius:20px;">Add Product</button></a>

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
							<td><img class='rounded' src='../$row->main_img' width='70'>
							<br>
							$row->pro_name</td>
		      <td>$row->pro_price</td>
		      <td>$row->pro_quentity</td>
		      <td>$active</td>


		 
		";
		echo "<td>
		<a  href='http://localhost/ElectronicEcommerce/admin/admin_product/view_product?action=view&pro_id=".$row->pro_id."' class='update'>
	  <i class='btn fas fa-info-circle ' style='font-size:24px;'></i></a>

	  <a  href='http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class='update'>
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
                       
                                  
  
