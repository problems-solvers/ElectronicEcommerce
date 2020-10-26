<?php
use coreAppNS\Controller;
require_once("vendor/autoload.php");
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
	



	public  function googlelogin(){
			$client = new Google_Client();
	
			//Set the OAuth 2.0 Client ID
			$client->setClientId('318750552418-n8to6u7i78qq2vbfmksb25k0r80bbic3.apps.googleusercontent.com');
			
			//Set the OAuth 2.0 Client Secret key
			$client->setClientSecret('LT5navFfz7TOt3dqr-CgJluU');
			
			//Set the OAuth 2.0 Redirect URI
			$client->setRedirectUri('http://localhost/ElectronicEcommerce/user/googlelogin');
			
			//
			$client->addScope('email');
			
			$client->addScope('profile');
			if(isset($_GET['code'])){

				$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
				//if(!isset($token["error"])){
			
					$client->setAccessToken($token['access_token']);
			
					// getting profile information
					$google_oauth = new Google_Service_Oauth2($client);
					$google_account_info = $google_oauth->userinfo->get();
				
					// Storing data into database
					$id = $google_account_info->id;
					$full_name = trim($google_account_info->name);
					$email = $google_account_info->email;
					$profile_pic =  $google_account_info->picture;
					echo $id,$full_name ,$email,$profile_pic;
					
					echo 'from login ERADAH api';
					// $count=$this->model->check_user($full_name,$email);
					// 			if($count > 0){
					// 				echo 'This User Already Exists';
					// 			}
			
					// 			else{
					// 				$uuid=baseFunctions::uuid();
			
					// 				$_POST['user_id']= $uuid;
					// 				$_POST['create_date']= date('Y-m-d H:i:s');
					// $data = array(
					// 'user_id' =>"'".$_POST['user_id']."'",
					// 'first_name' =>"'".$_POST['first_name']."'",
					// 'last_name' =>"'".."'",
					// 'user_name' =>"'".$full_name."'",
					// 'user_email' =>"'".$email."'",
					// 'user_role' =>"'3'",
					// 'create_date' =>"'".$_POST['create_date']."'",
					// 'user_password' =>"'".md5($_POST['user_password'])."'"
					// );
					// $this->model->signup($data);
					// checking user already exists or not
					// $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `users` WHERE `google_id`='$id'");
					// if(mysqli_num_rows($get_user) > 0){
			
					// 	$_SESSION['login_id'] = $id; 
					// 	header('Location: home.php');
					// 	exit;
			
					// }
					// else{
			
					// 	// if user not exists we will insert the user
					// 	//$insert = mysqli_query($db_connection, "INSERT INTO `users`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");
			
					// 	if($insert){
					// 		$_SESSION['login_id'] = $id; 
					// 		header('Location: home.php');
					// 		exit;
					// 	}
					// 	else{
					// 		echo "Sign up failed!(Something went wrong).";
					// 	}
			
					// }
			
				//}
				// else{
				// 	header('Location: login.php');
				// 	exit;
				// }
			}	
			else{
				echo 'from login jjapi';
				header('Location: ' . $client->createAuthUrl());
				//$this->controller->view_object->create_view('login');
			}
		 
		}	
	
	}
?>