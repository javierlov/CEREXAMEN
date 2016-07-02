<?php
header("Content-Type: text/html; charset=utf-8");
require_once '../classes/Pelicula.php';

$test = array('cod_pelicula'=> 7);

$pel = new Pelicula();

$pel->cargarDatosDeArray($test);
if($pel->borrar()) {
	echo "<strong>Exito al eliminar!</strong><br>";
} else {
	echo "<strong>Error:</strong> no se pudo eliminar la película.<br>";
}
?>