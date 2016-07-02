<?php

require_once "conexion-pdo.php";
$query = "select * from peliculas";
$stmt = $db->prepare($query);
$stmt->execute();

while($fila=$stmt->fetch() ){
	echo "Titulo ".$fila["nombre"]." - ";
	echo "Genero ".$fila["genero"]." - ";
	echo "Precio ".$fila["precio"]."<br>";
}