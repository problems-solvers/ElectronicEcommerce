<?PHP
use coreAppNS\Controller;
class paymentController extends Controller{
public $controller;
public $model;


    function __construct($fun='payment'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('payment');
        $this->$fun();    
       }

    
       function payment(){

        echo 'hello ^^';
        $this->controller->view_object->create_view('payment');

    
       }
       


}


?>