<?php

//by Kennedy E M Silva
//comando de repetição while
$a = 0;
while ($a < 10) {
    echo "O valor de a: " . $a . "<br>";
    $a++;
}
echo "<br><br>";

//comando de repetição for
for ($b = 0; $b < 10; $b++) {
    echo "O valor de b: " . $b . "<br>";
}
echo "<br><br>";

//foreach Comando de repetição foreach é usado em array
$nomes = array(
    array("nome" => "Kennedy", "idade" => 25),
    array("nome" => "Bruno", "idade" => 26),
    array("nome" => "Gabriel", "idade" => 28),
    array("nome" => "Diedo", "idade" => 25),
    array("nome" => "Leonardo", "idade" => 27),
    array("nome" => "Juninho", "idade" => 35));

foreach ($nomes as $aluno) {
    echo $aluno["nome"] . " tem " . $aluno["idade"] . "<br>";
}

echo "<br><br>";
// foreach Comando de repetição foreach é usado em array
$pessoa = array("nome" => "Kennedy", "idade" => 25, "cidade"=>"Patrocinio");
foreach ($pessoa as $chave => $valor) {
    echo $chave . " : " . $valor . "<br><br>";
}

//cria uma array usando apenas as chaves do array inserido
$arrayChaves = array_keys($pessoa);
print_r($arrayChaves);
echo "<br>";

//cria uma array usando apenas os valores do array inserido
$arrayValores = array_values($pessoa);
print_r($arrayValores);
echo "<br>";

//Ordena em ordem alfabetica o array
asort($pessoa);

//Conta a qtd de registro no array
count($pessoa);

//verifica se tem determinado registro no array retorna true ou false
in_array("Kennedy", $pessoa);

//remove o ultimo registo do array e retorna o mesmo
array_pop($pessoa);

//remove o primeiro registo do array e retorna o mesmo
array_shift($pessoa);















