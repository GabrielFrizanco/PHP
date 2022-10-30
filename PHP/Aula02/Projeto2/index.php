<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./CalcularOperacao.php">
        <div>
            <p>Escolha um número aleatório:</p>
            <input type="number" name="num1" value="0"><br>
            <p>Escolha outro número aleatório:</p>
            <input type="number" name="num2" value="0"><br>
            <p>Digite uma das operações: (+, -, (X, x or *) ou /)</p>
            <input type="text" name="operacao"><br> 
            <input type="submit" value="Calcular Operação">
        </div> 
    </form>
</body>
</html>