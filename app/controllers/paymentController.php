<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

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
           // 'order'=>$this->model->getorder(),
            'address'=>$this->model->getaddress(),
            'paymentAccounts'=>$this->model->getPayments(),
            'products'=>$this->model->getpro(),
            'adminAccount' =>$this->model->getAdminAccount(),
        );
        $this->controller->view_object->create_view('payment', $items);    
       }
       function show_payment(){
       // $_SESSION['oreder_id']="b2d477ad-7c4e-4a13-bb2b-292b3e";
           $id=$_SESSION['oreder_id'];
        //getpro
        $items=array(
            'order'=>$this->model->getorder(),
            'products'=>$this->model->getpro(),
        );
      
        $this->controller->view_object->create_view('show_payment',$items);    
       }
       function updateStatus(){
        $data = array(
<<<<<<< HEAD
             'order_status' =>"2"
                   
||||||| f2d44ff
    
            
            'order_status' =>"2"
                   
=======
            'order_status' =>$_REQUEST['status']  
>>>>>>> 8986d52115b77c0dcfbb7983c2bd7f4ada9001cd
            );
           

           $result= $this->model->updatestatus($data);
           if($result== 'done'){
            $_SESSION['order_id']='';
           $x=array($result);
           print_r(json_encode($x));
           }
        // $this->controller->view_object->create_view('cart');
        // $_SESSION['order_id']='';
    
       }
       function delete(){
            $this->model->delete();
        $this->controller->view_object->create_view('cart');   
        $_SESSION['order_id']='';
       }

  

      //  function updateAdress(){
      //   $data = array(
      //       'address_id' =>"'".$_POST['address_id']."'",
      //       'order_id' =>"'".$_POST['order_id']."'",
      //       'total_price' =>"'".$_POST['total_price']."'",
                   
      //       );
      //   $this->model->update($data);
        
      //  }

       function addAdress(){
        if($_SESSION['order_id']){
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
       $result  = $this->model->addNewAddress($data);
       if($result=='done') {
        $data2=array(
          'address_id'=>"'".$uuid."'",
        );
        $this->model->update($data2);

       }
      }else{
        $x=array('noorder');
        print_r(json_encode($x));
      }
           
      }
      function updateOrderAddress(){
        if(isset($_SESSION['order_id'])){
          $data2=array(
               'address_id'=>"'".$_REQUEST['address_id']."'",
          );
         $this->model->update($data2);  
        }else{
          $x=array('noorder');
          print_r(json_encode($x));
        }  
      }
     function addPayment(){
      if($_SESSION['order_id']){
          $uuid=baseFunctions::uuid();
        //  Session::set('address_id',$uuid);
          $user_id= Session::get('id'); 
  
              $data = array(
                'payment_id' =>"'".$uuid."'",
                'full_name' =>"'".$_REQUEST['full_name']."'",
                'userbank_id'=>"'". $_REQUEST['bank_account']."'",
                'ex_date'=>"'".$_REQUEST['Exp_date']."'",
                'user_id' =>"'". $user_id."'",
                'is_admin' =>"0",
                'user_id'=>"'".$user_id."'"
                       
              );
                $result1=  $this->model->addNewPayment($data);
            if( $result1=='done'){
               $data2=array(
                'payment_id'=>"'".$uuid."'",
               );
              $this->model->update($data2);
              
            }else{
             $x=array('didntadd');
             print_r(json_encode($x));
           }
        }else{
          $x=array('noorder');
          print_r(json_encode($x));
        }
        }
  
         function updateOrderBAccount(){
          if(isset($_SESSION['order_id'])){
            $data2=array(
              'payment_id'=>"'".$_REQUEST['payment_id']."'",
         );
       $this->model->update($data2); 
          }else{
            $x=array('noorder');
            print_r(json_encode($x));
          }    
      }

}


?>