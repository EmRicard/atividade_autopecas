<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$funcao = $_POST['funcao'];
$id = $_POST['id'];


$sql = "UPDATE cad_pessoais SET nome = '$nome', email = '$email', cep = '$cep',endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', funcao = '$funcao' WHERE id = '$id'";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Cadastro Realizado com Sucesso.",
                    icon: "success"
                    }).then(okay => {
                        if(okay){
                            window.location.href = "../template/list_func.php";
                        }
                    });
            </script>
                
<?php }else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.php'</script>";
}

?>
    </body>
</html>