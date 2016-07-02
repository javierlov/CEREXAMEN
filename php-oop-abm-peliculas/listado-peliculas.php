<?php
header("Content-Type: text/html; charset=utf-8");
require_once 'classes/DBC.php';
$query = "SELECT * FROM peliculas";
$stmt = DBC::getStatement($query);
$stmt->execute();

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
	<title>Listado de películas</title>
  </head>
  <body>
	<a href="agregar-pelicula.php">Agregar una película</a>
	<table border="1">
		<tr>
			<td>Código</td>
			<td>Título</td>
			<td>Género</td>
			<td>Descripción</td>
			<td>Precio</td>
			<td>Disponibles</td>
			<td>Stock</td>
			<td>Modificar</td>
			<td>Eliminar</td>
		</tr>
<?php
		while($fila = $stmt->fetch()) {
?>
		<tr>
			<td><?php echo $fila['cod_pelicula'];?></td>
			<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['genero'];?></td>
			<td><?php echo $fila['descripcion'];?></td>
			<td>$ <?php echo $fila['precio'];?></td>
			<td><?php echo $fila['disponibles'];?></td>
			<td><?php echo $fila['stock'];?></td>
			<td><a href="modificar-pelicula.php?cod=<?php echo $fila['cod_pelicula'];?>">Modificar</a></td>
			<td><a href="eliminar-pelicula.php?cod=<?php echo $fila['cod_pelicula'];?>">Eliminar</a></td>
		</tr>
<?php
		}
?>
	</table>
  </body>
</html>