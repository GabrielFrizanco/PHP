<?php

    include_once '../funcoes/bancoDeDados.php';
    $conn = conectar();
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
    $sql = "select * from professores where Cod_prof = '$id'";
    $resultado = $conn->query($sql);
    $linhas = $resultado->fetchAll();
    if(count($linhas) > 0){
        $registro = $linhas[0];
    } else {
        echo "<h2>ERRO. Nenhum registro encontrado.</h2>";
        $registro["Cod_prof"] = "";
        $registro["Nome"] = "";
        $registro["Sexo"] = "";
        $registro["RG"] = "";
        $registro["Nascimento"] = "";
        $registro["Salario"] = "";
        $registro["CPF"] = "";
    }

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

    <form action="atualizar.php">
        <h1>Editar Professor</h1>
        Código: <input type="text" name="cod_prof" readonly value="<?= $registro['Cod_prof']?>" /><br>
        Nome:<input type="text" name="nome" value="<?= $registro['Nome']?>" /><br>
        CPF:<input type="text" name="cpf" value="<?= $registro['CPF']?>" /><br>
        RG:<input type="text" name="rg" value="<?= $registro['RG']?>" /><br>
        Salário:<input type="text" name="salario" value="<?= $registro['Salario']?>" /><br>
        Data de Nascimento:<input type="text" name="nascimento" value="<?= $registro['Nascimento']?>" /><br>
        Sexo:<select name="sexo">
            <option value="M" <?= $registro["Sexo"] == "M"? "selected" : ""?>>Masculino</option>
            <option value="F" <?= $registro["Sexo"] == "F"? "selected" : ""?>>Feminino</option>
        </select><br>
        <input type="submit" value="Salvar" />
    </form>

</body>

</html>
