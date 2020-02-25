<?php
	class Persona{
		private $id;
		private $nombres;
		private $apellidos;
		private $cedula;
                private $lugarexp;
                private $tel;
                private $correo;
                private $nu;
                private $password;
 
		function __construct(){}
 
		public function getNombres(){
		return $this->nombres;
		}
		public function setNombres($nombres){
			$this->nombres = $nombres;
		}
                
                public function getApellidos(){
		return $this->apellidos;
		}
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}
 
		public function getCedula(){
			return $this->cedula;
		}
		public function setCedula($cedula){
			$this->cedula = $cedula;
		}
 
		public function getLugarExp(){
		return $this->lugarexp;
		}
		public function setLugarExp($lugarexp){
			$this->lugarexp= $lugarexp;
		}
                
                public function getTel(){
		return $this->tel;
		}
		public function setTel($tel){
			$this->tel= $tel;
		}
                
                public function getCorreo(){
		return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo= $correo;
		}
                
                public function getNU(){
		return $this->nu;
		}
		public function setNU($nu){
			$this->nu= $nu;
		}
                
                public function getPassword(){
		return $this->password;
		}
                public function setPassword($password){
			$this->password= $password;
		}
                
                public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
