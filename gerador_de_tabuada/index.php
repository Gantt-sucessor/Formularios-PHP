<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>

    <form method="POST">
        <label for="numero">Digite um número de 1 a 10: </label>
        <input type="number" name="numero" min="1" max = "10" required>

        <br>

        <label for="tabuada">Escolha o intervalo da tabuada de 1 a 20: </label>
        <input type="number" name="tabuada" min="1" max="20" required>

        <br>

        <button type="submit">Enviar</button>

        <br>

    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        require "tabuada.php";
        
    }   

?>