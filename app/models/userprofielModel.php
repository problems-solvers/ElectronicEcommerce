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
}
?>