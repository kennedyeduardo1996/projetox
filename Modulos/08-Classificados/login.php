
<?php
//by Kennedy E M Silva

require './pages/header.php';
?>

<div class="container">

  <div class="row justify-content-md-center">
    <div class="col col-12 col-md-6">
      <h1>Login</h1>

      <?php
      require './classes/usuarios.class.php';
      $user = new Usuarios();
      if (isset($_POST["email"]) && !empty($_POST["email"])) :
          $email = addslashes($_POST["email"]);
          $senha = $_POST["senha"];

          $login = $user->login($email, $senha);
          if ($login) :
              ?>
      <script type="text/javascript">
      window.location.href="./";
      </script>
              <?php
          else:
              ?>
              <div class="alert alert-danger" role="alert">
                Email e senha incorretos 
              </div>
    <?php
    endif;
endif;
?>



      <form method="POST">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>

        <button type="submit" class="btn btn-primary">Fazer Login</button>
      </form>

    </div>
  </div>
</div>



<?php
//by Kennedy E M Silva
require './pages/footer.php';
?>