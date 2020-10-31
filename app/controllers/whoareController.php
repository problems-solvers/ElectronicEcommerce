<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class whoareController extends Controller{
public $controller;
public $model;

    function __construct($fun ='whoare'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('whoare');
      
       $this->$fun();

       }

      
    function whoare(){
       
        
        $this->controller->view_object->create_view('whoare');
      
    }
    
       }
       ?>
  
      
      