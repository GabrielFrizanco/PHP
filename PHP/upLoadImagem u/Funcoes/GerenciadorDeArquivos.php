<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function AddArquivo($vetorArquivo, $caminho){
    if ($vetorArquivo['error'] == 0){
        // continuar com o processo
        $nomeOriginal = $vetorArquivo['name'];
        $nomeTemporario = $vetorArquivo["tmp_name"];
        move_uploaded_file($nomeTemporario,
                           $caminho . $nomeOriginal );
    }
}

Function RemoveArquivo($nomeDoArquivo){
    unlink($nomeDoArquivo);
}