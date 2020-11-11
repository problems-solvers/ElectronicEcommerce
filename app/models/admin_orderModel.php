<?php
use coreAppNS\Model;
require_once('app/models/cartModel.php');
class userprofielModel extends Model
{
	function __construct(){
		$this->db=new DB();
		//Session::init();
	}
	
	function  getorder(){
		$this->db=new DB();
		//   $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
		 $id=$_SESSION['order_id'];
		// echo $id;
		 $cols=array('product.pro_name','orders.order_id','orders.start_date','orders.total_price','address.country','address.city','address.zip_id','address.street'
		 ,'address.user_name');
		 $table=array("orders");
		$result=  $this->db->cols($cols)
		->table($table)
		//->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
		->innerjoin("address","orders.address_id","address.address_id")
		->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
		->innerjoin("product","oreder_details.pro_id","product.pro_id")
		->get()
		->execute()
		->fetch(); 
        }
        function  getmore(){
            $this->db=new DB();
            //   $_SESSION['user_id']="4e8f4455-1163-11eb-9632-f81654";
             $id=$_SESSION['order_id'];
            // echo $id;
             $cols=array('orders.order_id','orders.start_date','orders.total_price','address.country','address.city','address.zip_id','address.street'
             ,'address.user_name','payment.userbank_id','payment.ex_date','payment.full_name');
             $table=array("orders");
            $result=  $this->db->cols($cols)
            ->table($table)
            //->innerjoin("oreder_details","orders.order_id","oreder_details.order_id")
            ->innerjoin("address","orders.address_id","address.address_id")
            ->innerjoin("payment","orders.payment_id","payment.payment_id")
            ->where("orders.order_id","=","'".$id."'")
            ->where("address.user_id","=","'".$_SESSION['id']."'")
            ->get()
            ->execute()
            ->fetch(); 
            
            if(count($result)>0){
                $x=json_encode($result);
                print_r($x);
        
            }
           // return $result;
           }
}
?>