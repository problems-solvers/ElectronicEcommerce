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
            'product'=>$this->cat_model->view_more(),
        );
        $this->controller->view_object->create_view('admin/view_product',$items);
       }

       function add(){
        $uuid=baseFunctions::uuid();
        $tag=baseFunctions::uuid();
        $tag_details_id=baseFunctions::uuid();

        $_POST['tag_details_id']= $tag_details_id;
        $_POST['pro_id']= $uuid;
        $_POST['tag_id']= $tag;
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
            $data2 = array(
                'tag_id' =>"'".$_POST['tag_id']."'",
                'tag_name' =>"'".$_POST['tag_name']."'"                );
                $tag_data='';
                if(!isset($_POST['tag_name'])){
                       
                       $this->controller->view_object->create_view('admin/addTags');
                }
                else{
               
                       print_r( $_POST);
                       $uuid=baseFunctions::uuid();
                       print_r( $_POST['field']);
                       foreach( $_POST['field'] as $filed)
                       {
                              $tag_data.=$filed.',';
                       }
          $data3 = array(
                  'tag_id' =>"'".$_POST['tag_id']."'",
                  'pro_id' =>"'".$_POST['pro_id']."'",
                 'tag_details_id' =>"'".$_POST['tag_details_id']."'",
                 'tag_data' =>"'".$tag_data."'"
                 );
                
           $result= $this->tag_model->addTags($data2);
           $result2= $this->cat_model->add($data);

           if(!$result)
          { 
            if(!$result2) {
                $result3= $this->tag_model->addTagsDetails($data3);

                 if( $result3)
           {
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/addProduct';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product';</script>";
           }}
        
        }
          
       }

    }
    function update(){
        $_POST['create_date']='NOW()';
        $tag_data='';
        foreach ($_POST['field'] as $key=>$val)
        {
            $tag_data .=$val.',';
        }

        $img=baseFunctions::img($_FILES['pro_imgs']);
        $main_img=baseFunctions::main_img($_FILES['main_img']);
        $data = array(
            'pro_name'=>"'". $_POST['pro_name']."'",
            'brand' =>"'".$_POST['brand']."'" ,
            'pro_imgs' =>"'".$img."'" ,
            'pro_quentity' =>"'".$_POST['pro_quentity']."'",
            'pro_details' =>"'".$_POST['pro_details']."'",
            'pro_price'=>"'".$_POST['pro_price']."'",
            'is_active'=>"'".$_POST['is_active']."'",
            'main_img' =>"'".$main_img."'",
             

                  );

                  $data2=array(
                    'tag_name'=>"'".$_POST['tag_name']."'",
                  );
                 /* $data3=array( 
                      'tag_data'=>"'".$tag_data."'",
                );*/
                
           $result=$this->cat_model->update($data);
           //$result1=$this->cat_model->tagdetailUpdate($data3);
           $result2=$this->cat_model->tagUpdate($data2);
          if( $result)
           {
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/';</script>";
           }
           else{
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_product/updateProduct';</script>";
           }
       }
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
      

}


?>