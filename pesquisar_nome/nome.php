<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST["nome"]);

        $lista = [
            "Miguel",
            "Arthur",
            "Gael",
            "Théo",
            "Heitor",
            "Ravi",
            "Davi",
            "Bernardo",
            "Noah",
            "Gabriel",
            "Samuel",
            "Pedro",
            "Anthony",
            "Isaac",
            "Benício",
            "Benjamin",
            "Matheus",
            "Lucas",
            "Joaquim",
            "Nicolas"
        ];


        if (in_array(strtolower($nome), array_map("strtolower", $lista))){
            echo "<h1>O nome se encontra na nossa lista</h1>";
        }else{
            echo "<h1>O nome não se encontra na nossa lista</h1>";
        }
    }
?>