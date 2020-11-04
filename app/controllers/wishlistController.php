<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

//include("app/models/category.php");
class wishlistController extends Controller{
public $controller;
public $model;

    function __construct($fun ='wishlist'){

        $this->controller =new Controller();
        
       

        $this->controller->view_object->create_view('wishlist');
      
       $this->$fun();

       }

      
    function wishlisT(){
       
        
        $this->controller->view_object->create_view('wishlist');
      
    
    }
    
       }
       ?>
  