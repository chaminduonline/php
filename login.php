<?php
$username = null;
$password = null;

$path = $_SERVER['REQUEST_URI'];

$params = explode('/',$path);

$username = $params[count($params)-2];
$password = $params[count($params)-1];

if($username=='username' && $password=='password'){
    echo json_encode(array('message'=>true));
}else{
    echo json_encode(array('message'=>false));
}
?>