<?php
//by Kennedy E M Silva
include './contato.class.php';
$contato = new Contato();

if (isset($_GET["id"]) && !empty($_GET["id"])):
    $id = $_GET["id"];

    $pessoa = $contato->getContato($id);

    if ($pessoa["id"]) :
        ?>
        <h1>Editar</h1>
        <br/>
        <br/>
        <form method="POST" action="editar_submit.php">
          <input type="hidden" name="id" value="<?php echo $pessoa["id"]; ?>"><br/><br/>
          Nome: <br/>
          <input type="text" name="nome" value="<?php echo $pessoa["nome"]; ?>"><br/><br/>
          Email: <br/>
          <input type="email" name="email" value="<?php echo $pessoa["email"]; ?>"><br/><br/>
          <input type="submit" value="Enviar">
        </form>






        <?php
    else :
        header("Location: index.php");

    endif;
else:


    header("Location: index.php");
endif;
?>



