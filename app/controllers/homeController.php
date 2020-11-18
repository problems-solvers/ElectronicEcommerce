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
        $this->cat=$this->controller->model_object->create_model('admin_cat');
        $this->$function();

    }
       function home(){

        $items=array(
            
            'Recent'=> $this->model->getRecentAddData(),
            'Featured'=>$this->model->getAllProCatData(),
            'adver'=>$this->model->getAllAdver(),
            'categories'=>$this->cat->getAllCatData(),
            
         ); 
       
         

        $this->controller->view_object->create_view('home',$items);
       
    }
    function recentally(){

        $items=$this->model->getRecentAddData();
        $res=json_encode($items);
            echo $res;
    }
    function featured(){

        $items=$this->model->getAllProCatData();
        $res=json_encode($items);
            echo $res;
    }

    function whoare(){

      
        $this->controller->view_object->create_view('whoare');
       
    }

    
    function connect(){

      
        $this->controller->view_object->create_view('connect');
       
    }
    function getCategories(){
       $items= $this->cat->catHeader();
     print_r(json_encode($items)) ;
   }
       
}

?>
       
