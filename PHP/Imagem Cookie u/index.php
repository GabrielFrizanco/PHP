<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página para Carregar imagens</title>
    </head>
    <body>
        <h2>Envio de dados para o servidor</h2>
        <form action="CarregaDados.php" 
              method="POST" 
              enctype="multipart/form-data">
            <div>
                <label for="idnome">Nome:</label>
                <input id="idnome" type="text" 
                       name="nome" value="" />
            </div>
            <div>
                <label for="idimagem">Imagem:</label>
                <input id="idimagem" type="file" 
                       name="imagemUpload" />
            </div>
            <div>
                <input type="submit" value="Enviar" /> 
            </div>
        </form>
        <h3>lista de avatares </h3>
        <?php
          include_once './funcoes/Geral.php';
          
          $avatares = lerCookie("osAvatares");
          foreach ($avatares as $key => $umAvatar){ {
              echo "$key - Nome => ", $umAvatar[0];
              echo "<img src='$umAvatar[1]'"
                     . " width='25px'> <br>";
             }
          }
        ?>
    </body>
</html>
