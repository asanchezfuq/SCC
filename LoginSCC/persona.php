<?php
	class Persona{
		private $id;
                private $nu;
                private $password;
 
		function __construct(){}
 
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
