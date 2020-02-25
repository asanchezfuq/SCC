<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_persona.php');
	require_once('persona.php');
	$crud= new CrudPersona();
	$persona=new Persona();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$persona=$crud->obtenerPersona($_GET['id']);
?>
<html>

<body>
    <form action='administrar_personas.php' method='post'>
	<table>
                <tr>
			<td>Nombre Usuario:</td>
			<td><input type='text' name='nu' value='<?php echo $persona->getNU() ?>'></td>
		</tr>
                <tr>
			<td>Contraseña:</td>
			<td><input type='text' name='password' value='<?php echo $persona->getPassword() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>

