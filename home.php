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
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <center>    
    <h1>Bem vindo a página home</h1>
    <div id="junção">
            <a href="Portfolio_edu_nogueira/index.php"><button id="login">Nogueira</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=""><button id="registrar">Borges</button></a>
    </div>
    <br><br>

    </center>

</body>
</html>