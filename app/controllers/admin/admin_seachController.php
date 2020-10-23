<?PHP
use coreAppNS\Controller;

class admin_searchController extends Controller{
public $controller;
public $model;



public function __construct($function="admin_search"){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('search');
        $this->$function();
        
       }
       function admin_search(){
          
        $parents=array();
        $child=array();
        $allcat=$this->model->search();
        foreach ( $allcat as $row) {
         
         {
                 if($row->pro_name!='')
           $array[] = "<a href='http://localhost/ElectronicEcommerce/admin/admin_product/view_product?action=view&pro_id=".$row->pro_id."'> ".$row->pro_name."</a>";
        if($row->cat_name!='')
           $array[] = "<a href='/ElectronicEcommerce/admin/admin_cat'> ".$row->cat_name."</a>";
        
        
         }
         echo json_encode($array);
        }
         
        $this->controller->view_object->create_view('admin/search');
       }
      



}


?>