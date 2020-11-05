<?php
use coreAppNS\Controller;
use coreAppNS\baseFunctions;

require_once("vendor/autoload.php");
include("app/config/config.php");

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
		'user_role' =>"'2'",
		'create_date' =>"'".$_POST['create_date']."'",
		'user_password' =>"'".md5($_POST['user_password'])."'"
		);
		$this->model->signup($data);
		$_SESSION['user_name']=$_POST['user_name'];
		$_SESSION['user_role']=1;
					}
//  header('location:home');
}
	function run(){
		$this->model->login();
		
	//s	header('location: home');
	}
	function logout()
	{
		Session::destroy();
		header('location:login');
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
					$password = $google_account_info->password;
					$profile_pic =  $google_account_info->picture;
					echo $id,$full_name ,$email,$profile_pic,$password;
					
					echo 'from login ERADAH api';
					$count=$this->model->check_user($full_name,$email);
								if($count > 0){
									header('Location:http://localhost/ElectronicEcommerce/user/login');
									echo '<script> alert (This User Already Exists);</script>';

								}
			
				 			else{
									$uuid=baseFunctions::uuid();
			
									$_POST['user_id']= $uuid;
								    $_POST['create_date']= date('Y-m-d H:i:s');
					                $data = array(
					                'user_id' =>"'".$_POST['user_id']."'",
					                'first_name' =>"'".$full_name."'",
					                'user_name' =>"'".$full_name."'",
					                'user_email' =>"'".$email."'",
					                 'user_role' =>"'3'",
					                'create_date' =>"'".$_POST['create_date']."'",
									'user_password' =>"'".md5($password)."'"
					 );
					 $login=$this->model->signup($data);
					 if(!empty($login)){
						header('Location:http://localhost/ElectronicEcommerce/user/login');
						print_r($_SESSION);
						}
						else{
							$_SESSION['login_id'] = $id;
							$_SESSION['user'] = $full_name;
							$_SESSION['password'] = $password;
							$_SESSION['email'] = $email;

							header('Location:<?php $_SERVER["REQUEST_URL"]?> /');
							exit;
							print_r($_SESSION);
							

						}

				}
					
			}	
			else{
				echo 'from login jjapi';
				header('Location: ' . $client->createAuthUrl());
				//$this->controller->view_object->create_view('login');
			}
		 
		}	



	public  function facebooklogin(){

		$facebook = new Facebook\Facebook([
			'app_id' => '818569348900143',
			'app_secret' => '7e478379d0cc6c29d8f3c038f75fd3fd',
			'default_graph_version' => 'v2.10',
		   ]);
		   $helper = $facebook->getRedirectLoginHelper();
		   if (isset($_GET['state'])) {
			$helper->getPersistentDataHandler()->set('state', $_GET['state']);
		}
		try{

			$accessToken=$helper->getAccessToken();
		}catch(Facebook\Exceptions\facebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			  exit();
			}catch(Facebook\Exceptions\FacebookSDKException $e) {
				// When validation fails or other local issues
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				  exit();
				}

		if(!$accessToken){
			header('Location: http://localhost/ElectronicEcommerce/user/login');
			exit();
		}
		$oAuth2Client =$facebook->getOAuth2Client();
		if(!$accessToken->IsLongLived())
		
			$accessToken=$oAuth2Client->getLongLivedAccesToken($accessToken);
			$respons=$facebook->get('/me?fields=name,first_name,last_name,email',$accessToken);
			$userData=$respons->getGraphNode()->asArray();
			$_SESSION['userData']=$userData;
			$_SESSION['access_token']=(string) $accessToken;
			$picture = $respons->getGraphUser();
			$profile = $respons->getGraphUser();
			$fbid = $profile->getProperty('id');           // To Get Facebook ID
			$fbfullname = $profile->getProperty('name');   // To Get Facebook full name
			$fbFirstname = $profile->getProperty('first_name');   // To Get Facebook full name
			$fblastname = $profile->getProperty('last_name');   // To Get Facebook full name
			$fbemail = $profile->getProperty('email');    //  To Get Facebook email
			$fbpic = "<img src='".$picture['url']."' class='img-rounded'/>";
			# save the user nformation in session variable
		
			$count=$this->model->check_user($fbfullname,$fbemail);
			if($count > 0){
				header('Location: http://localhost/ElectronicEcommerce/user/login/');
				exit();			
				echo"insede if ";			
			}
									else
									{
			echo "else ";
			
			$uuid=baseFunctions::uuid();
			
									$_POST['user_id']= $uuid;
								    $_POST['create_date']= date('Y-m-d H:i:s');
					                $data = array(
					                'user_id' =>"'".$_POST['user_id']."'",
					                'user_name' =>"'".$fbfullname."'",
					                'first_name' =>"'".$fbFirstname."'",
					                'last_name' =>"'".$fblastname."'",
					                'user_email' =>"'".$fbemail."'",
					                 'user_role' =>"'3'",
					                'create_date' =>"'".$_POST['create_date']."'"					 );
					 $login=$this->model->signup($data);
			if(!empty($login)){
			   header('Location:http://localhost/ElectronicEcommerce/user/login/');
			   print_r($_SESSION);
			   }
			   else{
				   
				$_SESSION['login_id'] = $fbid;
				$_SESSION['user'] = $fbfullname;
				$_SESSION['fb_lastname'] = $fblastname;
				$_SESSION['email'] = $fbemail;
				$_SESSION['fb_pic'] = $fbpic;
				   header('Location:<?php $_SERVER["REQUEST_URL"]?> /');
				   exit;
				   print_r($_SESSION);
				   

			   }
									}

	}


}

?>