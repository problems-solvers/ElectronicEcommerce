<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class cartController extends Controller{
public $controller;
public $model;

    function __construct($fun ='cart'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('cart');
      
       $this->$fun();

       }

      
    function cart(){
       
        
        $this->controller->view_object->create_view('cart');
      
    
    }
    
       }
       ?>