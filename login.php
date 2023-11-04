<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="index.php">Voltar</a>
    <form id="formulario" name="formulario" method="post" action="testeLogin.php">
      <div id="principal">
        <h1>Login</h1>
        <input type="text" placeholder="E-mail" id="usuario" name="email">
        <br><br>
        <input type="password" placeholder="Senha de acesso" id="senha" name="senha">
        <br><br>
        <div id="faltouInformacoes"></div>
        <br>
        <input type="submit" id="entrar" name="submit" value="Entrar">
        <br><br><br>
        <a href="registrar.php">Não tenho uma conta</a>
      </div>
    </form>
  </body>
</html>