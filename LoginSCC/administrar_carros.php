
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_carro.php');
require_once('carro.php');
 
$crud= new CrudCarro();
$carro= new Carro();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$carro->setMarca($_POST['marca']);
                $carro->setModelo($_POST['modelo']);
                $carro->setColor($_POST['color']);
                $carro->setPlaca($_POST['placa']);
                $carro->setCiudad($_POST['ciudad']);
                $carro->setUsuario($_POST['usuario']);
		//llama a la función insertar definida en el crud
		$crud->insertar($carro);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$carro->setId($_POST['id']);
                $carro->setMarca($_POST['marca']);
                $carro->setModelo($_POST['modelo']);
                $carro->setColor($_POST['color']);
                $carro->setPlaca($_POST['placa']);
                $carro->setCiudad($_POST['ciudad']);
                $carro->setUsuario($_POST['usuario']);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar1.php');
	}
?>

