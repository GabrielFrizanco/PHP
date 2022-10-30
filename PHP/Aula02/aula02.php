<?php
        $numero = 4;

        echo "Fatorial de $numero é ".fatorial($numero);

        // definir uma function
        function fatorial($fat) {
            $resultado = 0;
            if ($fat > 1) {
                $resultado = $fat * fatorial ($fat -1);
            }else {
                return 1;
            }

            return $resultado;
        };
?>
