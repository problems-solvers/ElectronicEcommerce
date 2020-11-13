<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_ordersController extends Controller{
public $controller;
public $model;
public $cat_model;




public function __construct($function='admin_orders'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('admin_order');
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->$function();
        
       }
       function admin_orders(){
        $items=array(
            'order'=>$this->model->getorder(),
        );
       //print_r($this->model->getorder());
  
        $this->controller->view_object->create_view('admin/view_order', $items);
       }
       function viewmore(){
        $items=array(
            'orders'=>$this->model->getmore(),
        );

       print_r($this->model->getmore());
  
        $this->controller->view_object->create_view('admin/view_more', $items);
       }
      
       

}


?>