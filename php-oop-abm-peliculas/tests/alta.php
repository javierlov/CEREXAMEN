<?php
header("Content-Type: text/html; charset=utf-8");
require_once '../classes/Pelicula.php';

$test = array('nombre'      => 'El Señor de los Anillos',
			  'genero'      => 'Fantasía',
			  'descripcion' => 'Grosa película!',
			  'disponibles' => 10,
			  'stock'       => 10,
			  'precio'      => 24.90);

$pel = new Pelicula();

$pel->cargarDatosDeArray($test);
if($pel->grabar()) {
	echo "<strong>Exito al grabar!</strong><br>";
	echo "Los datos de la película son:<br>";
	echo "<pre>";
	print_r($pel);
	echo "</pre>";
} else {
	echo "<strong>Error:</strong> no se pudo grabar la película.<br>";
}
?>