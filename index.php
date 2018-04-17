<?php
header('Access-Control-Allow-Origin: *');
$requestParts = explode('/',$_GET['request']);
$category = $requestParts[0];
$action = $requestParts[1];
$data = $requestParts[2];
/*if($category == 'recipe'){
    include($_SERVER['DOCUMENT_ROOT'].'/pages/add_recipe.php');
}*/
?>