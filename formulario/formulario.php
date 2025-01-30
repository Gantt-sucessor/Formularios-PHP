<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuarioInput = htmlspecialchars($_POST["usuarioInput"]);
    $usuarioInput2 = htmlspecialchars($_POST["usuarioInput2"]);

    $soma = $usuarioInput + $usuarioInput2;

    echo "<h1>Sua soma ficou:</br>";
    echo "<p>". $soma . "</p>";
}else{

    echo "<h1>Formulario não enviado corretamente.</h1>";
}
?>