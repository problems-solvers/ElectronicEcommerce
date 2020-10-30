<?PHP
use coreAppNS\Controller;
class paymentController extends Controller{
public $controller;
public $model;


    function __construct($fun='payment'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('payment');
        $this->$fun();    
       }

    
       function payment(){

        echo 'hello ^^';
        $items=array(
            'address'=>$this->model->getaddress(),
        );
        $this->controller->view_object->create_view('payment', $items);    
       }

       
       
function addAdress(){
    echo 'hello 2 u';

        $uuid=baseFunctions::uuid();
        $_POST['address_id']= $uuid;     
        $data = array(

            'address_id' =>"'".$_POST['address_id']."'",
            'user_name' =>"'".$_POST['user_name']."'",
            'address' =>"'".$_POST['address']."'",
            'country'=>"'". $_POST['country']."'",
            'city'=>"'".$_POST['city']."'",
            'street' =>"'".$_POST['street']."'",
            'zip_id' =>"'".$_POST['zip_id']."'",
                   
            );
            $this->model->getaddress($data);

          
       }

       function updateAdress(){
        $data = array(
            'address_id' =>"'".$_POST['address_id']."'",
            'order_id' =>"'".$_POST['order_id']."'",
            'total_price' =>"'".$_POST['total_price']."'",
                   
            );
        $this->model->update($data);
       }

function insertAddress(){
    echo"looooool";
    $uuid=baseFunctions::uuid();
    $_POST['address_id']= $uuid;
    $data = array(
        'user_id'=>"'5e7d1872-6a31-482d-9f1b-64fd39'",
        'address_id' =>"'".$_POST['address_id']."'",
        'user_name' =>"'".$_POST['user_name']."'",
        'address' =>"'adress2'",
        'country'=>"'".$_POST['country']."'",
        'city'=>"'".$_POST['city']."'",
        'street' =>"'".$_POST['street']."'",
        'zip_id' =>"'".$_POST['zip_id']."'",
               
        );
        $this->model->addNewAddress($data);
}

			

}


?>