<?php
    require("../model/conexion.php");
    require("../model/usuario.php"); 

    $user = $_POST['correo'];
    $pass = $_POST['contra'];

    $Usuario = new Usuario;
    $Usuario->crearUsuario($user, $pass);    

?>