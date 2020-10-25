<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Categories and Tags </h2>
           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Categories and Tags</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 co-12 mx-auto">
    
        <section class="card card-fluid">
            <div class="card-header">
            <h5 class="mb-0  d-inline-block">Categories</h5>
   <a href="/ElectronicEcommerce/admin/admin_cat/addCattegories"><button type="button" class="d-inline-block btn btn-success btn-left" style="float:right; 	border-radius:20px;">Add Categories</button></a>

            </div>
             <div class="dd" id="nestable2">
                <ol class="dd-list">
                <?php 
 $rows=$data['categories'];
 $index=1;   
 if( count($rows['parents'])==0) {
     echo 'no data available';
 }            
foreach($rows['parents'] as $row){
   echo  '
                    <li class="dd-item" data-id="15">
                        <div class="dd-handle"> <span class="drag-indicator"></span>
                            <div>'. $row->cat_name.'</div>
                            
                        </div>';
                        foreach($rows['child'] as $ro){
                            if($ro->parent==$row->cat_id){ echo'
                        <ol class="dd-list">
                            <li class="dd-item" data-id="16">
                                <div class="dd-handle"> <span class="drag-indicator"></span>
                                    <div> '.$ro->cat_name.' </div>
                                </div>
                            </li>
                           
                        </ol>'; }} echo'
                    </li>';
} ?>
                </ol>
            </div>
        </section>
</div>


<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 co-12 mx-auto">
        <section class="card card-fluid">
        <div class="card-header">
            <h5 class="mb-0  d-inline-block">Tags</h5>
   <a href="/ElectronicEcommerce/admin/admin_cat/addTags"><button type="button" class="d-inline-block btn btn-success btn-left" style="float:right; 	border-radius:20px;">Add Tags</button></a>

            </div>
            <div class="dd" id="nestable2">
                <ol class="dd-list">
                <?php 
 $rows=$data['tags'];
 $index=1; 
 if( count($rows)==0) {
     echo  ' <li class="dd-item" data-id="15">
     <div class="dd-handle"> <span class="drag-indicator"></span>
         <div>No data available</div>
        
     </div>
 </li>';
 }                             
foreach($rows as $row){
   echo  '
                    <li class="dd-item" data-id="15">
                        <div class="dd-handle"> <span class="drag-indicator"></span>
                            <div>'. $row->tag_name.'</div>
                           
                        </div>
                    </li>';
} ?>
                </ol>
            </div>
        </section>
</div>
<!-- 
// ';
                            // foreach($rows['child'] as $ro){
                            //     if($ro->parent==$row->cat_id){ echo'
                            // <ol class="dd-list">
                            //     <li class="dd-item" data-id="16">
                            //         <div class="dd-handle"> <span class="drag-indicator"></span>
                            //             <div> '.$ro->cat_name.' </div>
                            //         </div>
                            //     </li>
                               
                            // </ol>'; }} echo' -->
<!-- <div class="dd-nodrag btn-group ml-auto">
                                <button class="btn btn-sm btn-outline-light">Edit</button>
                                <button class="btn btn-sm btn-outline-light">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div> -->