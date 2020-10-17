<?PHP
use coreAppNS\Controller;
class categoryController extends Controller{
public $controller;
public $cat_model;


    function __construct($fun_name="index"){

        $this->controller=new Controller();
        $this->$fun_name();
        
    
       }

       function index(){
        $this->cat_model=$this->controller->model_object->create_model('category');
        $homeItems=array(
            'categories'=>$cat_model->getData(),
            'products'=>array('Lenovo','Galaxy s10','Dell Inspiron','Toshiba','HTC')
        
        );

        $this->controller->view_object->create_view('home',$homeItems);
       }


       function show(){
           echo "this page will show all products in this categry";
       }


       function update(){
           echo "inside update function ";
       }

       


}


?>