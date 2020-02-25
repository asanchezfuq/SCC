
<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudPersona{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($persona){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO login values(NULL, :nu, :password)');
                        $insert->bindValue('nu',$persona->getNU());
                        $insert->bindValue('password',$persona->getPassword());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaPersonas=[];
			$select=$db->query('SELECT * FROM login');

			foreach($select->fetchAll() as $persona){
				$myPersona= new Persona();
				$myPersona->setId($persona['id']);
                                
                                $listaPersonas[]=$myPersona;$myPersona->setNU($persona['nu']);
                                $myPersona->setNU($persona['nu']);
                                $myPersona->setPassword($persona['password']);
			}
			return $listaPersonas;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM login WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM login WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new Persona();
			$myPersona->setId($persona['id']);
                        $myPersona->setNU($persona['nu']);
                        $myPersona->setPassword($persona['password']);
			return $myPersona;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE login SET nu=:nu, password=:password  WHERE ID=:id');
			$actualizar->bindValue('id',$persona->getId());
                        $actualizar->bindValue('nu',$persona->getNU());
                        $actualizar->bindValue('password',$persona->getPassword());
			$actualizar->execute();
		}
	}
?>

