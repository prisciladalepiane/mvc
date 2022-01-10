<?php

class Core
{
    public function __construct(){
        include ('core/classes/Rotas.php');
        include ('core/classes/Controlador.php');
        include ('core/classes/Modelo.php');
        include ('core/classes/View.php');
    }


    public function trataRequisicao(){
        $url = $_SERVER['REQUEST_URI'];
        Rotas::getInstancia();
        var_dump(Rotas::$GET);
    }
}