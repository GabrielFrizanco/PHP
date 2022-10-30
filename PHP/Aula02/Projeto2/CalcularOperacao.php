<?php
    $valor1 = $_REQUEST["num1"];
    $valor2 = $_REQUEST["num2"];
    
    if($_REQUEST["operacao"] == "+") {
        $resultado = $valor1+$valor2;
        $operador = "+";
    } else if($_REQUEST["operacao"] == "-"){
        $resultado = $valor1-$valor2;
        $operador = "-";
    } else if($_REQUEST["operacao"] == "X" || $_REQUEST["operacao"] == "x" || $_REQUEST["operacao"] == "*"){
        $resultado = $valor1*$valor2;
        $operador = "X";
    } else if($_REQUEST["operacao"] == "/"){
        $resultado = $valor1/$valor2;
        $operador = "/";
    } else {
        echo "Ops! você escolheu a operação errada!";
    }

    echo "O resultado do $valor1 ".$operador." $valor2 = ". $resultado;
?>