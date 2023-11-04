<?php
    session_start();
    //print_r($_REQUEST);

    //Se existir submit, email e senha ele acessa. Se não ele volta para login
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //verificando
        /*print_r("Email: ". $email);
        print_r("Senha: ". $senha);*/

        //validando credenciais
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        //executar isso no banco
        $result = $conexao->query($sql);

        //Verificando se existe
        //print_r($result);

        //Redirecionando
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']); //Destruir dados
            unset($_SESSION['senha']);
            header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }


    }else{
        header('Location: login.php');
    }

?>