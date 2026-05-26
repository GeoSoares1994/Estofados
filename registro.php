

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <link rel="shortcut icon" href="./assets/img/logo-ico.ico" type="image/x-icon" />
  <title>Registro</title>
</head>

<body>

  <div class="painel">
    <h1>Registro</h1>
    <form method="post">

      <input placeholder="digite seu nome" type="text" id="nome" name="nome" required><br><br>

      <input placeholder="digite sua senha" type="password" id="senha" name="senha" required><br><br>

      <input placeholder="confirme sua senha" type="password" id="confirmar_senha" name="confirmar_senha"
        required><br><br>

      <input placeholder="Seu email" type="email" id="email" name="email"
        required><br><br>

      <input placeholder="confirme seu email" type="email" id="confirmaremail" name="confirmaremail"
        required><br><br>


      <button type="submit">Registrar</button><br>
      <p>já cadastrado? <a href="login.php">Faça login</a></p><br>
      <a id="voltar" href="index.php">Página inicial</a>
    </form>
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

  </div>


</body>

</html>

<?php
require 'footer.php';

?>