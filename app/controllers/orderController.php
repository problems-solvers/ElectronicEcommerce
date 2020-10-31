<?PHP
use coreAppNS\Controller;
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
         $cart_id=$_SESSION['cart_id'];
         $order_details ='';
        $cart_detail=$this->model->getAllcartData($cart_id); 
        if($cart_detail>0)
        {
            $cart_total=$this->model->getAllcartTotal($cart_id);
            $total='';
            foreach($cart_total as $ca)
            {
                $total=$ca->total_price;
            } 
           
            print_r($cart_total);
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
        $Quantity=$cart->Quantity;
        $order_id= $_POST['order_id'];
        $uuid=baseFunctions::uuid();
        $_POST['details_id']= $uuid; 
        $data1=array(
            'details_id' =>"'".$_POST['details_id']."'",
            'pro_id' =>"'".$pro_id."'",
            'quentity' =>"'". $Quantity."'",
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
          
       }
    }
    

     

}


?>