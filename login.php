


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="./assets/img/logo-ico.ico" type="image/x-icon" />
    <title>Login</title>
</head>

<body>


    <div class="painel">
        <h1>Login</h1>
        <form>

            <input placeholder="digite seu nome" type="text" id="nome" name="nome" required><br><br>

            <input placeholder="digite sua senha" type="password" id="senha" name="senha" required><br><br>

            <button type="submit">Entrar</button><br>
            <p>Nâo tem conta? <a href="registro.php">registre-se</a></p><br>
            <a id="voltar" href="index.php">Voltar ao site</a>
        </form>
    </div>

    <style>
        #voltar {
            text-decoration: none;
            color: white;
            font-weight: bold;
            border: 2px solid white;
            border-radius: 5px;
            padding: 10px;

        }

        #voltar:hover {
            background-color: white;
            color: black;
            transition: 0.5s;
        }
    </style>



</body>
<script src="./users.js"></script>

</html>

<?php 

require 'footer.php';
?>