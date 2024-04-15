<?php

//by Kennedy E M Silva
//todos os metodos publicos então a classe que usar essa interface
//obrigatoriamente tem que usar os metodos definidos
interface dadosPessoais {

//    no interface os metodos nao tem conteudo "{}"
    public function dataDeNascimento();
}

class Pessoa implements dadosPessoais {

    public function dataDeNascimento() {
        echo "minha data de nascimento";
    }
}

$cliente = new Pessoa();
$cliente->dataDeNascimento();
