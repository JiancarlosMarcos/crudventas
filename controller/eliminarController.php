<?php
    require '../model/producto.php';
    require '../model/conexion.php';
    
    $codigo = $_GET['id'];
    echo $codigo;
    
    $Servicios = new Servicios();
    $Servicios->Eliminar($codigo);
?>