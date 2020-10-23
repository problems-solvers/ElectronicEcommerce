<?php
use coreAppNS\Controller;
class admin_dashboardController extends Controller
{
    public $controller;
    public $model;
	public function __construct($fun='main')
	{
        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('admin_dashboard');
        $this->$fun();
       
    }
    function admin_dashboard(){
		echo 'hiiiiiiii';
	}	


 










}
?>
