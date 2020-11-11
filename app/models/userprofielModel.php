<?php
use coreAppNS\Model;
require_once('app/models/cartModel.php');
class userprofielModel extends Model
{
	function __construct(){
		$this->db=new DB();
		//Session::init();
	}
	 function check_userprofiel()
	{ 
		$table=array('user');
		$result= $this->db->cols()
		->table($table)
		
		->where('user_id','=',"'".$_SESSION['id']."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
	}
	function user_address()
	{ 
		$table=array('address');
		$result= $this->db->cols()
		->table($table)
		->where('user_id','=',"'".$_SESSION['id']."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
	}
	function update_address()
	{ 
		$id=$_REQUEST['id'];
		$table=array('address');
		$result= $this->db->cols()
		->table($table)
		->where('user_id','=',"'".$_SESSION['id']."'")
		->where('address_id','=',"'".$id."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
	}
	function UpdateAddress($data){
		$id=$_REQUEST['address_id'];

		$tbls=array('address');
        $updateResult= $this->db->cols($data)->table($tbls)->settingcol()->where("address_id","=","'".$id."'")->update()->execute();

	}
	function user_payment()
	{ 
		$table=array('payment');
		$result= $this->db->cols()
		->table($table)
		->where('user_id','=',"'".$_SESSION['id']."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
	}
	function  deladdress($id){
	
			$tbls=array("address");
			$result=  $this->db->table($tbls)->where("address_id","=","'".$id."'")->where("user_id","=","'".$_SESSION['id']."'")->delete()-> execute();
		
	
	}
	function update_payment()
	{ 
		$id=$_REQUEST['id'];
		$table=array('payment');
		$result= $this->db->cols()
		->table($table)
		->where('user_id','=',"'".$_SESSION['id']."'")
		->where('payment_id','=',"'".$id."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
	}
	function UpdatePayment($data){
		$id=$_REQUEST['payment_id'];

		$tbls=array('payment');
        $updateResult= $this->db->cols($data)->table($tbls)->settingcol()->where("payment_id","=","'".$id."'")->update()->execute();

	}
	function  delpayment($id){
	
		$tbls=array("payment");
		$result=  $this->db->table($tbls)->where("payment_id","=","'".$id."'")->where("user_id","=","'".$_SESSION['id']."'")->delete()-> execute();
	

}

      
	function user_order()
	{ 
		$table=array('orders');
		$result= $this->db->cols()
		->table($table)
		->where('user_id','=',"'".$_SESSION['id']."'")
		->get()
		->execute()
		->fetch();
		
		
		return $result;
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
}
?>