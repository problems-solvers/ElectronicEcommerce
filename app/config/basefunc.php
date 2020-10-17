<?php
class baseFunctions{
    public static function Header($url){
        $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
        if($clean_url[0]=='admin')
        require_once("app/views/admin/header.php");
        else
        require_once("app/views/header.php");
    }
    public static function Footer($url){
        $clean_url=rtrim($url,'/');
        $clean_url=explode('/',$clean_url);
        if($clean_url[0]=='admin')
        require_once("app/views/admin/footer.php");
        else
        require_once("app/views/footer.php");
    }
   
    
}

?>