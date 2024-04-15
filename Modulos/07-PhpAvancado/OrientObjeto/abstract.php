<?php
//na class abstrata sempre tem uma metodo protegido nesse caso
//"registroNascimento" que obriga todas as classe que extendem a classe 
//em questão usar esse metodo
abstract class dadosPessoal {

    private $cpf;
    private $rg;

    abstract protected function registroNascimento();


    public function setCpf($param) {
        $this->cpf = $param;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setRg($param) {
        $this->rg = $param;
    }

    public function getRg() {
        return $this->rg;
    }
}

class Usuario extends dadosPessoal {

    private $nome;
    private $idade;
    private $email;
    private $senha;

    public function registroNascimento() {
        
    }

}
