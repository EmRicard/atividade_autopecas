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
                <h5 class="card-title">Cadastro de Funcionários</h5>
                <p class="card-category">Preencha os campos</p>
              </div>
              <div class="card-body ">
                <form class="row g-3" method="post" action="../_scripts/salvar_cad_pessoais.php">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" required class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4"  class="form-label">Nome</label>
                    <input type="text" name="nome" required class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-4">
                    <label for="inputAddress"  class="form-label">CEP</label>
                    <input type="text" name="cep" required id="cep" onblur="pesquisacep(this.value);"  class="form-control">
                  </div>
                  <div class="col-8">
                    <label for="inputAddress2" class="form-label">Endereço</label>
                    <input type="text" class="form-control"  name="endereco"  id="rua" readonly>
                  </div>
                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">Bairro</label>
                    <input type="text" name="bairro" id="bairro" class="form-control" readonly >
                  </div>
                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" readonly >
                  </div>
                  <div class="col-md-4">
                    <label for="inputZip" class="form-label">Função</label>
                    <select name="funcao" required class="form-control">
                      <option value="">-</option>
                      <option value="Professor">Professor</option>
                      <option value="Secretaria">Secretaria</option>
                      <option value="Limpeza">Limpeza</option>
                      <option value="Merenda">Merenda</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Cadastro de Funcionários
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