
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




?>
<div class="container">
  <h1>Meus Anúncios</h1>
  <a type="button" href="add-anuncio.php" class="btn btn-primary">Criar Anúncio</a>
  <table class="table table-striped">
    <thead>
      <tr class="bg-primary">
        <th scope="col">Foto</th>
        <th scope="col">Titulo</th>
        <th scope="col">Valor</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php
        require './classes/anuncios.class.php';
        $a = new Anuncios();

        $anuncios = $a->getMeusAnuncios();
        foreach ($anuncios as $anuncio):
            ?>
          <tr>
            
            <th scope="row ">
              <img height="50"
                  src="assets/images/anuncios/<?php echo !empty($anuncio["imagem"])? $anuncio["imagem"]:"defaut.jpg"; ?>"
                   border="0"/></th>
            <td><?php echo $anuncio["titulo"]; ?></td>
            <td><?php echo "R$ " . number_format($anuncio["valor"], 2); ?></td>
            <td>
              <a class="btn btn-primary" href="editar-anuncio.php?id=<?php echo $anuncio["id"]; ?>">Editar</a>
              <?php ?>
              <a class="btn btn-danger" href="excluir-anuncio.php?id=<?php echo $anuncio["id"]; ?>">Excluir</a>
            </td>

          </tr>

      <?php endforeach; ?>



    </tbody>
  </table>


</div>



<?php
//by Kennedy E M Silva
require './pages/footer.php';
?>
 