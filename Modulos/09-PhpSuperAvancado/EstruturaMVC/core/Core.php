<?php

class Core {

    public function run() {
        $url = "/";
        $params = array();
        if (isset($_GET["url"])) {
            $url .= $_GET["url"];
        }
        if (!empty($url) && $url != "/") {
            $url = explode("/", $url);
            array_shift($url);

            $currentController = $url[0] . "Controller";
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = "index";
            }
            
            if (count($url) > 0) {
                $params = $url;
            }
            
        } else {
            $currentController = "homeController";
            $currentAction = "index";
        }
//      instanciando a class
        $c = new $currentController();
//      Chamando a função atravez de uma var($currentAction)
        call_user_func_array(array($c, $currentAction), $params);
        
    }
}
