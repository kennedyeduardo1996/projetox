<?php

//by Kennedy E M Silva
//"public" pode ser acessado de fora da class
//"private" pode ser acessado somente dentro da  class  
//"protected" pode ser acessado de dentro da class e de classes agregradas

//"extends" se trata da herança do "dadosPessoal"
class Usuario extends dadosPessoal{
    
    private $nome;
    private $idade;
    private $email;
    private $senha;

//    metodo construtor
    public function __construct($valor) {
       $this->setNome($valor);
    }
   
    
    public function trocarNome() {
        
        echo "nome trocado<br>";
    }

    private function conectarAoBanco() { }

    protected function algumacosia() {  }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($valor) {
        //assim tem como validar os dados pelo metodo
        if (is_string($valor)) {
            $this->nome = $valor;
        }
    }
}

class dadosPessoal {
    private $cpf;
    private $rg;
}

//intanciando o obejto
$cliente = new Usuario("Kennedy");

//chamando o metodo
$cliente->trocarNome();

//novo objeto ja com parementro nome
$novoCliente = new Usuario("Bruno");

//chama o metodo sem instanciar
//Usuario::trocarNome();


//$cliente->setNome("Kennedy2");
echo $cliente->getNome();
