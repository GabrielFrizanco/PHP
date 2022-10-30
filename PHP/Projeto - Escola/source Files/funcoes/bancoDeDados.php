<?php

    function conectar() {
        $dsn = "mysql:host=localhost;dbname=escola";
        $user = "root";
        $senha = "";
        // DIA A CONEXAO COM O BANCO DE DADOS
        // PODE OCORRER ERRO NESTE COMANDO
        // VEREMOS POSTERIORMENTE COMO TRATAR O ERRO.
        $conn = new PDO($dsn,$user,$senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // A LINHA ABAIXO DEIXA CONFIGURADO O RETORNO DO OBJETO PE
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        // RETORNA O OBJETO COM A CONEXAO COM O BANCO DE DADOS.
        return $conn;
    }

?>