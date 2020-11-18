<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class userprofielController extends Controller{
public $controller;
public $model;
public $model_order;
public $model_payment;
    function __construct($fun ='userprofiel'){

        $this->controller =new Controller();
        
        $this->model=$this->controller->model_object->create_model('userprofiel');
        $this->model_payment=$this->controller->model_object->create_model('payment');
        $this->model_order=$this->controller->model_object->create_model('order');
        $this->$fun();

       }

    function userprofiel(){
           
    $items=array(
        'userprofiel'=>$this->model->check_userprofiel(),
    );
    $this->controller->view_object->create_view('userprofiel',$items);
   }
   function address(){
           
    $items=array(
        'address'=>$this->model->user_address(),
    );
    $this->controller->view_object->create_view('viewAddress',$items);
   }
   function AddAddress(){
           
    $items=array(
        'address'=>$this->model->user_address(),
    );
    $this->controller->view_object->create_view('addAddress',$items);
   }
   function NewAddress(){
    $uuid=baseFunctions::uuid();
     $_POST['address_id']=$uuid;
    $data = array(
        'address_id' =>"'".$_POST['address_id']."'",
        'user_id' =>"'".$_REQUEST['user_id']."'",
        'country' =>"'".$_REQUEST['country']."'",
        'city' =>"'".$_REQUEST['city']."'",
        'street' =>"'".$_REQUEST['street']."'",
        'user_name' =>"'".$_REQUEST['user_name']."'",
        'zip_id' =>"'".$_REQUEST['zip_id']."'"
        );
        $result=$this->model_payment->addNewAddress($data);
        //print_r($_POST);
        if($result=='done') {
          echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/AddAddress/';</script>";
         }
         else{
          echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/address/';</script>";

         }
        
   }

   function updateAddress(){
           
    $items=array(
        'address'=>$this->model->update_address(),
    );
    $this->controller->view_object->create_view('updateAddress',$items);
   }
      function update_old_address()
      {
        $data = array(
            'address_id' =>"'".$_REQUEST['address_id']."'",
            'user_id' =>"'".$_REQUEST['user_id']."'",
            'country' =>"'".$_REQUEST['country']."'",
            'city' =>"'".$_REQUEST['city']."'",
             'user_name' =>"'".$_REQUEST['user_name']."'",
            'street' =>"'".$_REQUEST['street']."'",
            'zip_id' =>"'".$_REQUEST['zip_id']."'"
            );
            $result=$this->model->UpdateAddress($data);
            //print_r($_POST);
            if($result=='done') {
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/AddAddress/';</script>";
             }
             else{
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/address/';</script>";
    
             }
      }

   function delAddress(){
    
    $result=$this->model->deladdress($_REQUEST['address_id']);
    //print_r($_POST);
    if($result=='done') {
      echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/address/AddAdress/';</script>";
     }
     else{
      echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/address/';</script>";

     }
   }

   function payment(){
           
    $items=array(
        'payment'=>$this->model->user_payment(),
        //'payment'=>$this->model->user_payment(),
    );
    $this->controller->view_object->create_view('viewpayment',$items);
   }
   function Newpayment(){
    
    $uuid=baseFunctions::uuid();
    $_POST['payment_id']=$uuid;
   $data = array(
       'payment_id' =>"'".$_POST['payment_id']."'",
       'user_id' =>"'".$_REQUEST['user_id']."'",
       'full_name' =>"'".$_REQUEST['full_name']."'",
       'ex_date' =>"'".$_REQUEST['Exp_date']."'",
       'userbank_id' =>"'".$_REQUEST['bank_account']."'",
       'is_admin' =>"0",
    );
       $result=$this->model_payment->addNewPayment($data);
       //print_r($_POST);
       if($result=='done') {
         echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/payment/addPayment/';</script>";
        }
        else{
         echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/payment/';</script>";

        }
   }


   function addPayment(){
           
    $items=array(
        'payment'=>$this->model->user_payment(),
    );
    $this->controller->view_object->create_view('addpayment',$items);
   }
   function updatepayment(){
           
    $items=array(
        'payment'=>$this->model->update_payment(),
    );
    $this->controller->view_object->create_view('updatepayment',$items);
   }
   
  
      function update_old_payment()
      {
        $data = array(
            'payment_id' =>"'".$_POST['payment_id']."'",
            'user_id' =>"'".$_REQUEST['user_id']."'",
            'full_name' =>"'".$_REQUEST['full_name']."'",
            'ex_date' =>"'".$_REQUEST['Exp_date']."'",
            'userbank_id' =>"'".$_REQUEST['bank_account']."'",
            'is_admin' =>"0",
         );
            $result=$this->model->UpdatePayment($data);
            //print_r($_POST);
            if($result=='done') {
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/AddAddress/';</script>";
             }
             else{
              echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/address/';</script>";
    
             }
      }
   function delpayment(){
    
    $result=$this->model->delpayment($_REQUEST['payment_id']);
    //print_r($_POST);
    if($result=='done') {
      echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/address/AddAdress/';</script>";
     }
     else{
      echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/userprofiel/address/';</script>";

     }
   }
   
   

function order(){
        $items=array(
            'order'=>$this->model_order->getorder(),
        );
        $this->controller->view_object->create_view('vieworder', $items);
    }

    function viewmore(){
      $items=array(
          'orders'=>$this->model_order->getmore(),
      );
     

      $this->controller->view_object->create_view('view_more', $items);
  }
}

  ?>
       
  