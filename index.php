<?PHP
use coreAppNS\Route;
use coreAppNS\Controller;
use coreAppNS\View;
use coreAppNS\model;


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

$url=isset($_GET['url'])?$_GET['url']:"home";
//echo $url;
baseFunctions::Header($url);

new Route($url);

baseFunctions::Footer($url);

?>

