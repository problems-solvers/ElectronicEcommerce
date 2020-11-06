<?PHP
namespace coreAppNS;

class View{

   function create_view($view_name,$data=""){
    $url=isset($_GET['url'])?$_GET['url']:"home";
    baseFunctions::Header($url);
       require_once("app/views/".$view_name.".php");
       baseFunctions::Footer($url);
   }



}
?>