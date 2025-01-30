<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor De Moedas</title>
</head>
<body>
    <h1>Conversor de moedas</h1>

    <form method="post">
        <label for="realValor">Digite um valor em real:</label>
        <input type="number" step="any" id="realValor" name="realValor" required> 

        <br>

        Converter Para:
        <select name="conversorValor">
            <option value="Dolar">Dolar</option>
            <option value="Euro"> Euro</option>
        </select>

        <br>

        <button type="submit">Enviar</button>
        
        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $real = htmlspecialchars($_POST["realValor"]);
            $conversor = htmlspecialchars($_POST["conversorValor"]);
            
            if ($conversor == "Dolar"){
                
                $valor = $real * 6.05;
                printf("<h1>Valor ficou %.2f</h1>",$valor);

            }else
                if($conversor == "Euro"){
                    $valor = $real * 6.28;
                    printf("<h1>Valor ficou: %.2f</h1>",$valor);
                }
        }
        ?>
    </form>
</body>
</html>