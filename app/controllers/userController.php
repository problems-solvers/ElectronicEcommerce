<?php
use coreAppNS\Controller;
class userController extends Controller
{
    public $controller;
    public $model;
	public function __construct($fun='user')
	{
        $this->controller=new Controller();
        $this->model=$this->controller->model_object->create_model('user');
        $this->$fun();
       
    }
    function user(){
	}
	function register(){
        $this->controller->view_object->create_view('register');

	}
	function login(){
        $this->controller->view_object->create_view('login');

	}
function signup(){
	$this->controller->view_object->create_view('register');
		$user_name=$_POST['user_name'];
		$user_name=$_POST['user_email'];
		$count=$this->model->check_user($user_name,$user_name);
					if($count > 0){
						echo 'This User Already Exists';
					}

					else{
						$uuid=baseFunctions::uuid();

						$_POST['user_id']= $uuid;
						$_POST['create_date']= date('Y-m-d H:i:s');
		$data = array(
		'user_id' =>"'".$_POST['user_id']."'",
		'first_name' =>"'".$_POST['first_name']."'",
		'last_name' =>"'".$_POST['last_name']."'",
		'user_name' =>"'".$_POST['user_name']."'",
		'user_email' =>"'".$_POST['user_email']."'",
		'user_role' =>"'".$_POST['user_role']."'",
		'create_date' =>"'".$_POST['create_date']."'",
		'user_password' =>"'".md5($_POST['user_password'])."'"
		);
		$this->model->signup($data);
					}
//  header('location:home');
}

	function run()
	{    $this->controller->view_object->create_view('login');

		$this->model->login();
	//s	header('location: home');
	}
	
	function logout()
	{
		Session::destroy();
		header('location: ');
		exit;
	}
	function changepassword() {
				
		$this->controller->view_object->create_view('changepassword');
	}
	function runchangepassword() {
		   if(md5($_POST['oldpassword'])==Session::get('user_password')){
			$arg=$_POST['id'];
			$data=array(
				'user_password'=>"'".md5($_POST['confirmpassword'])."'"
				   );
	
	 $this->model->changepassword($data,$arg);
	 echo "Your Password is updated Successfully.";
	
		 }
		 else{
			echo "You Entered an Invalid Password.";
			
		}
		
	}
	function forgotpassword(){
		if(isset($_POST['forgot']))
        {
		$this->controller->view_object->create_view('forgotpassword');

		$user_email=$_POST['user_email'];
		$this->model->forgotpassword($user_email);
		
	
		}
		$this->controller->view_object->create_view('forgotpassword');
		
		}
}
?>