<?php

include_once '../funcoes/bancoDeDados.php';
$conn = conectar();
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
$sql = "select * from professores where Cod_prof = '$id'";
$resultado = $conn->query($sql);

$sqlDisciplinas = "select * from disciplinas where Cod_prof = '$id'";

$resultadoDisciplinas = $conn->query($sqlDisciplinas);
$linhasProf = $resultado->fetchAll();

$linhasDisc = $resultadoDisciplinas->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (count($linhasProf) == 1) {
        foreach ($linhasProf as $registro) {
            foreach($registro as $campo=>$valor){
                echo "$campo: $valor <br>";
            }
        }
        echo "<br>";
        echo "<table>";
        foreach($linhasDisc as $registro){
            echo "<tr>";
            foreach($registro as $campo=>$valor){
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Erro na execução.";
        die();
    }

    ?>
</body>

</html>