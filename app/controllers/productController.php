<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class productController extends Controller{
public $controller;
public $model;

    function __construct($fun ='products'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('productdetale');
      
       $this->$fun();

       }

      
    function productdetale(){
       
        
        $this->controller->view_object->create_view('productdetale');
      
    
    }
    
       }
       ?>
  