<?php

/*
* Pagina cadastre-se.php
*
* Formulario para criar um novo usuario onde envia-se os dados para a mesma pagina e recebe
* os dados por $_POST
 * 
 * É feita a requisição do cabeçalho header.php
 * É feita a requisição da classe usuario usuarios.class.php
* 
 * É feita a verificação do recebimento após o usuario enviar os dados do formulario
 * e encaminhado os dados para a Função "adicionarAnuncio" da classe "Anuncios".
 * @param $nome é o nome do usuario a ser cadastrado.
 * @param $email é o email do usuario a ser cadastrado.
 * @param $senha é a senha do usuario a ser cadastrado.
 * @param $telefone é a telefone do usuario a ser cadastrado.
*   
 * É feito um retorno da Função "cadastrar" da classe "Usuarios" onde é 
 * salvo no banco o usuario, caso não seja realizado o cadastro e o retorno seja 
 * false o usuario e direcionado para a pagina login.php
 * 
 * É feita a requisição do footer footer.php
* 
 * @package projetox 
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
*
*/



require './pages/header.php';
  require './classes/usuarios.class.php';
?>
<div class="container">
  <h1>Cadastre-se</h1>

  <?php

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
require './pages/footer.php';
?>
 