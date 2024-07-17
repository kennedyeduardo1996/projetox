<?php
class homeController extends controller{
    
    public function index() {
        $dados = array(
            "quantidade" => 12,
            "nome" => "kennedy",
            "idade" => "28"
        ); 
        $this->loadTemplate("home",$dados);
    }

}