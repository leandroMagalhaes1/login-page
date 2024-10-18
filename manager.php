<?php
$username = null;
$password = null;

$username = $_POST["username"];
$password = $_POST["password"];

if($username != "admin" || $password != "123"){
    echo "sem sucesso";
}else{
    echo "login com sucesso";
}
