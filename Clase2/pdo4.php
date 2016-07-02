<?php

require_once "conexion-pdo.php";
$genero = "Drama";
$precio = 30;

$query = "select * from peliculas 
			where genero = :gen and precio <= :pre";
/*
holders Nombrados
el holder es un nombre 
se ponen : y el nombre

se le debe pasar un array asociativo al execute
froma 1
$stmt->execute(array(":gen"=>$genero,":pre"=>$precio));
forma 2
$stmt->bindValue("gen", $genero);
$stmt->bindValue("pre", $precio);

php.ini ver que pdo este habilitado
*/			
$stmt = $db->prepare($query);

$stmt->bindValue("gen", $genero);
$stmt->bindValue("pre", $precio);

$stmt->execute();
echo "holders nombrados <br>";

while($fila=$stmt->fetch() ){
	echo "Titulo ".$fila["nombre"]." - ";
	echo "Genero ".$fila["genero"]." - ";
	echo "Precio ".$fila["precio"]."<br>";
}