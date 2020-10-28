<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class cardController extends Controller{
public $controller;
public $model;

    function __construct($fun ='card'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('card');
      
       $this->$fun();

       }

      
    function card(){
       
        
        $this->controller->view_object->create_view('card');
      
    
    }
    
       }
       ?>