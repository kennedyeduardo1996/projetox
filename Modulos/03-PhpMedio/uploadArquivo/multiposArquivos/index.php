<?php
//se foi enviado
if (isset($_FILES["arquivo"])) {
//    se tiver algum arquivo enviado
    if (count($_FILES["arquivo"]["tmp_name"]) > 0) {
        for ($q = 0; $q < count($_FILES["arquivo"]["tmp_name"]); $q++) {

            //  gera um nome aleatorio para salvar o arquivo que nesse caso tem q que ser em jpg
            $nomedoarquivo = md5($_FILES["arquivo"]["name"].time() . rand(0, 99)) . ".jpg";

            //  salva o arquivo na pasto do servidor que ja deve ter sido criada
            move_uploaded_file($_FILES["arquivo"]["tmp_name"][$q], "arquivo/" . $nomedoarquivo);
        }
    }
}
?>

<!--Parametro para envio de arquivo no form-->
<form method="POST"enctype="multipart/form-data">
  Escolha os arquivos jpg <br/>
  <!--para selecionar varios arquivos-->
  <input type="file" multiple="" name="arquivo[]"><br/>


  <input type="Submit" value="Enviar">


</form>
