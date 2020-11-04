<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_productController extends Controller{
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
        $parents=array();
        $child=array();
        $allcat=$this->cat_model->getAllCatData();
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
     'categories'=>$categories,
     
         );
          $this->controller->view_object->create_view('admin/addProduct',$items);

       }
       public function view_product(){
 
        $items=array(
            'product'=>$this->cat_model->view_product(),
        );
        $this->controller->view_object->create_view('admin/view_product',$items);
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
           $result= $this->cat_model->add($data);
           if( $result)
           {
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/addProduct';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product';</script>";
           }
          
       }
       function update(){
        $_POST['create_date']='NOW()';

        $img=baseFunctions::img($_FILES['pro_imgs']);
        $main_img=baseFunctions::main_img($_FILES['main_img']);
        $data = array(
            'pro_id' =>"'".$_POST['pro_id']."'",
            'pro_name'=>"'". $_POST['pro_name']."'",
            'brand' =>"'".$_POST['brand']."'" ,
            'pro_quentity' =>"'".$_POST['pro_quentity']."'",
            'pro_details' =>"'".$_POST['pro_details']."'",
            'pro_price'=>"'".$_POST['pro_price']."'",
            'is_active'=>"'".$_POST['is_active']."'",
            'main_img' =>"'".$main_img."'",
            'pro_imgs' =>"'".$img."'"  
                  );
                  print_r($data);

           $result=$this->cat_model->update($data);
           print_r($result);
          if( $result)
           {
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct';</script>";
           }
       }

       function updateProduct(){
       $item=array(
            'updateProduct'=>$this->cat_model->updateProduct(),
            
        );
        $this->controller->view_object->create_view('admin/updateProduct',$item);
       }
 

       function delete(){
        $this->cat_model->delete();
        
       }
      

}


?>