<?php
use coreAppNS\Controller;
class admin_dashboardController extends Controller
{
    public $controller;
    public $cat_model;
	public function __construct($fun='main')
	{
        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('admin_dashboard');
        $this->$fun();
       
    }
    function admin_dashboard(){
        echo 'hiiiiiiii';
        $items=array(
            'search'=>$this->cat_model->search(),
        );
          $this->controller->view_object->create_view('admin/dashboard',$items);


        
	}	


 










}
?>
