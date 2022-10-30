<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        if (isset($_REQUEST["numFat"]) == true){
            $valor = isset($_REQUEST["numFat"]);
        }else {
            $valor = 0;
        }
        

        function fatorial($fat){
            $resultado = 0;
            if($fat > 1){
                $resultado = $fat * fatorial($fat - 1); 
            }else {
                return 1;
            }
            return $resultado;
        };
        $fat = fatorial($valor);
        echo "O fatorial de $valor é ", $fat;
        
    ?>
</body>
</html>