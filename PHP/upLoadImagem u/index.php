<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" 
              action="receberArquivo.php"
              enctype="multipart/form-data">
            Escolha um arquivo
            <input type="file" name="arquivo" value="" />
            <br>
            <input type="submit" value="Enviar" />
            
        </form>
        <?php
                $caminho = ".\\Imagens\\";
                $diretorio = opendir($caminho);
                while (($arquivo = readdir($diretorio))!== false){
                    if (filetype($caminho . $arquivo) == "file"){
                        echo "<img src='$caminho$arquivo' width='100' />";
                        echo "<a href='apagarArquivo.php?id=";
                        echo "$caminho$arquivo";
                        echo "'> Apagar </a>";
                        echo "<br>";
                    }
                }
                closedir($diretorio);
        ?>
    </body>
</html>
