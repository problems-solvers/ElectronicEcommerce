<?php
use coreAppNS\Model;
require_once('app/models/cartModel.php');
class userModel extends Model
{
	function __construct(){
		$this->db=new DB();
		//Session::init();
	}
	 function check_user($user_name,$user_email)
	{ $table=array('user');
		$result= $this->db->cols()
		->table($table)
		->where('user_name','=',"'".$user_name."'")
		->where('user_email','=',"'".$user_email."'")
		->get()
		->execute()
		->fetch();
		$count = count($result);
		echo $count;
		return $count;
	}
	 function signup($data)
	{$table=array('user');
		$result=  $this->db->cols($data)->table($table)->insert()->execute();
	
	}
	public function login()
	{
		 $table=array('user');		
		$user_name=$_POST['user_name'];
		$user_password=$_POST['user_password'];
		$res= $this->db->cols()
		->table($table)->where('user_name','=',"'".$user_name."'")
		->where('user_password','=',"'".$user_password."'")
		->get()
		->execute()
		->fetch();
		$count = count($res);
		echo "count ".$count;
		print_r($res);
		if ($count > 0) {
			$s=$res[0];
			Session::init();
			
			Session::set('user_role',$s->user_role );
			Session::set('id', $s->user_id);
			Session::set('loggedIn', true);
			Session::set('user_name', $user_name);
			Session::set('user_password', $s->user_password);  
			$this->cartm=new cartModel();
			$this->cartm->addCats();		
			
			
		} 
		   else {
			Session::set('loggedIn', false);
			return ;
		}
		
		
	}
	public function changepassword($data,$arg)
	{$table=array('user');
		print_r( $data);
		$que= $this->db->cols($data)->settingcol()->table($table)->
		where('user_id','=',Session::get('user_id'))->
		update()->execute();
			
	}
	public function forgotpassword($user_email){
		$table=array('user');
		
		$que=$this->db->cols()
		->table($table)
		->where('user_email','=',"'".$user_email."'")
		->get()
		->execute()
		->fetch();
				if((!strcmp($user_email, $que[0]['user_email']))){
						/*Mail Code*/
						$to =  $que[0]['user_email'];
						$subject = "user_password";
						$txt = "Your password is  ".$que[0]['user_email'] ;
						$headers = "From: password@example.com" . "\r\n" .
						"CC: jone@example.com";
						mail($to,$subject,$txt,$headers);
				}
	}
}
?>