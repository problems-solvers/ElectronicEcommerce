<?PHP
use coreAppNS\Controller;

class admin_catController extends Controller{
public $controller;
public $model;



public function __construct($function){

        $this->controller=new Controller();
         $this->model=$this->controller->model_object->create_model('admin_cat');
        $this->$function();
        
       }


       function admin_cat(){
           echo "hhh";
         $items=array(
            'categories'=>$this->model->getAllCatData(),
            array(
                'tags'=>$this->model->getAllTagsData()),
        
         );
        $this->controller->view_object->create_view('admin/categoriesandTags',$items);
       }
       function add(){
        //    $_POST['create_date']='now()';
        //   $this->cat_model->addData($_POST);
        //   $this->controller->view_object->create_view('admin/feedback');
       // $this->controller->view_object->create_view('admin/customer');

       function addCats(){
         echo"inside cats";
        $data = array(
            'cat_id' =>"'".$_POST['cat_id']."'",
            'cat_name' =>"'".$_POST['cat_name']."'",
            'parent' =>"'".($_POST['parent'])."'",
            'create_date' =>"'".($_POST['create_date'])."'",
            'is_active' =>"'".($_POST['is_active'])."'"
            );
            $this->model->addCats($data);
         $this->controller->view_object->create_view('admin/categoriesandTags');

          $this->controller->view_object->create_view('admin/feedback');


       }


       function addTags(){
        echo"inside tags";

        $data = array(
            'tag_id' =>"'".$_POST['tag_id']."'",
            'tag_name' =>"'".$_POST['tag_name']."'",
            'tag_type' =>"'".($_POST['tag_type'])."'",
            'type_data' =>"'".($_POST['type_data'])."'"
            );
            $this->model->addTags($data);
          $this->controller->view_object->create_view('admin/feedback');


    

       }



}


?>