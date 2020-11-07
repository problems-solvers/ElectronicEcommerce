<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

//include("app/models/category.php");
class connectController extends Controller{
public $controller;
public $model;

    function __construct($fun ='connect'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('connect');
      
       $this->$fun();

       }

      
    function  connect(){
       
        
        $this->controller->view_object->create_view('connect');
      
    
    }
    
       }
       ?>
  