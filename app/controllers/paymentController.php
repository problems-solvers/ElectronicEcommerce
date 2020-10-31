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

        $items=array(
            'address'=>$this->model->getaddress(),
        );
        $this->controller->view_object->create_view('payment', $items);    
       }

       
       
function addAdress(){
    echo"hello";
    

    if(isset($_POST['formData']))
    {
      echo "insert new";
      $uuid=baseFunctions::uuid();

    $_SESSION['address_id']= $uuid;
        $id=$_SESSION['user_id'];   
        $data = array(

            'address_id' =>"'".$_SESSION['address_id']."'",
            'user_name' =>"'".$_POST['user_name']."'",
            'country'=>"'". $_POST['country']."'",
            'city'=>"'".$_POST['city']."'",
            'street' =>"'".$_POST['street']."'",
            'zip_id' =>"'".$_POST['zip_id']."'",
            'user_id'=>"'".$id."'"
                   
            );
            $this->model->addNewAddress($data);
    }
    else{
        echo "insert ";

       echo $_POST['paymentMethod'];
       $_SESSION['address_id']=$_POST['paymentMethod'];
    }
    
    $data2=array(
            'address_id'=> $_SESSION['address_id'],
    );
     $result1=$this->model->update($data2);
          
       }

       
       function insertAddress(){
        $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
        echo 'hello 2 u';
            $uuid=baseFunctions::uuid();
            $_GET['address_id']= $uuid;     
            $data = array(
    
                'address_d' =>"'".$_GET['address_id']."'",
                'user_name' =>"'".$_GET['user_name']."'",
                'user_id' =>"'".$_SESSION['user_id']."'",
                'country'=>"'". $_GET['country']."'",
                'city'=>"'".$_GET['city']."'",
                'street' =>"'".$_GET['street']."'",
                'zip_id' =>"'".$_GET['zip_id']."'"
                       
                );
                print_r($data);

                $this->model->addNewAddress($data);
    echo"hello me";
              
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