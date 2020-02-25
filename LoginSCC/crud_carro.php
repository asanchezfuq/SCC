
<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudCarro{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($carro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO regcarro values(NULL,:marca,:modelo,:color,:placa,:ciudad,:usuario)');
			$insert->bindValue('marca',$carro->getMarca());
                        $insert->bindValue('modelo',$carro->getModelo());
                        $insert->bindValue('color',$carro->getColor());
                        $insert->bindValue('placa',$carro->getPlaca());
                        $insert->bindValue('ciudad',$carro->getCiudad());
                        $insert->bindValue('usuario',$carro->getUsuario());
			$insert->execute();

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaCarros=[];
			$select=$db->query('SELECT * FROM regcarro');

			foreach($select->fetchAll() as $carro){
				$myCarro= new Carro();
				$myCarro->setId($carro['id']);
				
				$listaCarros[]=$myCarro;$myCarro->setMarca($carro['marca']);
                                $myCarro->setModelo($carro['modelo']);
                                $myCarro->setColor($carro['color']);
                                $myCarro->setPlaca($carro['placa']);
                                $myCarro->setCiudad($carro['ciudad']);
                                $myCarro->setUsuario($carro['usuario']);
			}
			return $listaCarros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM regcarro WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}

		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerCarro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM regcarro WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$carro=$select->fetch();
			$myCarro= new Carro();
			$myCarro->setId($carro['id']);
                        $myCarro->setMarca($carro['marca']);
                        $myCarro->setModelo($carro['modelo']);
                        $myCarro->setColor($carro['color']);
                        $myCarro->setPlaca($carro['placa']);
                        $myCarro->setCiudad($carro['ciudad']);
                        $myCarro->setUsuario($carro['usuario']);
			return $myCarro;
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($carro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE regcarro SET marca=:marca, modelo=:modelo, color=:color, placa=:placa, ciudad=:ciudad, usuario=:usuario WHERE ID=:id');
			$actualizar->bindValue('id',$carro->getId());
                        $actualizar->bindValue('marca',$carro->getMarca());
                        $actualizar->bindValue('modelo',$carro->getModelo());
                        $actualizar->bindValue('color',$carro->getColor());
                        $actualizar->bindValue('placa',$carro->getPlaca());
                        $actualizar->bindValue('ciudad',$carro->getCiudad());
                        $actualizar->bindValue('usuario',$carro->getUsuario());
			$actualizar->execute();
		}
	}
?>

