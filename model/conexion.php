<?php
	class Conexion{
		public function Conectar(){
			$usuario = "root";
			$password = "";
			$servidor = "localhost";
			$bd = "CRUDVentas";
			try {
				$cnx = new PDO("mysql:host=$servidor; dbname=$bd;", $usuario, $password);
				$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $cnx;
			} catch (PDOException $e) {	
				echo "Hubo un error: ".$e->getMessage();
			}
		}
	}
?>
