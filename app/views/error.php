<?php 
$error=$_SERVER["REDIRECT_STATUS"];
$error_title='';
$error_massage='';

if($error==404)
{
    $error_title="404 page not found";
    $error_massage="not found";

}

?>

<h1><?php echo $error_title;?></h1>
<h1></h1>