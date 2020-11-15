<?php
use coreAppNS\Model;
require_once('app/models/cartModel.php');
class admin_orderModel extends Model
{
	function __construct(){
		$this->db=new DB();
		//Session::init();
	}
	
	function  getorder(){
        $this->db=new DB();
         $cols=array('orders.order_id','orders.start_date','orders.deliver_date','orders.order_status','orders.total_price');
            
        $table=array("orders");
           $result=  $this->db->cols($cols)
           ->table($table)
           ->innerjoin("address","orders.address_id","address.address_id")
           ->get()
           ->execute()
           ->fetch();
           return $result;
        
        
       // return $result;
       }
       
function  getmore(){
    $this->db=new DB();
    //   $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
     $id=$_REQUEST['id'];
    // echo $id;
     $cols=array('orders.order_id','orders.start_date','orders.total_price','address.country','address.city','address.zip_id','address.street'
     ,'address.user_name','payment.userbank_id','payment.ex_date','payment.full_name','product.pro_name','product.main_img','oreder_details.quentity','product.pro_price');
     $table=array("orders");
    return $this->db->cols($cols)
    ->table($table)
    ->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
    ->innerjoin("product","oreder_details.pro_id","product.pro_id")
    ->innerjoin("address","orders.address_id","address.address_id")
    ->innerjoin("payment","orders.payment_id","payment.payment_id")
    ->where("orders.order_id","=","'".$id."'")
    ->get()
    ->execute()
    ->fetch(); 
    
    
   // return $result;
   }
}
?>