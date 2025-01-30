<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    <h1>Verificador de Palíndromo</h1>

    <form method="post">
        <label for="palavraInput">Informe uma palavra para verificação</label>
        <input type="text" id="palavraInput" name="palavraInput" required>
    </form>

    <?php
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $palavra = htmlspecialchars($_POST["palavraInput"]);
            $palavra = strtolower(trim($palavra));
            $palavraInvertida = strrev($palavra);

            if ($palavra === $palavraInvertida){
                echo "<h1>Essa palavra é uma palíndroma!!</h1>";
            }else{
                echo "<h1>Essa palavra não é uma palíndroma!!</h1>";
            }
        }
    ?>
</body>
</html>