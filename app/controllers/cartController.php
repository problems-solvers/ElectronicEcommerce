<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class cartController extends Controller{
public $controller;
public $model;

    function __construct($fun ='cart'){

        $this->controller =new Controller();
        
       

        $this->model=$this->controller->model_object->create_model('cart');
      
       $this->$fun();

       }

      
    function cart(){
       
        
        $this->controller->view_object->create_view('cart');
      
    
    }
    function addCart(){
      
      $featured=$this->product_model->addCats();
      echo '<script> console.log("tt")</script>';
    }
    
       }
       ?>