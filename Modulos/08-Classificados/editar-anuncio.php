
<?php
//by Kennedy E M Silva

require './pages/header.php';

if (empty($_SESSION["cLogin"])):
    ?>

    <script type="text/javascript">
        window.location.href = "login.php";
    </script>
    <?php
    exit;
endif;

require './classes/anuncios.class.php';

$a = new Anuncios();

if (isset($_GET["id"]) && !empty($_GET["id"])) :
    $id = $_GET["id"];

    $anuncio = $a->MeuAnuncio($id);
    if (!empty($anuncio)) :
        ?>

        <script type="text/javascript">
            window.location.href = "meus-anuncios.php";
        </script>
        <?php
    endif;

    echo "<pre>";
    print_r($anuncio);
    echo "</pre>";

endif;

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
require './classes/categorias.class.php';
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
 