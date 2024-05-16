<?php
/*
* Pagina editar-anuncio.php 
*
 * Formulario para editar um anúncio onde envia-se os dados para a mesma pagina e recebe
* os dados por $_POST
*  
 * É feita a requisição do cabeçalho header.php
 * É feita a requisição da classe anuncios anuncios.class.php
 * É feita a requisição da classe categorias categorias.class.php
* 
*  É feita a verificação se o usuario esta logado $_SESSION["cLogin"] caso não esteja 
 * o mesmo é enviado para a pagina de login.php
 * @param $_SESSION["cLogin"] é nome do usuario caso esteja logado
* 
 * É recebido o id via $_GET e feita a verificação do mesmo e feita tbm a 
 * verificação se o anuncio é existente pelo retorno da Função "MeuAnuncio",
 * caso não passe pela verificação é direcionado para "meus-anuncios.php".
 * 
 * É feita a verificação do recebimento após o usuario salva os dados atualizados do formulario
 * e encaminhado os dados para a Função "editarAnuncio" da classe "Anuncios".
 * @param $categoria é o id_categoria da categoria que é o mesmo do banco da tabela categorias.
 * @param $titulo é o tutulo do anuncio descrito pelo usuario.
 * @param $valor é o valor do anuncio descrito pelo usuario.
 * @param $descricao é a descrição do anuncio descrito pelo usuario.
 * @param $estado é o estado de conservação do anuncio descrito pelo usuario.
 * @param $fotos é um array com os dados da imagem/s escolhida/s pelo usuario para o anuncio.
 * 
 * Após a atualização do anuncio é feita o direcionamento para a pagina "meus-anuncios.php".
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

if (isset($_GET["id"]) && !empty($_GET["id"])) :
    $id = $_GET["id"];

    $info = $a->MeuAnuncio($id);
    if (!$info) :
        ?>
        <script type="text/javascript">
            window.location.href = "meus-anuncios.php";
        </script>
        <?php
    endif;
else:
    ?>
    <script type="text/javascript">
        window.location.href = "meus-anuncios.php";
    </script>
<?php
endif;

if (isset($_POST["titulo"]) && !empty($_POST["titulo"])) :

    $categoria = addslashes($_POST["categoria"]);
    $titulo = addslashes($_POST["titulo"]);
    $valor = addslashes($_POST["valor"]);
    $descricao = addslashes($_POST["descricao"]);
    $estado = addslashes($_POST["estado"]);
    if (isset($_FILES["fotos"])) {
        $fotos = $_FILES["fotos"];
    } else {
        $fotos = array();
    }


    if (!empty($categoria) && !empty($titulo) &&
            !empty($valor) && !empty($descricao) &&
            !empty($estado)) :

        $a->editarAnuncio($categoria, $titulo, $valor, $descricao, $estado, $fotos, $id);
        ?>

        <script type="text/javascript">
            window.location.href = "meus-anuncios.php";
        </script>
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
                <option 
                    value="<?php echo $categoria["id"]; ?>" 
                    <?php echo ($info["id_categoria"] == $categoria["id"]) ? "selected=''" : ""; ?>>
                        <?php echo $categoria["nome"]; ?>
                </option>
                <?php
            endforeach;
            ?>

          </select>
        </div>
        <div class="form-group">
          <label for="titulo">Titulo:</label>
          <input type="text" name="titulo" class="form-control" 
                 value="<?php echo $info["titulo"]; ?>">
        </div>

        <div class="form-group">
          <label for="valor">Valor:</label>
          <input type="text" name="valor" class="form-control" 
                 value="<?php echo $info["valor"]; ?>">
        </div>

        <div class="form-group">
          <label for="descricao">Descrição:</label>
          <textarea id="id" name="descricao"  class="form-control"
                    rows="5" cols="10"><?php echo $info["descricao"]; ?>
          </textarea>
        </div>

        <div class="form-group">
          <label for="estado">Estado de Conservação:</label>
          <select class="form-control" name="estado">
            <option value="0" <?php echo ($info["estado"] == "0") ? "selected=''" : ""; ?>>Ruim</option>
            <option value="1" <?php echo ($info["estado"] == "1") ? "selected=''" : ""; ?>>Bom</option>
            <option value="2" <?php echo ($info["estado"] == "2") ? "selected=''" : ""; ?>>Ótimo</option>
          </select>
        </div>

        <div class="form-group">
          <label for="add_foto">Fotos do Anúncio:</label>
          <input type="file" name="fotos[]" multiple="" class="form-control">
          <div class="card">
            <div class="card-header">Fotos do Anúncio</div>
            <div class="card-body" style="display: flex;
                                            ">
                <?php
                foreach ($info["fotos"] as $foto):
                    ?>
                  <div class="card foto_item" 
                       style="width: 150px;
                        text-align: center;
                                            ">
                    <img class="card-img-top" style="width: 150px; height: 200px;

                                            " src="assets/images/anuncios/<?php echo $foto["url"]; ?>" alt="">
                    <div class="card-body">
                      <a href="excluir-foto.php?id=<?php echo $foto["id"]; ?>" class="btn btn-primary">Excluir Imagem</a>
                    </div>
                  </div>


                  <?php
              endforeach;
              ?>
            </div>
          </div>
        </div>



        <button type="submit" class="btn btn-primary">
          Salvar
        </button>

      </form>

    </div>
  </div>
</div>

<?php
require './pages/footer.php';
?>
 