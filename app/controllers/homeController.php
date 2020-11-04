<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

//include("app/models/category.php");
class homeController extends Controller{
public $controller;
public $model;

    function __construct($function){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('home');
        $this->$function();


    }
       function home(){

        $items=array(
            'Recent'=> $this->model->getRecentAddData(),
            'Featured'=>$this->model->getAllProCatData()
         ); 
       
         

        $this->controller->view_object->create_view('home',$items);
       
    }
  


       
}

?>
       
