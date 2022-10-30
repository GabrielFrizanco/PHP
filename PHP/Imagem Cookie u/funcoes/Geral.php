<?php
session_start();

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function gravaImagem($vetorFile,$caminho){
    $correto = "";
    if ($vetorFile["error"] == 0){        
        $from = $vetorFile["tmp_name"];
        $to = $caminho . time() 
                .$vetorFile["name"] ;
        move_uploaded_file($from, $to);
        $correto = $to;
    }
    else{
        $correto= "";
    }
    return $correto;
}

function lerCookie($nomeDoCookie){
    $vetor = array();
    if (isset($_COOKIE[$nomeDoCookie])){
        $vetor = json_decode($_COOKIE[$nomeDoCookie]);
    }
    return $vetor;
}

function gravarCookie($vetor, 
        $nomecookie,$tempo){
    setcookie($nomecookie
            , json_encode($vetor)
            ,$tempo, "/");
    }

function adicionaAvatar($elemento){
    $meuCookie = lerCookie("osAvatares");
    array_push($meuCookie,$elemento);
    gravarCookie($meuCookie
            , "osAvatares"
            , time() + (365*24*60*60));
}