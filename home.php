<?php
    session_start();
    
    //print_r($_SESSION);

    //verificar se existe sessao com esse usuario
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']); //Destruir dados
        unset($_SESSION['senha']);
        header('Location: login.php');
    }  
    $logado = $_SESSION['email']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo a página home</h1>
    <a href="">Borges</a>
    <a href="">Nogueira</a>
    <a href="sair.php">Sair</a>
</body>
</html>