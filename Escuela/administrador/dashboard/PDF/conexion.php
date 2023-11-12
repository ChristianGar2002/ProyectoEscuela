<?php 
	Class dbconexion{
		//variables de conexion
		var $dbhost = "localhost";
		var $username = "root";
		var $password = "";
		var $dbname = "secundaria";
		var $conexion;

		//Funcion de conexion a MYSQL

		function getConexion(){
			$con = mysqli_connect($this->dbhost, $this->username, $this ->password, $this->dbname) or die("Conexion fallida: ". mysqli_connect_error());

			//Revisamos la conexion en la bd
			if(mysqli_connect_errno()){
				printf("Conexion fallida: %s\n", mysqli_connect_error());
				exit();
			} else {
				$this->conexion = $con;
			}
			return $this->conexion;
		}
	}
?>