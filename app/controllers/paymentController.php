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
       function show_payment(){
        $_SESSION['oreder_id']="eb6d3fd3-023b-409c-83fd-1605be";
           $id=$_SESSION['oreder_id'];
        //getpro
        $items=array(
            'order'=>$this->model->getorder(),
            'product'=>$this->model->getpro($id),
        );
      
        $this->controller->view_object->create_view('show_payment',$items);    
       }

       function updateorder(){
        $data = array(
    
            
            'order_status' =>"2"
                   
            );
            print_r($data);

            $this->model->update($data);
        $this->controller->view_object->create_view('cart');
        $_SESSION['order_id']='';
    
       }
       function delete(){
        

            $this->model->delete();
        $this->controller->view_object->create_view('cart');   
        $_SESSION['order_id']='';
       }

       
       
function addAdress(){
    echo"hello";
    

    if(isset($_POST['formValues']))
    {
        if(isset($_POST['address'])=="new"){
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
            $data = array(
                'address_id' =>"'".$_SESSION['address_id']."'",);
            $this->model->updateupdate($data);
    }
    else{
        echo "insert ";

       echo $_POST['paymentMethod'];
       $_SESSION['address_id']=$_POST['paymentMethod'];
       $data = array(
        'address_id' =>"'".$_SESSION['address_id']."'");
    $this->model->updateupdate($data);
    }

    
}
          
       }

       
       function insertAddress(){
        $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
        echo 'hello 2 u';
            $uuid=baseFunctions::uuid();
            $_GET['address_id']= $uuid;     
            $data = array(
    
                'address_id' =>"jjjj",
                'user_name' =>"hhhhh",
                'user_id' =>"'".$_SESSION['user_id']."'",
                'country'=>"jkjhk",
                'city'=>"jgugu",
                'street' =>"hvhg",
                'zip_id' =>"355555"
                       
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