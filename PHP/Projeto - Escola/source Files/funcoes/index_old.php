<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula - Banco de Dados</title>
</head>
<body>
    <?php
    
        include_once './bancoDeDados.php';
        $conexaoBD = conectar();
        $sqlConsulta = "SELECT table_name FROM information_schema.tables". " WHERE table_schema = 'escola'";
        $resultado = $conexaoBD->query($sqlConsulta);

        while ($registro = $resultado->fetch()){
            echo $registro["table_name"], "<br>";
        }
        echo "Outra consulta<br>";
        $sqlConsulta = "select * from aluno order by nome desc";
        $resultado = $conexaoBD->query($sqlConsulta);
        echo "<br>";
        while ($registro = $resultado->fetch()){
            foreach ($registro as $key => $value){
                // echo "<br>";
                echo $key, " => " , $value , "<br>";
            }
            echo "<br>";
        }

        echo "inserir um registro<br>";
        $tempoinicial = Time();
        echo "Tempo inicial ", $tempoinicial ," <br>";
        $linhas = 0;
        for ($contador = 1; $contador < 10; $contador++){
            $ra = $contador;
            $nome = "Um nome $contador";
            $sqlInsercao = "insert into aluno (Ra,nome)". " value ($ra, '$nome')";
            $linhas += $conexaoBD->exec($sqlInsercao);
        }
        echo "linhas criadas => $linhas</br>";
        $tempofinal = Time();
        $diferenca = $tempofinal - $tempoinicial;

        $sqlPreparado = "insert into aluno (RA,nome)". " values (:ra,:nome)";
        $preparado = $conexaoBD->prepare($sqlPreparado);
        echo "inserir um registro com sql preparado <br>";
        $tempoinicial = Time();
        echo "Tempo inicial " , $tempoinicial ," <br>";
        $linhas = 0;
        for ($contador = 10001; $contador < 10000; $contador++){
            $ra = $contador;
            $nome = "Um nome $contador";
            $preparado->bindParam(":ra", $ra);
            $preparado->bindParam(":nome", $nome);
            $linhas += $preparado->execute(); 
        }
    ?>
</body>
</html>