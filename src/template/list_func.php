<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="">
    <div class="wrapper ">
        <?php include "menu.php"; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include "nav_superior.php"; ?>
            <!-- End Navbar -->
            <div class="content">
                <!--cards-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Listagem de Funcionários</h5>
                                <p class="card-category">Confira os Nomes</p>
                            </div>
                            <div class="card-body ">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>CEP</th>
                                            <th>Cidade</th>
                                            <th>Função</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            include "../_scripts/config.php";
                                            $sql = "SELECT * FROM cad_pessoais";
                                            $query  = $mysqli->query($sql);
                                            $dados = $query->fetch_array();
                                            while($dados = $query->fetch_array()){
                                            ?>
                                        <tr> 
                                            <td><?php echo $dados['nome']; ?></td>
                                            <td><?php echo $dados['email']; ?></td>
                                            <td><?php echo $dados['cep']; ?></td>
                                            <td><?php echo $dados['cidade']; ?></td>
                                            <td><?php echo $dados['funcao']; ?></td>
                                            <td><a href="edit_dados_pessoais.php?d=<?php echo $dados['id']; ?> "><i class="fa-regular fa-pen-to-square"></i></a> |
                                                <a href="../_scripts/deletar_cad_pessoais.php?id=<?php echo $dados['id']; ?> ">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>CEP</th>
                                            <th>Cidade</th>
                                            <th>Função</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> texto
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
    <?php include "js.php"; ?>

</body>

</html>