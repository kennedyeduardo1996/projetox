<?php

class controller{
    public function loadView($viewName, $viewData = array()) {
//      transforma o array em variaveis, a chave vira variavel
        extract($viewData);
        require "views/".$viewName.".php";
    }
    
    public function loadTemplate($viewName, $viewData = array()) {
        require "views/template.php";
    }
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require "views/".$viewName.".php";
    }
}
