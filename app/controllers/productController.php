<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class productController extends Controller{
public $controller;
public $model;

    function __construct($fun="products"){

        $this->controller=new Controller();
        $this->controller->view_object->create_view('products');
       $this->$fun();

       }

       function products(){
        echo 'hiiiiiiii';
        //$this->controller->view_object->create_view('products');

    }


       
       }
       ?>
       
}


?>