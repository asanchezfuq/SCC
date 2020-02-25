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
			<input type='hidden' name='id' value='<?php echo $persona->getId()?>'>
			<td>Nombres:</td>
			<td> <input type='text' name='nombres' value='<?php echo $persona->getNombres()?>'></td>
		</tr>
                <tr>
			<td>Apellidos:</td>
			<td> <input type='text' name='apellidos' value='<?php echo $persona->getApellidos()?>'></td>
		</tr>
		<tr>
			<td>Cedula:</td>
			<td><input type='text' name='cedula' value='<?php echo $persona->getCedula()?>' ></td>
		</tr>
		<tr>
			<td>Lugar Expedicion:</td>
			<td><input type='text' name='lugarexp' value='<?php echo $persona->getLugarExp() ?>'></td>
		</tr>
                <tr>
			<td>Telefono Contacto:</td>
			<td><input type='text' name='tel' value='<?php echo $persona->getTel() ?>'></td>
		</tr>
                <tr>
			<td>Correo:</td>
			<td><input type='text' name='correo' value='<?php echo $persona->getCorreo() ?>'></td>
		</tr>
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

