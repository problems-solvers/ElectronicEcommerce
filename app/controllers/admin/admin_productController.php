<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_productController extends Controller{
public $controller;
public $cat_model;
public $tag_model;



    function __construct($function="admin_product"){

        $this->controller=new Controller();
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->tag_model=$this->controller->model_object->create_model('admin_cat');
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
            //'tag'=>$this->cat_model->view_tag(),
            'product'=>$this->cat_model->view_more(),  
        );
        $this->controller->view_object->create_view('admin/view_product',$items);
       }

       function add(){
        $uuid=baseFunctions::uuid();
     
        $_POST['pro_id']= $uuid;
        $_POST['create_date']= date('Y-m-d H:i:s');
         $data='';
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
           
                if(!isset($_POST['name'])){
                       
                       $this->controller->view_object->create_view('admin/admin_product/addProduct');
                }
                else{
            
                       $uuid=baseFunctions::uuid();
                       foreach( $_POST['name'] as $filed)
                       {

                         $tag=baseFunctions::uuid();
                         $_POST['tag_id']= $tag;
                         $data2 = array(
                        'tag_id' =>"'".$_POST['tag_id']."'",
                        'tag_name' =>"'".$filed."'"                );
                        $result= $this->tag_model->addTags($data2);
                        foreach( $_POST['data'] as $datas)
                       {
                           //$data.=$datas."@ ";
                           $tag_details_id=baseFunctions::uuid();
                           $_POST['tag_details_id']= $tag_details_id;
                       $data3 = array(
                            'tag_id' =>"'".$_POST['tag_id']."'",
                            'pro_id' =>"'".$_POST['pro_id']."'",
                           'tag_details_id' =>"'".$_POST['tag_details_id']."'",
                           'tag_data' =>"'".$datas."'"
                           );
                        $result3= $this->tag_model->addTagsDetails($data3);
                       break;
                       }
                    }
         
                
           $result2= $this->cat_model->add($data);

      
            if(!$result2) {

            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/addProduct';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product';</script>";
          
        
        }
          
       }}

    
    
    function updateProduct(){
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
 
        $item=array(
             'updateProduct'=>$this->cat_model->updateProduct(),
             'categories'=>$categories,
             
         );
         $this->controller->view_object->create_view('admin/updateProduct',$item);
        }
 

       function delete(){
        $this->cat_model->delete();
        
       }
       function update(){
        $active='';
        print_r($_POST);
        if(isset($_POST['is_active']))
        $active=1;
        else
        $active=0;
      print_r($_POST);
        $img=baseFunctions::img($_FILES['pro_imgs']);
        $main_img=baseFunctions::main_img($_FILES['main_img']);

       /* if(!isset($_POST['name'])){
                       
            $this->controller->view_object->create_view('admin/admin_product/addProduct');
     }
     else{
 
            foreach( $_POST['name'] as $filed)
            {

              $data2 = array(
             'tag_name' =>"'".$filed."'"                );
           $result2=$this->cat_model->tagUpdate($data2);

             foreach( $_POST['data'] as $datas)
            {
                //$data.=$datas."@ ";
            $data3 = array(
                 'tag_id' =>"'".$_POST['tag_id']."'",
                 'pro_id' =>"'".$_POST['pro_id']."'",
                'tag_details_id' =>"'".$_POST['tag_details_id']."'",
                'tag_data' =>"'".$datas."'"
                );
           $result1=$this->cat_model->tagdetailUpdate($data3);

            break;
            }
         }}

         */
        if(isset($_FILES['pro_imgs'])&&isset($_FILES['main_img']))
       { $data = array(

            'pro_name'=>"'". $_POST['pro_name']."'",
            'brand' =>"'".$_POST['brand']."'" ,
            'pro_details' =>"'".$_POST['pro_details']."'",
            'pro_price'=>"'".$_POST['pro_price']."'",
            'is_active'=>"'".$active."'",
            'main_img' =>"'".$main_img."'",
            'pro_imgs' =>"'".$img."'" ,

                  );
                }

                  else  if(isset($_FILES['main_img']))
                  { $data = array(
           
                       'pro_name'=>"'". $_POST['pro_name']."'",
                       'brand' =>"'".$_POST['brand']."'" ,
                       'pro_quentity' =>"'".$_POST['pro_quentity']."'",
                       'pro_details' =>"'".$_POST['pro_details']."'",
                       'pro_price'=>"'".$_POST['pro_price']."'",
                       'is_active'=>"'".$active."'",
                       'main_img' =>"'".$main_img."'",
                             );}

                             else  if(isset($_FILES['pro_imgs']))
                             { $data = array(
                      
                                  'pro_name'=>"'". $_POST['pro_name']."'",
                                  'brand' =>"'".$_POST['brand']."'" ,
                                  'pro_quentity' =>"'".$_POST['pro_quentity']."'",
                                  'pro_details' =>"'".$_POST['pro_details']."'",
                                  'pro_price'=>"'".$_POST['pro_price']."'",
                                  'is_active'=>"'".$active."'",
                                  'pro_imgs' =>"'".$img."'" ,

                                        );}

        else{
            $data = array(

                'pro_name'=>"'". $_POST['pro_name']."'",
                'brand' =>"'".$_POST['brand']."'" ,
                'pro_quentity' =>"'".$_POST['pro_quentity']."'",
                'pro_details' =>"'".$_POST['pro_details']."'",
                'pro_price'=>"'".$_POST['pro_price']."'",
                'is_active'=>"'".$active."'",
                      ); 
        }

            
            $result=$this->cat_model->update($data);

        
            /*if($result){
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct';</script>";   
        }*/
    }
}
       
      




?>