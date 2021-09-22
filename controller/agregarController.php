<?php
require_once("../model/producto.php");
require_once("../model/conexion.php");
if($_POST){
    $Codigo = $_POST["txtCod"];
    $Nombre = $_POST["txtNom"];
    $Marca = $_POST["txtMarc"];
    $Presentacion = $_POST["txtPresentacion"];
    $Stock = $_POST["txtStock"];
    $Precio = $_POST["txtPrecio"];

    $Servicios = new Servicios();
    $Servicios->Crear($Codigo, $Nombre, $Marca, $Presentacion, $Stock, $Precio);    
}
