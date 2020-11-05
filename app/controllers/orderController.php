<?PHP
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

class orderController extends Controller{
public $controller;
public $model;


    function __construct($fun='order'){

        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('order');
        $this->$fun();    
       }

    
       function order(){

        $this->controller->view_object->create_view('payment', $items);    
       }

       
       
function addorder(){
    $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
   $_SESSION['total_price']=55654;
    if(isset($_SESSION['user_id']))
    {
        $order_details ='';
        $cart_detail=$this->model->getAllcartData($_SESSION['user_id']); 
        if($cart_detail>0)
        {
                $total= $_SESSION['total_price'];
             
            //print_r($cart_detail);
        $uuid=baseFunctions::uuid();
        $_POST['order_id']= $uuid; 
        $_POST['start_date']=date('Y-m-d H:i:s');
        $_POST['total_price']  =$total; 
        $data = array(
            'order_id' =>"'".$_POST['order_id']."'",
            'start_date' =>"'".$_POST['start_date']."'",
            'total_price' =>"'".$_POST['total_price']."'"
                   
            );

            $result=$this->model->addordder($data);

           //print_r($cart_detail);    
                   if($result)
{         
    echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/cart';</script>";

}
else{

    foreach( $cart_detail as $cart){
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
    }
    if( !$order_details)
{$items=array(
    'order_id'=>$_POST['order_id'],

);
       $this->controller->view_object->create_view('payment', $items);    
}
}
          
       }}
       else{
        echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/user/login/';</script>";
       }
    }
}


?>