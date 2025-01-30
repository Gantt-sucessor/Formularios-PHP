<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post">

        <label for="soma">Soma</label>
        <input type="radio"  name="operacao" value="soma"  required>

        <br>

        <label for="subtracao">Subtracao</label>
        <input type="radio" name="operacao" value="subtracao"  required>

        <br>

        <label for="multiplicacao">Multiplicacao</label>
        <input type="radio"  name="operacao" value="multiplicacao"  required>

        <br>

        <label for="divisao">Divisao</label>
        <input type="radio" name="operacao" value="divisao"  required>

        <br>
        <br>

        <label for="usuarioInput2">Digite o primeiro número:</label>
        <input type="number" id="usuarioInput2" name="usuarioInput2" required>

        <br>

        <label for="usuarioInput3">Digire o segundo número:</label>
        <input type="number" id="usuarioInput3" name="usuarioInput3" required>

        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$operacao = htmlspecialchars($_POST["operacao"]);

$usuarioInput2 = htmlspecialchars($_POST["usuarioInput2"]);
$usuarioInput3 = htmlspecialchars($_POST["usuarioInput3"]);

    switch($operacao){

        case "soma":
             
            $resultado = $usuarioInput2 + $usuarioInput3;
            printf("<h1>Resultado ficou: %d</h1>",$resultado);

            break;
        
        case "subtracao":

            $resultado = $usuarioInput2 - $usuarioInput3;
            printf("<h1>Resultado ficou: %d</h1>",$resultado);

            break;
        
        case "multiplicacao":

            $resultado = $usuarioInput2 * $usuarioInput3;
            printf("<h1>Resultado ficou: %d</h1>",$resultado);

            break;

        case "divisao":

            $resultado = $usuarioInput2 / $usuarioInput3;
            printf("<h1>Resultado ficou: %.1f</h1>",$resultado);

            break;
    }
        
}

?>