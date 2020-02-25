<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_carro.php');
	require_once('carro.php');
	$crud= new CrudCarro();
	$carro=new Carro();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$carro=$crud->obtenerCarro($_GET['id']);
?>
<html>

<body>
    <form action='administrar_carros.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $carro->getId()?>'>
			<td>Marca:</td>
			<td> <input type='text' name='marca' value='<?php echo $carro->getMarca()?>'></td>
		</tr>
                <tr>
			<td>Modelo:</td>
			<td> <input type='text' name='modelo' value='<?php echo $carro->getModelo()?>'></td>
		</tr>
		<tr>
			<td>Color:</td>
			<td><input type='text' name='color' value='<?php echo $carro->getColor()?>' ></td>
		</tr>
		<tr>
			<td>Placa:</td>
			<td><input type='text' name='placa' value='<?php echo $carro->getPlaca() ?>'></td>
		</tr>
                <tr>
			<td>Ciudad:</td>
			<td><input type='text' name='ciudad' value='<?php echo $carro->getCiudad() ?>'></td>
		</tr>
                <tr>
			<td>Usuario Que Lo Publica:</td>
			<td><input type='text' name='usuario' value='<?php echo $carro->getUsuario() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>

