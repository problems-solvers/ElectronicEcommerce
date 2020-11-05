<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class orderController extends Controller{
public $controller;
public $model;
public $Cartmodel;
public $paymentmodel;



    function __construct($fun='order'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('order');
        $this->Cartmodel=$this->controller->model_object->create_model('cart');
        $this->paymentmodel=$this->controller->model_object->create_model('payment');
        $this->$fun();    
       }

    
       function order(){

        $this->controller->view_object->create_view('payment', $items);    
       }

       
       
 function addorder(){
    if(isset($_SESSION['id']))
    {
    
    $user_id= $_SESSION['id'];
    $order_details = null;
        $cart_detail=$this->model->getAllcartData($user_id); 
        if(count($cart_detail)>0)
        {
         
            //print_r($cart_detail);
           $uuid=baseFunctions::uuid();
           $_POST['order_id']= $uuid; 
           $_POST['start_date']=date('Y-m-d H:i:s');
         
           $data = array(
            'order_id' =>"'".$_POST['order_id']."'",
            'start_date' =>"'".$_POST['start_date']."'",
                
            );
          //  echo 'hii order';
            $result=$this->model->addordder($data);
           // echo '<br> ahaaa', $result;
             //print_r($cart_detail);    
            if($result!='done'){    
                $myObj =array("faildaddedtoOrder");
                $res=json_encode($myObj);;
        
                 echo $res;
              //echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/cart';</script>";
            }else{
                Session::set('order_id',$_POST['order_id']);
                
               foreach( $cart_detail as $cart){
                $_REQUEST['cart_id']=$cart->cart_id;
                 $pro_id=$cart->pro_id;
                 $total_price=$cart->total_price;
                 $quentity=$cart->quentity;
                 $order_id= $_POST['order_id'];
                 $uuid=baseFunctions::uuid();
                 $_POST['details_id']= $uuid; 
                 $data1=array(
                'details_id' =>"'".$_POST['details_id']."'",
                'pro_id' =>"'".$pro_id."'",
                'quentity' =>"'". $quentity."'",
                'total_price' =>"'". $total_price."'",
                'order_id' =>"'". $order_id."'"
                       
                 );
                 $order_details=$this->model->orederdetails($data1);
                 
                 if( $order_details== 'done')
                 $this->Cartmodel->deleteCartItem();
              }
              //  echo $order_details;
            if( $order_details=='done'){
                //$_SESSION['total_price']=55654;
              // $total= $_SESSION['total_price'];
              $totalPrice =  $this->model->orderTotalPrice();
                $items=array(
                  'total_price' =>"'".$totalPrice[0]->total."'"
                );
                $result1=$this->paymentmodel->updatestatus($items);
                if($result1== 'done'){
                //   $this->controller->view_object->create_view('payment', $items); 
                $myObj =array("gotopayment");
                $res=json_encode($myObj);;
        
                 echo $res;     
                }
            }
          }
        }
        else{
            $myObj =array("nothingtoadd");
            $res=json_encode($myObj);;
    
             echo $res;
        }
    }
    else{
        $myObj =array("notlogedin");
        $result=json_encode($myObj);;

         echo $result;
    }
 }
}


?>