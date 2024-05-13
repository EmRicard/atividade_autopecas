<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$id = $_GET['id'];


$sql = "DELETE FROM cad_pessoais WHERE id = '$id'";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Dados Deletados com Sucesso.",
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