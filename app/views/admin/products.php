<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">E-commerce Products</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="haver">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header ">
            <h5 class="mb-0  d-inline-block">Product Table</h5>
            <a href="http://localhost/ElectronicEcommerce/admin/admin_product/addProduct"><button type="button"
            class="btn btn-outline-light float-right  btn-color">Add Product</button></a>

        </div>
        <div class="card-body">
            <div class="table-responsive col-12 w-100">
                <table id="example" class="table table-striped text-center table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th class="th-sm">#
                            </th>
                            <th class="th-sm"> Image
                            </th>
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
$active="Inactive";
echo "
<tr>
<td>$index</td>
        <td class=''><img width='100px' height='100px' class='rounded col-4' src='../$row->main_img' width='70'>
        
       </td><td> $row->pro_name</td>
<td>$row->pro_price $</td>
<td>$row->pro_quentity</td>
<td>$active</td>



";
echo "<td>
<a  href='http://localhost/ElectronicEcommerce/admin/admin_product/view_product?action=view&pro_id=".$row->pro_id."' class='update'>
<i class='btn fas fa-info-circle view-btn ' style='font-size:20px;'></i></a>

<a  href='http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$row->pro_id."' class='update'>
	  <i class='btn fa fa-pencil view-btn ' style='font-size:20px;'></i></a>

<a class='delete_employee' data-emp-id='$row->pro_id' href='javascript:void(0)'>
<i  class=' btn fa fa-trash-o view-btn ' style='font-size:20px;' ></i></a>


</td>
</tr>";
$index+=1;
}

?>

                    </tbody>

                </table>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>


        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
