<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nome = htmlspecialchars($_POST["nome"]);
        $senha = htmlspecialchars($_POST["senha"]);

        $usuarioesenha = [
            "Gabriel" => 123,
            "Bianca" => 321,
            "Manoel" => 01022003,
            "Vitória" => "amanha",
            "Gustavo" => "senha",
            "Alan" => "teste",
            "Djael" => "a@1",
            "Batata" => 8,
            "Misael" => "pintomole",
            "Dust" => "pepinodenovo"
        ];

        if (isset($usuarioesenha[$nome]) && $usuarioesenha[$nome] === $senha){
            echo "<h1>Login bem sucedido</h1>";
        }else{

            echo "<h1>Usuario ou senha inválidas</h1>";
        }
    }
?>