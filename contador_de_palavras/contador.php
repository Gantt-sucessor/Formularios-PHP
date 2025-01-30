<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $texto = htmlspecialchars($_POST["texto"]);

        $texto = strtolower($texto);

        $textoLimpo = preg_replace("/[[:punct:]\s]/", "", $texto);
        
        $somaLetra = 0;

        for ($i = 0;$i < strlen($textoLimpo); $i++){

            $somaLetra = $somaLetra + ord($textoLimpo[$i]) - 96;
            
        }
        echo "Soma total de letras do texto é: ",$somaLetra;
    }

?>