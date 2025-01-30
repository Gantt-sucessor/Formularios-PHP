<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $altura = htmlspecialchars($_POST["altura"]);
        $peso = htmlspecialchars($_POST["peso"]);

        $imc = $peso / ($altura) ** 2;

        if ($imc < 16){
            echo $imc;
            echo "Magreza Grave";
        }else
            if($imc > 18.6 && $imc < 24.9){
                echo "Peso ideal";
            }else
                if($imc > 40){
                    echo "Obesidade mórbida";
                }
    }   

?>