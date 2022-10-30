<?php
include_once './Funcoes/GerenciadorDeArquivos.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_FILES["arquivo"])){
    $umArquivo = $_FILES['arquivo'];
    
    AddArquivo($umArquivo, ".\\Imagens\\");
    
    // redireciona par auma página indicada
    header("location:index.php");
}
