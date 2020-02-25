<?php
	class Carro{
		private $id;
                private $marca;
                private $modelo;
                private $color;
                private $placa;
                private $ciudad;
                private $usuario;
 
		function __construct(){}
 
		public function getMarca(){
		return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}
                
                public function getModelo(){
		return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
                
                public function getColor(){
		return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
		}
                
                public function getPlaca(){
		return $this->placa;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}
                
                public function getCiudad(){
		return $this->ciudad;
		}
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
                
                public function getUsuario(){
		return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
                
                public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
