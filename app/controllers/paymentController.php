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
            'paymentAccounts'=>$this->model->getPayments(),
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

        
function addBAccount(){
    echo"hello";
      echo "insert new";
      $uuid=baseFunctions::uuid();

     // Session::set('address_id',$uuid);
      $user_id= Session::get('id');  
       
        $data = array(
            'bank_detail_id' =>"'".$uuid."'",
            'full_name' =>"'".$_REQUEST['full_name']."'",
            'bank_acount'=>"'". $_REQUEST['bank_acount']."'",
            'Exp_date'=>"'".$_REQUEST['Exp_date']."'",
            'status'=>"1",
            'user_id'=>"'".$user_id."'"
                   
            );
        $this->model->addNewBAccount($data);
   
    
       $data2=array(
            'payment_id'=>"'".$uuid."'",
       );
     $result1=$this->model->update($data2);  
       }   
       
function addAdress(){
      $uuid=baseFunctions::uuid();

    //  Session::set('address_id',$uuid);
      $user_id= Session::get('id');  
       
        $data = array(
            'address_id' =>"'".$uuid."'",
            'user_name' =>"'".$_REQUEST['user_name']."'",
            'country'=>"'". $_REQUEST['country']."'",
            'city'=>"'".$_REQUEST['city']."'",
            'street' =>"'".$_REQUEST['street']."'",
            'zip_id' =>"'".$_REQUEST['zip_id']."'",
            'user_id'=>"'".$user_id."'"
                   
            );
        $this->model->addNewAddress($data);
   
    
       $data2=array(
            'address_id'=>"'".$uuid."'",
       );
     $result1=$this->model->update($data2);  
       }
       function updateOrderAddress(){
      
           $data2=array(
                'address_id'=>"'".$_REQUEST['address_id']."'",
           );
         $result1=$this->model->update($data2);
              
       }
       function updateOrderBAccount(){
       
        $data2=array(
             'payment_id'=>"'".$_REQUEST['payment_id']."'",
        );
      $result1=$this->model->update($data2);
           
    }

     
       function updateAdress(){
        $data = array(
            'address_id' =>"'".$_POST['address_id']."'",
            'order_id' =>"'".$_POST['order_id']."'",
            'total_price' =>"'".$_POST['total_price']."'",
                   
            );
        $this->model->update($data);
       }

// function insertAddress(){
//     echo"looooool";
//     $uuid=baseFunctions::uuid();
//     $_POST['address_id']= $uuid;
//     $data = array(
//         'user_id'=>"'5e7d1872-6a31-482d-9f1b-64fd39'",
//         'address_id' =>"'".$_POST['address_id']."'",
//         'user_name' =>"'".$_POST['user_name']."'",
//         'address' =>"'adress2'",
//         'country'=>"'".$_POST['country']."'",
//         'city'=>"'".$_POST['city']."'",
//         'street' =>"'".$_POST['street']."'",
//         'zip_id' =>"'".$_POST['zip_id']."'",
               
//         );
//         $this->model->addNewAddress($data);
// }

			

}


?>