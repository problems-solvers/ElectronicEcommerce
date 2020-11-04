
<?PHP
use coreAppNS\Controller;
//include("app/models/category.php");
class productController extends Controller{
public $controller;
public $model;

function __construct($fun ='product'){

    $this->controller =new Controller();  
    $this->cat_model=$this->controller->model_object->create_model('product');
    $this->$fun();
    

   }
   function product(){
    $items=array(
        'product'=>$this->cat_model->getQuery(),
    );
    $this->controller->view_object->create_view('products', $items);
   }
   public function productdetale(){
 
    $items=array(
        'product'=>$this->cat_model->view_more(),
    );
    $this->controller->view_object->create_view('productdetale',$items);
   }


   }
   ?>
