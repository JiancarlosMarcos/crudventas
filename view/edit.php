<?php

session_start();
require("../model/usuario.php");
require ('../model/conexion.php');
if(isset($_SESSION['usuario'])){
    
    require("../model/producto.php");
    $Codigo = $_GET["id"];
    $Servicios = new Servicios();
    $Producto = $Servicios->MostrarProducto($Codigo);
}else{
    header("location: login.php");
}

    // require("../model/conexion.php");
    // require("../model/producto.php");
   
    // $Codigo = $_GET["id"];
    // $Servicios = new Servicios();
    // $Producto = $Servicios->MostrarProducto($Codigo);    
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body class="bg-light">
<!-- cabezera  -->
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="row">
            <div class="col-3 d-flex align-items-center ">
                <ul class="nav">
                    <li>
                    <a href="home.php" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-grid d-block mx-auto mb-1" width="24" height="24" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        </svg>                
                        Productos
                    </a>
                    </li>
                    <li>
                    <button class="nav-link text-white bg-dark border-0" data-bs-toggle="modal" data-bs-target="#addModal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-square d-block mx-auto mb-1" width="24" height="24" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>             
                        Agregar
                    </button>
                    </li>
                </ul>
            </div>
            <div class="dropdown text-end col-9 d-flex justify-content-end align-items-center">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>
</header>

 <!-- editModal -->

        <div id="editModal" >
                      
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
            
                    <div class="modal-body">
                        <form id="frm-edit" action="../controller/editarController.php" method="POST">
                        
                            <input type="hidden" id="Cod" name="txtCod" class="form-control mb-2" placeholder="Codigo" value="<?php echo $Producto->Codigo; ?>">
                            <input type="text"  id="Nom" name="txtNom" class="form-control mb-2" placeholder="Nombre" value="<?php echo $Producto->Nombre; ?>">
                            <input type="text"  id="Marc" name="txtMarc" class="form-control mb-2" placeholder="marca" value="<?php echo $Producto->Marca; ?>">
                            <input type="text"  id="Prest" name="txtPresentacion" class="form-control mb-2" placeholder="presentacion" value="<?php echo $Producto->Presentacion; ?>">
                            <input type="number"  id="Stk" name="txtStock" class="form-control mb-2" placeholder="stock" value="<?php echo $Producto->Stock_Disponible; ?>">
                            <input type="float"  id="Pre" name="txtPrecio" class="form-control mb-2" placeholder="precio" value="<?php echo $Producto->Precio;?>">
                            <button type="submit" class="btn btn-dark">Actualizar</button>

                            
                            
                        </form>
                    </div>
                    </div>
                </div>
                
            </div>

</body>
</html>