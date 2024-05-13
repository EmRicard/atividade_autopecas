<?php
function dadosUser($login){
    include "config.php";
    $sql = "SELECT * FROM login WHERE nome = '$login'";
    $query  = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados['nome']);
}

function dadosAlterarUsuario($id){
    include "config.php";
    $sql = "SELECT * FROM cad_pessoais WHERE id = '$id'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados);
}

?>