<?php
	//Clase
	Class Conexion{
		//Propiedades
		private $conect;

		//Métodos
		public function __construct($host, $user, $pass, $db){
			if(!isset($this->conect)){
				$this->conect = new mysqli($host, $user, $pass, $db);
			}
		}

		public function __get($propiedad){
			if(property_exists(__CLASS__, $propiedad)){
				return $this->$propiedad;
			}
			return NULL;
		}

		public function __set($propiedad, $valor){
			if(property_exists(__CLASS__, $propiedad)){
				$this->$propiedad = $valor;
			}
			return NULL;
		}
	}

	Class Cliente{
		//Propiedades
		private $dni;
		private $nombre;
		private $direccion;
		private $email;
		private $pass;
		
		//Métodos
		//El parámetro $conexion es opcional
		public function __construct($dni, $nombre, $direccion, $email, $pass, $conexión = null){
			$this->dni = $dni;
			$this->dni = $nombre;
			$this->dni = $direccion;
			$this->dni = $email;
			$this->dni = $pass;
		}

		public function alta(){
			
		}

		public function baja(){

		}

		public function modificar(){

		}

		public function consultar(){

		}
	} 
?>