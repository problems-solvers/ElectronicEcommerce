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
        if(isset($_SESSION['id'])){
        $items = $this->model->getCartProducts();
        $this->controller->view_object->create_view('cart',$items);
        }
        else{
            $this->controller->view_object->create_view('cart');
        }
    }
    function updateqty(){
        $this->model->updateCart();
    }
    function deleteCartItem(){
        $this->model->deleteCartItem();
    }
    function addCart(){
      
      $this->model->addCats();
     // echo '<script> console.log("tt")</script>';
    }
    
       }
       ?>