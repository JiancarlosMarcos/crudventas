<?php
    require("../model/conexion.php");
    require("../model/usuario.php"); 

    $Usuario = new Usuario;
    $Usuario->logout();
?>