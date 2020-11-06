<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_advertimentController extends Controller{
public $controller;
public $model;



public function __construct($function){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('admin_advertiment');
        $this->$function();
        
       }
       function admin_advertiment(){
        
        
        $this->controller->view_object->create_view('admin/advertisment',$items);
       }
       function add_adver(){
        $items=array(
            'offer'=>$this->model->getoffer()
         );
      
       $this->controller->view_object->create_view('admin/add_adver',$items);
      }
      function add(){

        $id=baseFunctions::uuid();
        $_POST['id']= $id;
        $main_img=baseFunctions::main_img($_FILES['main_img']);
      
        $data = array(
            'adver_id' =>"'".$_POST['id']."'",
            'adver_img' =>"'".$main_img."'",
            'offer_id'=>"'". $_POST['offer_id']."'",
            'adver_name'=>"'".$_POST['adver_name']."'",
            'adver_namber' =>"'".$_POST['adver_namber']."'",
            'adver_details' =>"'".$_POST['adver_details']."'"               
            );
          
               
                
           $result= $this->model->addAdver($data);

           if(!$result)
          { 
            
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_advertiment/add_adver';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_advertiment';</script>";
           }
        
        
          
      
      }
      
  
    

       



}


?>