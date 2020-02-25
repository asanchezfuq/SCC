
<?php
//incluye la clase Libro y CrudLibro
require_once('crud_persona.php');
require_once('persona.php');
 
$crud= new CrudPersona();
$persona= new Persona();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
                $persona->setNU($_POST['nu']);
                $persona->setPassword($_POST['password']);
		//llama a la función insertar definida en el crud
		$crud->insertar($persona);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$persona->setId($_POST['id']);
                $persona->setNU($_POST['nu']);
                $persona->setPassword($_POST['password']);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>

