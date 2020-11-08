<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_offersController extends Controller{
public $controller;
public $model;
public $cat_model;




public function __construct($function){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('Offer');
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->$function();
        
       }
       function admin_offers(){
             
              $items=array(
                     'discount'=>$this->model->getdiscount(),
                     'extra'=>$this->model->getextra(),
                     'product'=>$this->cat_model->getQuery(),
                     'giff'=> $this->model->getgiff()

              );

         $this->controller->view_object->create_view('admin/offers',$items);

       }
      
       function addOffer(){
              $items=array(
                     'product'=>$this->cat_model->getQuery(),
                 );
         $this->controller->view_object->create_view('admin/Add_offers',$items);
              
       }

       function add(){
              if(isset($_POST['Regarding']) && $_POST['Regarding']!='')
             { 
              $discount_id=baseFunctions::uuid();
              $offer=baseFunctions::uuid();
              $id=baseFunctions::uuid();
      
              $_POST['offer_id']= $offer;
              $_POST['discount_id']= $discount_id;
              $_POST['id']= $id;
             
           
              $data = array(
      
                  'offer_name' =>"'".$_POST['offer_name']."'",
                  'offer_id' =>"'".$_POST['offer_id']."'",
                  'start_date'=>"'". $_POST['start_date']."'",
                  'end_date'=>"'".$_POST['end_date']."'"  ,                
                  'type_id'=>"'".$_POST['Regarding']."'"                  );   
                    
                    
               
                 $result= $this->model->addoffer($data);
                

                if(!$result)
                   { 
                          if($_POST['Regarding']==1)
                         {   
                  $discount = array(
                     'discount_id'=>"'".$_POST['discount_id']."'"   ,
                     'offer_id' =>"'".$_POST['offer_id']."'",
                     'pro_id'=>"'". $_POST['prro_id']."'",
                     'dicount_amont'=>"'".$_POST['dicount_amont']."'"                 
                                   );
                                   echo $_POST['prro_id'];
                     $result2= $this->model->addodiscount($discount); }

                     else if($_POST['Regarding']==2){
                     $extra = array(
                            'id'=>"'".$_POST['id']."'"   ,
                            'offer_id' =>"'".$_POST['offer_id']."'",
                            'pro_id'=>"'". $_POST['product_id']."'",
                           'extra_item_id'=>"'".$_POST['extra_item']."'" ,
                           'qunetity'=>"'".$_POST['qnetity']."'" 
                                                                        );
                     $result2= $this->model->addoextra($extra); }
                     else if($_POST['Regarding']==3)
                    { $giff = array(
                            'id'=>"'".$_POST['id']."'"   ,
                            'offer_id' =>"'".$_POST['offer_id']."'",
                            'pro_id'=>"'". $_POST['pro_id']."'",
                            'description'=>"'".$_POST['dscription']."'" 
                                     );   
                     $result2= $this->model->addogiff($giff);      }                  
                     
                     if( $result2)
                 {
                  echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_offer/Addoffer';</script>";
                 }
                 else{
                  echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_offer/';</script>";
               }
                
       }

}
}
       

}


?>