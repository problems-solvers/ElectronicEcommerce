<?php
include('vendor/src/facebook/autoload.php');

$facebook = new Facebook\Facebook([
    'app_id' => '818569348900143',
    'app_secret' => '7e478379d0cc6c29d8f3c038f75fd3fd',
    'default_graph_version' => 'v2.10',
   ]);
   $helper = $facebook->getRedirectLoginHelper();


?>