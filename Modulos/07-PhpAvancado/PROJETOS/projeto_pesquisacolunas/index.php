<?php
/*
 * Pesquisa por email ou cpf no banco
 * 
 * Esse codigo faz um select no banco de dados pesquisando 
 * pelo email ou pelo cpf
 * 
 * @package projeto_pesquisa colunas
 * @author Kennedy E M Silva <kennedyeduardomartins@gmail.com>
 * 
 * @param $_GET["campo"] para a validação se foi digitado
 * o email ou cpf
 * 
 * return usuario cadastrado no banco 
 */



?>
<h1>Digite e-mail ou cpf do usuário</h1>
<form method="GET">
	<input type="text" name="campo" />
	<input type="submit" value="Pesquisar" />
</form>

<hr/>

<?php
if(!empty($_GET['campo'])) {
	$campo = $_GET['campo'];

	try {
		$pdo = new PDO("mysql:dbname=projeto_pesquisacolunas;host=localhost", "root", "");
	} catch(PDOException $e) {
		echo "ERRO: ".$e->getMessage();
		exit;
	}

	$sql = "SELECT * FROM usuarios WHERE email = :email OR cpf = :cpf OR nome = :nome";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $campo);
	$sql->bindValue(":cpf", $campo);
	$sql->bindValue(":nome", $campo);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$sql = $sql->fetch();

		echo "NOME: ".$sql['nome'];
	}
}












?>