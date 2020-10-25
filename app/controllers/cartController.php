<?PHP
use coreAppNS\Controller;
class cartController extends Controller{
public $controller;
public $cat_model;


    function __construct($fun_name="cart"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('cart');
        $this->product_model=$this->controller->model_object->create_model('cart');

        $this->$fun_name();

       }
       function cart(){
        $parents=array();
        $child=array();
        $featured=$this->product_model->getAllProCatData();
       
  $categories=array('parents'=>$parents,'child'=> $child);
 // print_r($categories);
 $items=array(
     'featured'=>$featured,
         );
     
    $this->controller->view_object->create_view('cart',$items);


    }
    //    function index(){
    //     $this->cat_model=$this->controller->model_object->create_model('category');
    //    }


    //    function show(){
    //     $items=array(
    //         'categories'=>$this->cat_model->getAllData(),
    //     );
    //     $this->controller->view_object->create_view('categories',$items);
    //    }

    //    function delete(){
        
       
    //    }


    //    function update(){
    //        echo "inside update function ";
    //    }

       


}


?>