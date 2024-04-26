
<?php
//by Kennedy E M Silva

require './pages/header.php';
?>
<div class="container">
  <h1>Cadastre-se</h1>

  <?php
  require './classes/usuarios.class.php';
  $user = new Usuarios();
  if (isset($_POST["nome"]) && !empty($_POST["nome"])) :
      $nome = addslashes($_POST["nome"]);
      $email = addslashes($_POST["email"]);
      $senha = $_POST["senha"];
      $telefone = addslashes($_POST["telefone"]);

      if (!empty($nome) && !empty($email) && !empty($senha)) :

          $cadastrado = $user->cadastrar($nome, $email, $senha, $telefone);
          if ($cadastrado):
              ?>
              <div class="alert alert-success" role="alert">
                Cadastro Realizado faça o login <a href="login.php" class="alert-link">clicando aki</a>
              </div>
              <?php
          else:
              ?>
              <div class="alert alert-danger" role="alert">
                Email já cadastrado, faça o login <a href="login.php" class="alert-link">clicando aki</a>
              </div>
          <?php
          endif;
      else:
          ?>
          <div class="alert alert-danger" role="alert">
            Preencha todos os campos
          </div>
      <?php
      endif;
  endif;
  ?>
  <div class="row justify-content-md-center">
    <div class="col col-12 col-md-10">
      <form method="POST">

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha">
        </div>


        <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone">
        </div>


        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>

  </div>  
</div>



<?php
//by Kennedy E M Silva
require './pages/footer.php';
?>
 