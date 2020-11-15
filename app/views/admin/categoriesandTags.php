<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
              
                <h2 class="pageheader-title">Categories</h2>
                
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories And Tags </li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="container">
   <ul class="nav nav-tabs">
    <li class="nav-link active"><a href="#home">Categories</a></li>
    <li class="nav-link"><a href="#menu1">Tag</a></li>
    </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active show">
    
    <h3>Categories</h3>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="card">
                          <div class="card-header ">
                              <h5 class="mb-0  d-inline-block">Categories Table</h5>
                              <a href="/ElectronicEcommerce/admin/admin_cat/addCattegories"><button type="button"
                                      class="d-inline-block btn  btn-sm  btn-left bt"
                                      style="float:right; 	border-radius:20px;">Add Categories</button></a>
  
                          </div>
                          <div class="card-body">
                              <div class="table-responsive col-12 w-100">
                                  <table id="example" class="table table-striped table-bordered second"
                                      style="width:100%">
                                      <thead>
                                          <tr>
                                              <th class="th-sm">#
                                              </th>
                                              <th class="th-sm">Categories Name
                                              </th>
                                              <th class="th-sm">Classfication
                                              </th>
                                              <th class="th-sm"> Active
                                              </th><th class="th-sm"> Action
                                              </th>
  
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php
  $index=1;  
  $rows=$data['categories'];
  
  foreach($rows['parents'] as $ro){
  if($ro->is_active==1)
  $active="Active";
  
  else
  $active="Deactive";
  $parrent="Parent";
  echo "
  <tr>
  <td>$index</td>                                       
  <td>$ro->cat_name</td>
  <td>$parrent</td>
  <td>$active</td>";
  echo '
  <input type="hidden" class="form-control"  id="cat_id"  value="'.$ro->cat_id.'" required>
  ';
  
  echo "<td>

<a  href='http://localhost/ElectronicEcommerce/admin/admin_cat/updateCategory?action=update&cat_id=".$ro->cat_id."' class='update'>
	  <i class='btn fa fa-pencil text-primary' style='font-size:24px;'></i></a>

<a class='' value='$ro->cat_id' href='#' id='del'>
<i  class=' btn fa fa-trash-o text-danger' style='font-size:24px;' ></i></a>


</td>
</tr>"; 
  $index+=1; 
  
  foreach($rows['child'] as $r){
  if($ro->cat_id==$r->parent)
  { 
  $parrent=$ro->cat_name;
  if($ro->is_active==1)
  $active="Active";
  
  else
  $active="Deactive";
  echo '
  <input type="hidden" class="form-control" name="cat_id" id="cat_id"  value="'.$r->cat_id.'" required>
  ';
  echo "
  <tr>
  <td>$index</td>                                       
  <td>$r->cat_name</td>
  <td>$parrent</td>
  <td>$active</td> ";
  echo "<td>

<a  href='http://localhost/ElectronicEcommerce/admin/admin_cat/updateCategory?action=update&cat_id=".$r->cat_id."' class='update'>
	  <i class='btn fa fa-pencil text-primary' style='font-size:24px;'></i></a>

<a class='' value='$r->cat_id' href='#' id='del'>
<i  class=' btn fa fa-trash-o text-danger' style='font-size:24px;' ></i></a>


</td>
</tr>";
   
  $index+=1;
  }}
  
  }
  
  
  
  ?>
  
                                      </tbody>
  
                                  </table>
                              </div>
                          </div>

    </div>
    </div>

</div>
    <div id="menu1" class="tab-pane fade">
     
    <h3>Tags</h3>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                              <div class="card">
                                  <div class="card-header ">
                                      <h5 class="mb-0  d-inline-block">Tags Table</h5>
                                      <a href="/ElectronicEcommerce/admin/admin_cat/addTags"><button type="button"
                                              class="d-inline-block btn btn-sm bt btn-left"
                                              style="float:right; 	border-radius:20px;">Add Tags</button></a>
  
                                  </div>
                                  <div class="card-body">
                                      <div class="table-responsive col-12 w-100">
                                          <table id="example" class="table table-striped table-bordered second"
                                              style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th class="th-sm">#
                                                      </th>
                                                      <th class="th-sm">Tag Name
                                                      </th>
                                                      <th class="th-sm">Tag Data
                                                      </th>
                                                      <th class="th-sm"> Active
                                                      </th>
                                                      </th><th class="th-sm"> Action
                                              </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <?php
  $index=1;  
  $rows=$data['tags'];
  
  foreach($rows as $ro){
  if($ro->tag_type==1)
  $active="Active";
  
  else
  $active="Deactive";
  $parrent="Parent";
  echo '
  <input type="hidden" class="form-control" name="tag_id" id="tag_id"  value="'.$ro->tag_id.'" required>
  ';
  echo "
  <tr>
  <td>$index</td>                                       
  <td>$ro->tag_name</td>
  <td>$ro->tag_data</td>
  <td>$active</td>";
  echo "<td>

<a  href='http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct?action=update&pro_id=".$ro->tag_id."' class='update'>
	  <i class='btn fa fa-pencil text-primary' style='font-size:24px;'></i></a>

<a class='' value='$ro->tag_id' href='#' id='del_tag'>
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
  
    </div>
   
   
  </div>
</div>
   
    
  </div>
   
</div>

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
    $(this).tab('active');
  });
  
  $("#del").click(function (e) {
               
    var cat_id=$('#cat_id').val();
  console.log(cat_id);
  
 
              
   $.ajax({

             async: false,
             type: "POST",
             global: false,
             url:"/ElectronicEcommerce/admin/admin_cat/delcat/",
             data: {cat_id:cat_id},
             success: function(response) {
  
    //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');

alert("SecusseFull Delete");
           
             
             },
             error:function(){
alert("Error Delete");
            
             }
           })
           });
           $("#del_tag").click(function (e) {
               
               var tag_id=$('#tag_id').val();
             console.log(cat_id);
             
            
                         
              $.ajax({
           
                        async: false,
                        type: "POST",
                        global: false,
                        url:"/ElectronicEcommerce/admin/admin_cat/deltag/",
                        data: {tag_id:tag_id},
                        success: function(response) {
             
               //window.location.replace('http://localhost/ElectronicEcommerce/userprofiel/address/');
           
           alert("SecusseFull Delete");
                      
                        
                        },
                        error:function(){
           alert("Error Delete");
                       
                        }
                      })
                      });
  
});
</script>