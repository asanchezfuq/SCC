
<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudPersona{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($persona){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO lista values(NULL,:nombres,:apellidos,:cedula,:lugarexp, :tel, :correo, :nu, :password)');
			$insert->bindValue('nombres',$persona->getNombres());
                        $insert->bindValue('apellidos',$persona->getApellidos());
			$insert->bindValue('cedula',$persona->getCedula());
			$insert->bindValue('lugarexp',$persona->getLugarExp());
                        $insert->bindValue('tel',$persona->getTel());
                        $insert->bindValue('correo',$persona->getCorreo());
                        $insert->bindValue('nu',$persona->getNU());
                        $insert->bindValue('password',$persona->getPassword());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaPersonas=[];
			$select=$db->query('SELECT * FROM lista');

			foreach($select->fetchAll() as $persona){
				$myPersona= new Persona();
				$myPersona->setId($persona['id']);
				
				$listaPersonas[]=$myPersona;$myPersona->setNombres($persona['nombres']);
                                $myPersona->setApellidos($persona['apellidos']);
				$myPersona->setCedula($persona['cedula']);
				$myPersona->setLugarExp($persona['lugarexp']);
                                $myPersona->setTel($persona['tel']);
                                $myPersona->setCorreo($persona['correo']);
                                $myPersona->setNU($persona['nu']);
                                $myPersona->setPassword($persona['password']);
			}
			return $listaPersonas;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM lista WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM lista WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new Persona();
			$myPersona->setId($persona['id']);
			$myPersona->setNombres($persona['nombres']);
                        $myPersona->setApellidos($persona['apellidos']);
                        $myPersona->setCedula($persona['cedula']);
			$myPersona->setLugarExp($persona['lugarexp']);
                        $myPersona->setTel($persona['tel']);
                        $myPersona->setCorreo($persona['correo']);
                        $myPersona->setNU($persona['nu']);
                        $myPersona->setPassword($persona['password']);
			return $myPersona;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE lista SET nombres=:nombres, apellidos=:apellidos, cedula=:cedula,lugarexp=:lugarexp, tel=:tel, correo=:correo, nu=:nu, password=:password  WHERE ID=:id');
			$actualizar->bindValue('id',$persona->getId());
			$actualizar->bindValue('nombres',$persona->getNombres());
                        $actualizar->bindValue('apellidos',$persona->getApellidos());
			$actualizar->bindValue('cedula',$persona->getCedula());
			$actualizar->bindValue('lugarexp',$persona->getLugarExp());
                        $actualizar->bindValue('tel',$persona->getTel());
                        $actualizar->bindValue('correo',$persona->getCorreo());
                        $actualizar->bindValue('nu',$persona->getNU());
                        $actualizar->bindValue('password',$persona->getPassword());
			$actualizar->execute();
		}
	}
?>

