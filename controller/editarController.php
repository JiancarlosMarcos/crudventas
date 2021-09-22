<?php

require '../model/producto.php';
require '../model/conexion.php';

$codigo = $_POST['txtCod'];
$nombre = $_POST['txtNom'];
$marca = $_POST['txtMarc'];
$presentacion = $_POST['txtPresentacion'];
$stock = $_POST['txtStock'];
$precio = $_POST['txtPrecio'];


$Servicios = new Servicios();
$update = $Servicios->Actualizar($codigo, $nombre, $marca, $presentacion, $stock, $precio);



?>