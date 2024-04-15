<?php
//by Kennedy E M Silva

//polimorfismo é subistituir um metodo 
//herdado por uma da classe atual com um 
//metodo de mesmo nome
class animal{
    public function getNome() {
        echo "getNome da classe animal";
    }
}
class Cachorro extends Animal{
//    essa classe ira substituir o "getNome" da classe anterior
     public function getNome() {
         
        echo "getNome da classe Cachorro";
    }
}

$cachorro = new Cachorro();
$cachorro->getNome();


