<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de pessoas</h1>
    <form method="post">

        <label for="nomeInput">Digite seu nome:</label>
        <input type="text" id="nomeInput" name="nomeInput" required>

        <br>

        <label for="emailInput">Digite seu email:</label>
        <input type="text" id="emailInput" name="emailInput" required>

        <br>

        <label for="dataNascimentoInput">Digite sua data de nascimento:</label>
        <input type="date" id="dataNascimentoInput" name="dataNascimentoInput" required>

        <br>

        <label for="senhaInput">Digite sua senha:</label>
        <input type="password" id="senhaInput" name="senhaInput" required>

        <br>

        <label for="confirmacaoSenhaInput">Confirme sua senha:</label>
        <input type="password" id="confirmacaoSenhaInput" name="confirmacaoSenhaInput" required>
        
        <br>

        <button type="submit">Entrar</button>
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $nome = htmlspecialchars($_POST["nomeInput"]);

            $email = htmlspecialchars($_POST["emailInput"]);

            $dataNascimento = htmlspecialchars($_POST["dataNascimentoInput"]);

            $senha = htmlspecialchars($_POST["senhaInput"]);

            $confirmacaoSenha = htmlspecialchars($_POST["confirmacaoSenhaInput"]);

            if ($confirmacaoSenha == $senha){

                echo "Tudo ocorreu bem";
            }else{
                echo "As senha não coencidem, tente novamente";
                
            }
        }
    ?>
</body>
</html>