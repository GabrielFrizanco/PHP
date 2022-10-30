<?php

    function muda(&$vetor) {
        $vetor[0] *= 2;
    }

    $numeroInteiro = 0;
    $texto = "bom dia pra quem?";
    $umVetor = array();

    // comandos para imprimir
    // echo
    echo var_dump($numeroInteiro), "</br>";
    echo var_dump($texto), "</br>";
    echo var_dump($umVetor), "</br>";
    // $umVetor[] = 25;
    // $umVetor[] = 30;
    // $umVetor[10] = "hoje";
    // $umVetor[] = "abacaxi";
    // echo var_dump($umVetor);

    // array_push($umVetor, 100);
    // echo var_dump($umVetor);
    $vetorDois = [
        "claudio",
        57,
        "vermelho"
    ];
    echo var_dump($vetorDois);
    // para puxar um valor
    // array_push($vetorDois, "fábio");
    // echo var_dump($vetorDois);

    // função (function)
    echo Fatorial($numeroInteiro, "</br>");
    function Fatorial($numero) {
        $resultado = 1;
        for ($controle = $numero; $controle > 1; $controle--) 
            $resultado = $resultado * $controle;
        return $resultado;
    }
    muda($umVetor);
    echo var_dump($umVetor);
    
    ?>
