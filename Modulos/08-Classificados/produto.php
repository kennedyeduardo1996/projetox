<?php
/*
*
* Pagina produto.php 
*
 * É feito a exibição dos dos dados do anuncio selecionado.
 * 
 * É feita a requisição do cabeçalho header.php
 * É feita a requisição da classe anuncios anuncios.class.php
 * É feita a requisição da classe usuarios usuarios.class.php
* 
 *  É recebido o id via $_GET e feita a verificação do mesmo e feita tbm a 
 * verificação se o anuncio é existente pelo retorno da Função "MeuAnuncio",
 * caso não passe pela verificação é direcionado para "index.php".
 * 
 * É feita uma exibição com todos os dados do anuncio selecionado.
 * 
 * 
 */



require './pages/header.php';
require './classes/anuncios.class.php';
require './classes/usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

if (isset($_GET["id"]) && !empty($_GET["id"])) :
    $id = addslashes($_GET["id"]);

else:
    ?>

    <script type="text/javascript">
        window.location.href = "index.php";
    </script>
    <?php
    exit;
endif;

$id = addslashes($_GET["id"]);

$info = $a->MeuAnuncio($id);
?>
<div class="container">



  <div class="row">
    <div class="col-sm-4">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


        <div class="carousel-inner" role="listbox">
            <?php foreach ($info["fotos"] as $chave => $foto) : ?>

              <div class="carousel-item  <?php echo ($chave == "0") ? "active" : ""; ?>">
                <img class="d-block w-100" src="assets/images/anuncios/<?php echo $foto["url"]; ?>" >
              </div>

          <?php endforeach; ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>


    </div>
    <div class="col-sm-8">
      <h1><?php echo $info["titulo"]; ?></h1>
      <h4><?php echo $info["categoria"]; ?></h4>
      <p><?php echo $info["descricao"]; ?></p>
      <br>
      <h3><?php echo "R$ " . number_format($info["valor"], 2); ?></h3>
      <h4>Telefone: <?php echo $info["telefone"]; ?></h4>
    </div>

  </div>

</div>



<?php
//by Kennedy E M Silva
require './pages/footer.php';
?>
 