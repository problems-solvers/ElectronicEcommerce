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
    public static   function uuid(){
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); 
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
    public static function img($img){
    $imgs='';

    $dir='app/assets/images/';
    foreach($img['tmp_name'] as $key=>$image)
{
    $imgname=$img['name'][$key];
    $temp=$img['tmp_name'][$key];
    $new_name=sha1(date("y-m-d-h-i-s")).rand();
    $imgs.=$dir.$new_name.$imgname.',';
    $result=move_uploaded_file($temp, $dir.$imgname);
}
return  $imgs;
} 
public static function main_img($img){
$dir='app/assets/images/';
$new_name=sha1(date("y-m-d-h-i-s")).rand();
$main_img= $dir.$new_name.$img['name'];
$main_temp=$img['tmp_name'];
$main_name=move_uploaded_file($main_temp,$main_img);
return $main_img;
}

   
    
}

?>