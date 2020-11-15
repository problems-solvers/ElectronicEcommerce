<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

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
              //print_r($__REQUEST);
    if(isset($_REQUEST['is_active']))
    {
           $active=1;
    }
    else{
           $active=0;
    }

        $_POST['cat_id']= $uuid;
        $_POST['create_date']= date('Y-m-d H:i:s');
        $data = array(
            'cat_id' =>"'".$_POST['cat_id']."'",
            'cat_name' =>"'".$_REQUEST['cat_name']."'",
            'parent' =>"'".$_REQUEST['parent']."'",
            'create_date' =>"'".$_POST['create_date']."'",
            'is_active' =>"'".$active."'"
            );
            $result=$this->model->addCats($data);
            //print_r($_POST);
            if($result=='done') {
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_cat/addCattegories';</script>";
             }
             else{
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_cat/';</script>";

             }
            
       }
                 
       


       function addTags(){
              if(!isset($_REQUEST['tag_name'])){
                     
                     $this->controller->view_object->create_view('admin/addTags');
              }
              else{
             
                     //print_r( $_POST);
                      $uuid=baseFunctions::uuid();

                     $_POST['tag_id']= $uuid;
                     $tag_data='';
                     foreach ($_REQUEST['field'] as $key=>$val)
                     {
                         $tag_data .=$val.',';
                     }
        $data = array(
           'tag_id' =>"'".$_POST['tag_id']."'",
           'tag_name' =>"'".$_REQUEST['tag_name']."'",
            'tag_data' =>"'".$tag_data."'"
            );
            $result=$this->model->addTags($data);
             if($result=='done') {
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_cat/addCattegories';</script>";
             }
             else{
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_cat/';</script>";

             }
       }
    

       }
   function updateCategory(){
          $items=array(
                 'category'=>$this->model->upadtecat()

          );
          print_r($items);
       $this->controller->view_object->create_view('admin/updateCategory',$items);

   }

       function delcat(){
              $this->model->delete();
              
             }
             function deltag(){
              $this->model->deltag();
              
             }

}


?>