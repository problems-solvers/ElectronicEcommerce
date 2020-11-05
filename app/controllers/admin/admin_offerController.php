<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class admin_offerController extends Controller{
public $controller;
public $model;
public $cat_model;




public function __construct($function){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('Offer');
        $this->cat_model=$this->controller->model_object->create_model('product');
        $this->$function();
        
       }
       function admin_offer(){
         
         $this->controller->view_object->create_view('admin/admin_offer');

       }
      
       function addOffer(){
              $items=array(
                     'product'=>$this->cat_model->getQuery(),
                 );
         $this->controller->view_object->create_view('admin/AddOffer',$items);
              
       }

    

       



}


?>