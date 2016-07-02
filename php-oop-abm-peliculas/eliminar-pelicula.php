<?php
require_once 'classes/DBC.php';
require_once 'classes/Pelicula.php';


$peli = new Pelicula($_GET['cod']);

if($peli->borrar()) {
	header("Location: listado-peliculas.php");
	exit;
} else {
	echo "Error al borrar la película";
}


?>