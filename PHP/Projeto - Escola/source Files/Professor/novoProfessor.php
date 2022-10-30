<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastro de Professor</h1>
        <form action="incluir.php">
            Código: <input type="text" name="cod_prof" value="" /><br>
            Nome:<input type="text" name="nome" value="" /><br>
            CPF:<input type="text" name="cpf" value="" /><br>
            RG:<input type="text" name="rg" value="" /><br>
            Salário:<input type="text" name="salario" value="" /><br>
            Data de Nascimento:<input type="text" name="nascimento" value="" /><br>
            Sexo:<select name="sexo">
                <option value = "M">Masculino</option>
                <option value = "F">Feminino</option>
            </select><br>
            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>
