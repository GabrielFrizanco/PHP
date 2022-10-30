<?php
session_start();
$dtz = new DateTimeZone("America/Sao_Paulo");

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (!isset($_COOKIE["testeDeCookie"])) {

            $tm = new DateTime("now",$dtz);
            setcookie("testeDeCookie", "hora " . $tm->format("H:i:s e"), time() + (20));
        }
        if (isset($_COOKIE)) {
            echo "Cookies <br>";
            foreach ($_COOKIE as $key => $value) {
                echo "Posição $key contém $value", "<br>";
            }
        }

        //informações da Sessão
        echo "Sessão <br>";
        if (isset($_SESSION)) {
            echo htmlspecialchars(SID);
            $_SESSION["teste"] = "Luciano";
            foreach ($_SESSION as $key => $value) {
                echo "Posição $key contém $value", "<br>";
            }
        }
        ?>
        <form action="CalcularDatas.php">
            <label> Data Inicial</label>
            <input type='date' name='dataInicial' value='' /><br>
            <label>Incremento</label>
            <input type="number" name="incremento"><br>
            <input type="submit" value="Calcular"/>
            
            
        </form>
        
        
        
    </body>
</html>
