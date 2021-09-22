<?php

require_once("../model/producto.php");
require_once ("../model/conexion.php");

class controller{

    public function lista(){
        $Servicio = new Servicios();
        $lista = $Servicio->Vista();
        return $lista;
    }
}


?>