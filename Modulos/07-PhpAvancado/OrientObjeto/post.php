<?php

//by Kennedy E M Silva
class Post {

    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtcomentarios;

 

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($param) {
        if (is_string($param)) {
            $this->titulo = $param;
        }
    }
    
    public function addComentario($msg) {
        $this->comentarios[] = $msg;
        $this->contarComentarios();
    }
    
    public function getQuantosCometarios(){
        return $this->qtcomentarios;
    }
//  metodo auxiliar
    private function contarComentarios() {
        $this->qtcomentarios = count($this->comentarios);
    }

}
$post = new Post();
$post->addComentario("teste 1");
$post->addComentario("teste 2");
$post->addComentario("teste 3");
$post->addComentario("teste 4");

echo $post->getQuantosCometarios();