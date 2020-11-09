<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class userprofielController extends Controller{
public $controller;
public $model;

    function __construct($fun ='userprofiel'){

        $this->controller =new Controller();
        
        $this->model=$this->controller->model_object->create_model('userprofiel');
        $this->$fun();

       }

    function userprofiel(){
           
    $items=array(
        'userprofiel'=>$this->model->check_userprofiel(),
    );
    $this->controller->view_object->create_view('userprofiel',$items);
   }
   function address(){
           
    $items=array(
        'address'=>$this->model->user_address(),
    );
    $this->controller->view_object->create_view('address',$items);
   }

   function payment(){
           
    $items=array(
        'payment'=>$this->model->user_payment(),
    );
    $this->controller->view_object->create_view('user_payment',$items);
   }
   function order(){
           
    $items=array(
        'order'=>$this->model->user_order(),
    );
    $this->controller->view_object->create_view('user_order',$items);
   }
   
}

  ?>
       
  