<?php

class Servicios{
    public $Nombre;
    public $Precio;
    public $Codigo;
    public $Presentacion;
    public $Stock_Disponible;
    public $Marca; 
    public $PDO;
    public function Crear($Codigo, $Nombre, $Marca, $Presentacion, $Stock, $Precio){
        $conexion = new Conexion;
        $cn = $conexion->Conectar();
        $PDO=$cn;        
            
        $objPdo = $PDO->prepare("INSERT INTO producto(Codigo,Nombre,Marca,Presentacion,Stock_Disponible,Precio)VALUES(:dato1, :dato2, :dato3, :dato4, :dato5, :dato6)");
        $objPdo->bindParam(':dato1',$Codigo);
        $objPdo->bindParam(':dato2',$Nombre);
        $objPdo->bindParam(':dato3',$Marca);
        $objPdo->bindParam(':dato4',$Presentacion);
        $objPdo->bindParam(':dato5',$Stock);
        $objPdo->bindParam(':dato6',$Precio);   
        
        $objPdo->execute();
        
        header("location:../view/home.php");

    }
    public function Actualizar($Codigo, $Nombre, $Marca, $Presentacion, $Stock, $Precio){
        $conexion = new Conexion;
        $cn = $conexion->Conectar();
        $PDO=$cn;

        $this->Codigo = $Codigo;
        $this->Nombre = $Nombre;
        $this->Marca = $Marca;
        $this->Presentacion = $Presentacion;
        $this->Stock_Disponible = $Stock;
        $this->Precio = $Precio;

        $objPdo = $PDO->prepare("UPDATE producto SET Nombre=:dato2, Marca=:dato3, Presentacion=:dato4, Stock_Disponible=:dato5, Precio=:dato6 WHERE Codigo = :dato1");
        $objPdo->bindParam(':dato1',$this->Codigo);
        $objPdo->bindParam(':dato2',$this->Nombre);
        $objPdo->bindParam(':dato3',$this->Marca);
        $objPdo->bindParam(':dato4',$this->Presentacion);
        $objPdo->bindParam(':dato5',$this->Stock_Disponible);
        $objPdo->bindParam(':dato6',$this->Precio); 

        $objPdo->execute();
        if($objPdo){
            header("location:../view/home.php");
        }else{
            echo "No se actualizó correctamente";
        }
        

    }
    public function Eliminar($Codigo){
        $conexion = new Conexion;
        $cn = $conexion->Conectar();
        $PDO=$cn;
        
        $this->Codigo = $Codigo;

        $objPdo = $PDO->prepare("DELETE FROM producto WHERE Codigo = :dato1");
        $objPdo->bindParam(':dato1',$this->Codigo);
         
        $objPdo->execute();

        header("location:../view/home.php");

    }
    public function Vista(){
        $conexion = new Conexion;
        $cn = $conexion->Conectar();
        $PDO=$cn;
       
        $stmPdo = $PDO->prepare("select * from producto");
        $stmPdo->execute();
    
        $lista = $stmPdo->FetchAll(PDO::FETCH_OBJ);
        
        return $lista;

    }
    public function MostrarProducto($Codigo){
        $conexion = new Conexion;
        $cn = $conexion->Conectar();
        $PDO=$cn;

        $this->Codigo = $Codigo;
        $objPdo = $PDO->prepare("SELECT * FROM producto WHERE Codigo=:dato1");
        $objPdo->bindParam(':dato1',$this->Codigo);
        $objPdo->execute();
        $lista = $objPdo->Fetch(PDO::FETCH_OBJ);
        return $lista;
        
    }
}
?>