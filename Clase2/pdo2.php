<?php

require_once "conexion-pdo.php";
$genero = "Drama";
$precio = 30;

$query = "select * from peliculas 
			where genero = ? and precio <= ?";
/*
holders
posicionales o secuenciales = ?
nombrados o asociativos = $variable

se le puede pasar los valores como un array
$stmt->execute(array($genero, $precio));
*/			
$stmt = $db->prepare($query);
$stmt->execute(array($genero, $precio));


while($fila=$stmt->fetch() ){
	echo "Titulo ".$fila["nombre"]." - ";
	echo "Genero ".$fila["genero"]." - ";
	echo "Precio ".$fila["precio"]."<br>";
}