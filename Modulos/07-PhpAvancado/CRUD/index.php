<?php
//by Kennedy E M Silva
include './contato.class.php';
$contato = new Contato();



//$contato->adicionar("kennedy@gmail.com", "Kennedy");
?>
<h1>Contatos</h1>
<a href="adicionar.php">Adicionar</a>
<br>
<br>
<table border="1" width="600">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
  </tr>
  <?php
  $lista = $contato->getAll();
  
//  ambos os "foreach" funcionam igual 
//  mas o primeiro pode ser usado a chave se necessario 
    foreach ($lista as $chave => $pessoa): 
//  foreach ($lista as $pessoa):
      ?>


      <tr>
        <td><?php echo $pessoa["id"]; ?></td>
        <td><?php echo $pessoa["nome"]; ?></td>
        <td><?php echo $pessoa["email"]; ?></td>
        <td>
          <a href="editar.php?id=<?php echo $pessoa["id"]; ?>">Editar</a>
          <a href="excluir.php?id=<?php echo $pessoa["id"]; ?>">Excluir</a>
   
        </td>
      </tr>



      <?php
  endforeach;
  ?>





        



</table>



