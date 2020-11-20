<?php
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_repoController extends Controller
{
    public $controller;
    public $cat_model;
    public $model;
	public function __construct($fun='main')
	{
        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin_repo');
        $this->$fun();
       
    }
    function admin_repo(){
        $items=array(
           
            'order'=>$this->cat_model->repo_order(),
            'less_order'=>$this->cat_model->less_order(),
        );
       
          $this->controller->view_object->create_view('admin/order_repo',$items);
        
    }	
    function custOrder(){
        $items=array(
           
            'user'=>$this->cat_model->repo_user(),
            'less_user'=>$this->cat_model->less_user(),
        );
       
          $this->controller->view_object->create_view('admin/custOrder',$items);
        
    }
    
    function chart(){
      
          $this->controller->view_object->create_view('admin/orderchart');
        
	}	

    function data(){
        $conn = new PDO("mysql:host=localhost;dbname=store", 'root', '');
        $stmt = $conn->prepare('select COUNT(order_status) as counts, staus  from orders GROUP BY order_status ');
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        echo json_encode($results);
	}	


}
?>
