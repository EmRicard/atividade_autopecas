<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php
        session_start();
        include "config.php";
        $login = $_POST['username'];
        $senha = $_POST['password'];

        //Verificar se o login existe
        $rs = "SELECT nome FROM login WHERE nome = '$login'";
        $query = $mysqli->query($rs);
        $total = $query->num_rows;

        if($total>=1){
            
            $rs = "SELECT nome,senha FROM login WHERE nome = '$login' AND senha = '$senha'";
            $query = $mysqli->query($rs);
            $total = $query->num_rows;

            if($total>=1){

                $_SESSION['login'] = $login;
                echo "<script>window.location='../template/cad_dados_pessoais.php'</script>";

            }else{ ?>
            
            <script>
                Swal.fire({
                    title: "Erro!",
                    text: "Verifique seu login.",
                    icon: "error"
                    });
            </script>
                
            <?php } 

        }else{
            echo "<script>alert('Login inválido');</script>";
            echo "<script>window.location='../index.php'</script>";
        }


        ?>
    </body>
</html>