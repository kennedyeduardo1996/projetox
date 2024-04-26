
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

    $id = addslashes($_POST["id"]);
   


        $a->excluirAnuncio($id);
  

endif;
?>
<?php
require './pages/footer.php';
?>
 