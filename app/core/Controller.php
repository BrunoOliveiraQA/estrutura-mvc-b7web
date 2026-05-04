<?php

class Controller{
    protected function view($view, $viewData = []){

    // função extract tranforma ['indice' => 'valor] em $indice = 'valor'
    extract($viewData);

        
        $viewFile = __DIR__ . '/../views/' .$view . '.php';

        if(!file_exists($viewFile)){
            throw new Exception('View file not found: '. $viewFile);
        }

        require_once $viewFile;
    }
}