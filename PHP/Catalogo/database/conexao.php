<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "icatalogo";

$conexao = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno()){
    die("conexao falhou" . mysqli_connect_errno());
}

?>