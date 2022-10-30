Texto Cifrado:

<?php

if( isset($_REQUEST["str1"]) == true) {
            $string1 = $_REQUEST["str1"];
        
            echo (criptoCesar($string1,+3)) ;
          
}
         
        else {
            $string1= NULL;
                 
        }
        ?>
<br>

Texto Decifrado:

    <?php
        if( isset($_REQUEST["str2"]) == true){
            
            $string2 = $_REQUEST["str2"];
            echo (criptoCesar($string2,-3));
        }
        
        else{
            $string2 = NULL;
        }
        
        
        function criptoCesar($str, $shift)
{
    $char = range('a', 'z');
    $flip = array_flip($char);

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array(strtolower($str{$i}), $char)) {
            $ord = $flip[strtolower($str{$i})];

            $ord = ($ord + $shift) % 26;

            if ($ord < 0) $ord += 26;

            $str{$i} = ($str{$i} == strtolower($str{$i})) ? $char[$ord]
                                                          : strtoupper($char[$ord]);
        }
    }

    return $str;
}
?>

