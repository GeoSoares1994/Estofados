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

      <input placeholder="Seu email" type="email" id="email" name="email" required><br><br>

      <input placeholder="digite sua senha" type="password" id="senha" name="senha" required><br><br>

      <input placeholder="confirme sua senha" type="password" id="confirmar_senha" name="confirmar_senha"
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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $nome = limpar($_POST['nome']);
  $senha = limpar($_POST['senha']);
  $confirmar_senha = limpar($_POST['confirmar_senha']);
  $email = limpar($_POST['email']);
  $confirmar_email = limpar($_POST['confirmar_email']);


  function limpar($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


       if(empty($nome)){
            $erro_nome = "por favor informe um nome";
        } else {
            $nome = limpar($_POST["nome"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $erro_nome = "Apenas letras e espaços em brancos são aceitos";
            }
        }


        if(empty($email)){
            $erro_email = "por favor informe um email";
        } else{
            $email = limpar($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro_email = "formato do email inválido";
            }
        }

        if(empty($senha)){
            $erro_senha = "por favor informe uma senha";
        } else{
            if(strlen($senha) < 6 && strlen($senha) > 15){
                $senha = "por favor informe uma senha entre 6 e 15 dígitos";
            }
        }
        if(empty($repete_senha)){
            $errorepetesenha = "vc precisa repetir a senha";
        }else{
            if($repete_senha !== $senha){
                $errorepetesenha == "as senhas não combinam";
            }
        }
}




?>