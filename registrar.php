<?php
#Verificando se os dados foram enviados
if(isset($_POST['submit'])){

  include_once('conexao.php');

  #verificando dados
  /*
    print($_POST['usuario']);
    print($_POST['senha']);
    print($_POST['email']);
  */
  #Recebendo os parametros
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];

  #Inserindo os dados nos seus campos
  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email) VALUES ('$usuario', '$senha', '$email')");
  header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/registrar.css">
    <title>Registrar</title>
</head>
<body>
  <a href="index.php">Voltar</a>
    <form action="registrar.php" method="post">
      <div id="principal">
        <h1>Registrar</h1>
        <br>
        <input type="text" placeholder="Nome de Usuário" id="usuario" name="usuario">
        &nbsp;
        &nbsp;
        <input type="password" placeholder="Senha de acesso" id="senha" name="senha">
        <br><br>
        <input type="text" placeholder="E-mail" id="email" name="email">
        <br><br><br>
        <input type="submit" id="criar-conta" name="submit" value="Criar conta">
        <br><br>
        <a href="login.php" id="jaTenhoConta">Já tenho uma conta</a>
      </div>
    </form>
  </body>
</html>