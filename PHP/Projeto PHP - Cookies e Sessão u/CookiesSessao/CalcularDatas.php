<?php

$dtz = new DateTimeZone("America/Sao_Paulo");
$datai = new DateTime("now", $dtz);
$i = 1;

if (isset($_REQUEST["dataInicial"])){
    $datai = new DateTime($_REQUEST["dataInicial"],$dtz);
    
    
    
}
if (isset($_REQUEST["incremento"])){
    $i = $_REQUEST["incremento"];
    
}
$dataNova = clone $datai;
date_add($dataNova, date_interval_create_from_date_string("$i days"));

echo "A data fornecida foi: " , $datai->format("d/m/Y e"),"<br>";
echo "O incremento fornecido foi $i <br>";
echo "A data final é ", $dataNova->format(("d/m/Y e")),"<br>";