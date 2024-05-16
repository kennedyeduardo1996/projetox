<?php


/*
* Pagina add-anuncio.php
*
* Formulario para criar um novo anúncio onde envia-se os dados para a mesma pagina e recebe
* os dados por $_POST
 * 
 * É feita a requisição do cabeçalho header.php
 * É feita a requisição da classe anuncios anuncios.class.php
 * É feita a requisição da classe categorias categorias.class.php
*
 * É feita a verificação se o usuario esta logado $_SESSION["cLogin"] caso não esteja 
 * o mesmo é enviado para a pagina de login.php
 * @param $_SESSION["cLogin"] é nome do usuario caso esteja logado
* 
 * É feita a verificação do recebimento após o usuario enviar os dados do formulario
 * e encaminhado os dados para a Função "adicionarAnuncio" da classe "Anuncios".
 * @param $categoria é o id_categoria da categoria que é o mesmo do banco da tabela categorias.
 * @param $titulo é o tutulo do anuncio descrito pelo usuario.
 * @param $valor é o valor do anuncio descrito pelo usuario.
 * @param $descricao é a descrição do anuncio descrito pelo usuario.
 * @param $estado é o estado de conservação do anuncio descrito pelo usuario.
*   
 * É feito um retorno da Função "getListaCategorias" da classe "Categorias" onde é 
 * preenchido as tags "<option>" do "<select>"
 * 
 * É feita a requisição do footer footer.php
* 
 * @package projetox 
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
*
*/


require './pages/header.php';
require './classes/anuncios.class.php';
require './classes/categorias.class.php';

if (empty($_SESSION["cLogin"])):
    ?>

    <script type="text/javascript">
        window.location.href = "login.php";
    </script>
    <?php
    exit;
endif;



$a = new Anuncios();
if (isset($_POST["titulo"]) && !empty($_POST["titulo"])) :

    $categoria = addslashes($_POST["categoria"]);
    $titulo = addslashes($_POST["titulo"]);
    $valor = addslashes($_POST["valor"]);
    $descricao = addslashes($_POST["descricao"]);
    $estado = addslashes($_POST["estado"]);

    if (!empty($categoria) && !empty($titulo) && !empty($valor) && !empty($descricao) && !empty($estado)) :

        $a->adicionarAnuncio($categoria, $titulo, $valor, $descricao, $estado);
        ?>    
              <div class="alert alert-success" role="alert">
                Anúncio criado!
              </div>
        <?php
    endif;

endif;
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-12 col-md-8">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="categoria">Categoria:</label>
          <select class="form-control" name="categoria">

            <?php

            $c = new Categorias();
            $cats = $c->getListaCategorias();
            foreach ($cats as $categoria) :
                ?>
                <option value="<?php echo $categoria["id"]; ?>"><?php echo $categoria["nome"]; ?></option>
                <?php
            endforeach;
            ?>

          </select>
        </div>
        <div class="form-group">
          <label for="titulo">Titulo:</label>
          <input type="text" name="titulo" class="form-control">
        </div>

        <div class="form-group">
          <label for="valor">Valor:</label>
          <input type="text" name="valor" class="form-control">
        </div>

        <div class="form-group">
          <label for="descricao">Descrição:</label>
          <textarea id="id" name="descricao"  class="form-control" rows="5" cols="10"></textarea>
        </div>

        <div class="form-group">
          <label for="estado">Estado de Conservação:</label>
          <select class="form-control" name="estado">
            <option value="0">Ruim</option>
            <option value="1">Bom</option>
            <option value="2">Ótimo</option>
          </select>

        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>

      </form>

    </div>
  </div>
</div>

<?php
require './pages/footer.php';
?>
 