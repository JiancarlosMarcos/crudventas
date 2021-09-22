<?php
    class Usuario{
        public $Correo;
        public $Clave;
        public function login($Correo, $Clave){
            session_start();
            $this->Correo = $Correo;
            $this->Clave = $Clave;

            $conexion = new Conexion;
            $cn = $conexion->Conectar();

            $statement = $cn-> prepare("SELECT * FROM usuario WHERE correo=? AND clave=?");
            $statement -> execute([$Correo, $Clave]);
            $resultado = $statement->fetch(PDO::FETCH_OBJ);

            if($resultado===FALSE){
                header('Location: ../view/login.php');
            }elseif($resultado){
                $_SESSION['usuario'] = $resultado->correo;
                header('Location: ../view/home.php');
            }
        }

        public function logout(){
            session_start();
            session_destroy();
            header('Location: ../view/login.php');
        }

        public function crearUsuario($Correo, $Clave){

            $this->Correo = $Correo;
            $this->Clave = $Clave;

            $conexion = new Conexion;
            $cn = $conexion->Conectar();

            $statement = $cn-> prepare("INSERT INTO usuario(correo, clave) VALUES (?,?)");
            $statement -> execute([$Correo, $Clave]);
            
            header("location: ../view/login.php");
            
            
        }
    }

?>