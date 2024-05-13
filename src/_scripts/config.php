<?php
$servidor = 'db';
$usuario = 'user';
$senha = 'userpassword';
$banco = 'escola_on';
$porta = 3306;

$mysqli = new mysqli($servidor, $usuario, $senha, $banco, $porta);

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
}
    
?>
