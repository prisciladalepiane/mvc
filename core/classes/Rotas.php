<?php

class Rotas
{
    public static $GET, $POST, $INSTANCIA;

    public function __construct()
    {
        include('core/rotas/web.php');

    }

    public static function getInstancia(){
        // Singleton
        if(Rotas::$INSTANCIA == NULL){
            Rotas::$INSTANCIA = new Rotas();
        }
        return Rotas::$INSTANCIA;
    }
}