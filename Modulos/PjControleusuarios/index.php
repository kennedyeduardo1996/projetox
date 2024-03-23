<?php
//adiciona o arquivo php que faz a conexao com o banco de dados
require_once './config.php';
?>
<a href="adicionar.php">Adicionar Novo Usuário</a>

<table border="1px" padding="0" width="100%">
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
  </tr>
  <?php
  $sql = "SELECT * FROM usuarios";
//  enviando o comando para o banco
  $sql = $pdo->query($sql);

  if ($sql->rowCount() > 0) {
//      featchAll transforma o resultado do banco em array
      foreach ($sql->fetchAll() as $usuario) {
          echo "<tr>";

          echo "<td>" . $usuario["nome"] . "</td>";
          echo "<td>" . $usuario["email"] . "</td>";
          echo "<td><a href='editar.php?id=" . $usuario["id"] . "'>Editar</a> "
          . "- <a href='excluir.php?id=" . $usuario["id"] . "'>Excluir</a> </td>";

          echo "</tr>";
      }
  } else {
      echo "Não teve retorno de nenhum cadastro";
  }
  ?>
</table>



<?php
//by Kennedy E M Silva

