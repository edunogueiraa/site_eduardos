<?php
    session_start();

    unset($_SESSION['email']); //Destruir dados
    unset($_SESSION['senha']);
    header('Location: login.php');

?>