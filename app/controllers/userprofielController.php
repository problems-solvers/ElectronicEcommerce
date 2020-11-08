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
}

  ?>
       
  