<?php

require_once "conexion-pdo.php";
$genero = "Drama";
$precio = 25;

$query = "select * from peliculas 
			where genero = ? and precio <= ?";
/*
holders posicional
posicionales o secuenciales = ?
nombrados o asociativos = $variable
se le pueden vincular los parametros antes
los holders estan enumerados por orden de aparicion 
*/			
$stmt = $db->prepare($query);

$stmt->bindValue(1, $genero);
$stmt->bindValue(2, $precio);

$stmt->execute();


while($fila=$stmt->fetch() ){
	echo "Titulo ".$fila["nombre"]." - ";
	echo "Genero ".$fila["genero"]." - ";
	echo "Precio ".$fila["precio"]."<br>";
}