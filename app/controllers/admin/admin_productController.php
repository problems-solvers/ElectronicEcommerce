<?PHP
use coreAppNS\Controller;

class   admin_productController extends Controller{
public $controller;
public $cat_model;



    function __construct($function="admin_product"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->$function();
        
       }

      
       function admin_product(){
        $items=array(
            'product'=>$this->cat_model->getQuery(),
        );
        $this->controller->view_object->create_view('admin/products', $items);
       }
       function addProduct(){
        $items=array(
            'categories'=>$this->cat_model->getcat(),
        );
          $this->controller->view_object->create_view('admin/addProduct',$items);

       }
       function add(){
        $uuid=baseFunctions::uuid();

        $_POST['pro_id']= $uuid;
        $_POST['create_date']= date('Y-m-d H:i:s');

        $img=baseFunctions::img($_FILES['pro_imgs']);
        $main_img=baseFunctions::main_img($_FILES['main_img']);
      
        $data = array(

            'pro_id' =>"'".$_POST['pro_id']."'",
            'main_img' =>"'".$main_img."'",
            'pro_name'=>"'". $_POST['pro_name']."'",
            'pro_price'=>"'".$_POST['pro_price']."'",
            'pro_quentity' =>"'".$_POST['pro_quentity']."'",
            'pro_details' =>"'".$_POST['pro_details']."'",
            'brand' =>"'".$_POST['brand']."'",
            'cat_id' =>"'".$_POST['cat_id']."'",
            'create_date' =>"'".$_POST['create_date']."'",
            'pro_imgs' =>"'".$img."'"            
            );
            $this->cat_model->add($data);
          
       }
 
       function update(){
        $data = array(
            'pro_id' =>"'".$_POST['pro_id']."'",
            'pro_name'=>"'". $_POST['pro_name']."'",
            'pro_price' =>"'".$_POST['pro_price']."'",
            'pro_quentity' =>"'".$_POST['pro_quentity']."'",
            'pro_details' =>"'".$_POST['pro_details']."'",
            'cat_id' =>"'".$_POST['cat_id']."'"
            );
        $this->cat_model->update($data);
       }

       function updateproduct(){
        $this->controller->view_object->create_view('admin/updateproduct');
       }


       function delete(){
 
        $this->cat_model->delete();
        
       }

}


?>