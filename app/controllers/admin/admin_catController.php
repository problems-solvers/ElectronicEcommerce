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
           $parents=array();
           $child=array();
           $allcat=$this->model->getAllCatData();
           foreach ( $allcat as $row) {
                 if($row->parent =='0'){
                    array_push($parents,$row);
                 }
                 if($row->parent !='0'){
                    array_push($child,$row);
                 }
           }
          $categories=array('parents'=>$parents,'child'=> $child);
         $items=array(
            'categories'=> $categories,
            'tags'=>$this->model->getAllTagsData()
         );
        $this->controller->view_object->create_view('admin/categoriesandTags',$items);
       }
       function addCattegories(){
              if(!isset($_POST['cat_name'])){
                     
                     $items=array(
                            'categories'=>$this->model->getAllCatData()
                        );
                     $this->controller->view_object->create_view('admin/addCategories',$items);
              }
              else{
              $this->addCats();
              }
       }
       function addCats(){
              $uuid=baseFunctions::uuid();

        $_POST['cat_id']= $uuid;
        $_POST['create_date']= date('Y-m-d H:i:s');
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
              if(!isset($_POST['tag_name'])){
                     
                     $this->controller->view_object->create_view('admin/addTags');
              }
              else{
             
                     $uuid=baseFunctions::uuid();

                     $_POST['tag_id']= $uuid;
        $data = array(
            'tag_id' =>"'".$_POST['tag_id']."'",
            'tag_name' =>"'".$_POST['tag_name']."'",
            'tag_type' =>"'".($_POST['tag_type'])."'",
            'type_data' =>"'".($_POST['type_data'])."'"
            );
            $this->model->addTags($data);
            $this->controller->view_object->create_view('admin/categoriesandTags');
            $this->controller->view_object->create_view('admin/feedback');

       }
    

       }



}


?>