<?PHP
use coreAppNS\Controller;
class categoriesController extends Controller{
public $controller;
public $cat_model;


    function __construct($fun_name="index"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('category');

        $this->$fun_name();

       }

       function index(){
        $this->cat_model=$this->controller->model_object->create_model('category');
        $this->controller->view_object->create_view('home',$homeItems);
       }


       function show(){
        $items=array(
            'categories'=>$this->cat_model->getAllData(),
        );
        $this->controller->view_object->create_view('categories',$items);
       }

       function delete(){
        $this->cat_model->deleteData( $_GET['id']);
        include '../views/categories.php';
       
       }


       function update(){
           echo "inside update function ";
       }

       


}


?>