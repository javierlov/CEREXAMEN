<?php
header("Content-Type: text/html; charset=utf-8");
require_once 'classes/DBC.php';
require_once 'classes/Pelicula.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$peli = new Pelicula();
	$peli->cargarDatosDeForm();
	if($peli->esPeliculaValida()) {
		if($peli->modificar()) {
			header("Location: listado-peliculas.php");
			exit;
		}
	}

	$error = "Datos inválidos";
} else {
	$peli = new Pelicula($_GET['cod']);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
	<title>Editar de película</title>
  </head>
  <body>
	<form action="modificar-pelicula.php" method="post">
	<input type="hidden" name="cod" value="<?php echo $peli->getCodigo();?>">
	<table border="1">
<?php
	if(isset($error)) {
	?>
		<tr>
			<td colspan="2" style="color:red"><?php echo $error;?></td>
		</tr>
<?php
	}
	?>
		<tr>
			<td>Título</td>
			<td><input type="text" name="titulo" value="<?php echo $peli->getTitulo();?>"></td>
		</tr>
		<tr>
			<td>Género</td>
			<td><input type="text" name="genero" value="<?php echo $peli->getGenero();?>"></td>
		</tr>
		<tr>
			<td>Descripción</td>
			<td><input type="text" name="descripcion" value="<?php echo $peli->getDescripcion();?>"></td>
		</tr>
		<tr>
			<td>Precio</td>
			<td><input type="text" name="precio" value="<?php echo $peli->getPrecio();?>"></td>
		</tr>
		<tr>
			<td>Disponibles</td>
			<td><input type="text" name="disponibles" value="<?php echo $peli->getDisponibles();?>"></td>
		</tr>
		<tr>
			<td>Stock</td>
			<td><input type="text" name="stock" value="<?php echo $peli->getStock();?>"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Enviar"></td>
		</tr>
	</table>
	</form>
  </body>
</html>