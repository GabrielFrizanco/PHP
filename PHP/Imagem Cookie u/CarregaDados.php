<?php
include_once './funcoes/Geral.php';

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$nome = filter_input(INPUT_POST, 
        "nome",FILTER_SANITIZE_STRING);
if (isset($_FILES["imagemUpload"])){
    $arquivo = $_FILES["imagemUpload"];
}
else{
    $arquivo = array();
}
//echo var_dump($nome),"<br>"
//        ,var_dump($arquivo);
$nomeImagem = gravaImagem($arquivo
               ,"imagens\\");
if ( $nomeImagem !== ""){
    echo "consegui gravar a imagem " 
         .$nomeImagem ;
    $avatar = array();
     array_push($avatar,$nome);
     array_push($avatar, $nomeImagem);
     
     adicionaAvatar($avatar);
}
else{
    echo "Erro ao gravar a imagem";
}
header("location:index.php");
