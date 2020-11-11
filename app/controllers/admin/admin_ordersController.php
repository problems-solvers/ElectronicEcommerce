<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_ordersController extends Controller{
public $controller;
public $model;
public $cat_model;




public function __construct($function='admin_orders'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('admin_orders');
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->$function();
        
       }
       function admin_orders(){
        $items=array(
            'orders'=>$this->model_order->getmore(),
        );
       
  
        $this->controller->view_object->create_view('view_more', $items);
       }
      
       

}


?>