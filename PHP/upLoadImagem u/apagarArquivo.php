<?php
include_once './Funcoes/GerenciadorDeArquivos.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_REQUEST["id"])){
    $id_arquivo = $_REQUEST["id"];
    RemoveArquivo($id_arquivo);
    header("location:index.php");
    
}