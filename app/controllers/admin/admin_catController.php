<?PHP
use coreAppNS\Controller;

class admin_catController extends Controller{
public $controller;
public $cat_model;



    function __construct($function="index"){

        $this->controller=new Controller();
        // $this->cat_model=$this->controller->model_object->create_model('category');
        $this->$function();
        
       }


       function admin_cat(){
           echo "hhh";
           echo "sss";
        // $items=array(
            // 'categories'=>$this->cat_model->getData(),
        //    
        // 
        // );
        $this->controller->view_object->create_view('admin/categoriesandTags');
       }
       function addcat(){
         $this->controller->view_object->create_view('admin/addCategories');
        }

       function add(){
        //    $_POST['create_date']='now()';
        //   $this->cat_model->addData($_POST);
        //   $this->controller->view_object->create_view('admin/feedback');
echo 'hiii';
       // $this->controller->view_object->create_view('admin/customer');
       }


}


?>