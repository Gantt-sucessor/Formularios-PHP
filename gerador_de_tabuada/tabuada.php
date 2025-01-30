<?php
    $numero = htmlspecialchars($_POST["numero"]);
    $intervalo = htmlspecialchars($_POST["tabuada"]);

    for ($i = 1; $i <= $intervalo; $i++){
        
        $resultado = $numero * $i;
        printf("<br>{$numero} x {$i} = {$resultado}");
    }
?>