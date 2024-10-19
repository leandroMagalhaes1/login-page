<?php

$username = null;
$password = null;


if($username != null && $password != null){
    $username = $_POST["regist_username"];
    $password = $_POST["regist_password"];
}

$login_username = null;
$login_password = null;

$login_username = $_POST["username"];
$login_password = $_POST["password"];

if($username != $login_password || $password != $login_password){
    echo "sem sucesso";
}else{
    echo "login com sucesso";
}
