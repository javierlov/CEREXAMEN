<?php
header("Content-Type: text/html; charset=utf-8");
require_once '../classes/Pelicula.php';

$test = array('cod_pelicula'=> 7,
			  'nombre'      => 'Matrix',
			  'genero'      => 'Ciencia Ficción',
			  'descripcion' => 'Hito!',
			  'disponibles' => 9,
			  'stock'       => 15,
			  'precio'      => 19.90);

$pel = new Pelicula();

$pel->cargarDatosDeArray($test);
if($pel->modificar()) {
	echo "<strong>Exito al modificar!</strong><br>";
	echo "Los datos de la película son:<br>";
	echo "<pre>";
	print_r($pel);
	echo "</pre>";
} else {
	echo "<strong>Error:</strong> no se pudo modificar la película.<br>";
}
?>