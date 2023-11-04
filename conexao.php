<?php

#conexão com banco

$hostname = 'localhost';
$bancodedados = 'formulario';
$usuario = 'root';
$senha = '';

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);


//verificando se a conexão funcionou
/*if ($conexao->connect_errno) {
    echo "Falha na conexão! (" . $conexao->connect_errno .")" . $conexao->connect_errno;
} else {
    echo "Tudo certo!";
}*/

?>