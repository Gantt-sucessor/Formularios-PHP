<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinhação</title>
</head>
<body>
    <h1>Adivinhar Número</h1>
    
    <form action="adivinhar.php" method="post">
        <label for="numero">Chute um número entre 1 e 100:</label>
        <input type="number" name="numero" require>

        <br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>