<?PHP
use coreAppNS\Route;
use coreAppNS\Controller;
use coreAppNS\View;
use coreAppNS\model;
use coreAppNS\baseFunctions;


include('vendor/src/facebook/autoload.php');
include("app/config/config.php");
include("core/route.php");
include("core/controller.php");
include("core/view.php");
include("core/model.php");
include("core/db.php");
include("core/session.php");
include("app/config/basefunc.php");
include("app/config/config.php");

Session::init();


$url=isset($_GET['url'])?$_GET['url']:"home";
if(isset($_SESSION['user_role']) && $_SESSION['user_role']==1){
    $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
       
        if($clean_url[0]!=='admin'){
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/admin/admin_dashboard';</script>";

        }
}
if(isset($_SESSION['user_role']) && $_SESSION['user_role']==2){
    $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
        if($clean_url[0]=='admin'){
            echo "<script type='text/javascript'>window.location.href = 'http://localhost/ElectronicEcommerce/';</script>";
          
        }
}
//echo $url;
new Route($url);



?>
 

