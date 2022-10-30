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
    //               ultimo caractere para não bugar a letra Z 
        $alfabeto = array(
            "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
            "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Ç"
        );

        if(isset($_REQUEST["letter"]) == true) {
            $value = $_REQUEST["letter"];
        } else {
            $value = 0;
        }

        $array_one = str_split($value);
        
        $aux = count($array_one);
        
        
        for($i = 0; $i < $aux; $i++){
            $n2 = 0;
            for($n = 0; $array_one[$i] >= $alfabeto[$n]; $n++){
                if($array_one[$i] == $alfabeto[$n]){
                    $n2 = $n +3;
                    if($n2 > 25){
                    $n2 = $n2 -26;
                }
                $array_two[$i] = $alfabeto[$n2];
            }else{
                $array_two[$i] = "//exibir vazio";
            }
            $n = 0;
        }
    }
        echo "<br>As letras serão: ";
        print_r($array_two);

    ?>
</body>
</html>