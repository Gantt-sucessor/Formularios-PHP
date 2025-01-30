<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <h1>Cálculo de IMC</h1>

    <form action="imc_calculo.php" method="post">
        <label for="altura">Informe sua altura em metros: </label>
        <input type="number" name="altura" min="0" step="0.01" require>

        <br>

        <label for="peso">Informe seu peso em Kg: </label>
        <input type="number" name="peso" min="0" step="0.01" require>

        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>