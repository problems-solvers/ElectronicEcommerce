
<?php
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_custController extends Controller
{
    public $controller;
    public $cat_model;
    public $model;
	public function __construct($fun='main')
	{
        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin_cust');
        $this->$fun();
       
    }
    function admin_cust(){
     
        $items=array(
            //'search'=>$this->cat_model->search(),
            'Customer'=>$this->cat_model->getAlluser(),
           
        );
       
          $this->controller->view_object->create_view('admin/user',$items);


        
    }	
    
    function update(){
        $active='';
        print_r($_POST);
     if($_REQUEST['is_active']="Active")
     $active=0;
     else
     $active=1;
       $data=array(
            'is_active' =>"'".$active."'",
       );
       $this->cat_model->update($data);
        
	}	


}
?>
