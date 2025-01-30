<?php

session_start();

    if(!isset($_SESSION["numero_secreto"])) {
        $_SESSION["numero_secreto"] = rand(1, 100); 
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $numero = htmlspecialchars($_POST["numero"]);

        if ($numero < $_SESSION["numero_secreto"]){
            echo "O número é maior";
        }else
            if($numero > $_SESSION["numero_secreto"]){
                echo "O número é menor";
            }else{
                printf("Você acertou, é o número: {$numero}.");
                session_destroy();
            }   
    }
?>

