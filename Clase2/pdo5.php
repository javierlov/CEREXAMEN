<?php
/*
IDE
	Aptana
	Netbeans
	
	phpStorm (pago)
*/
require_once "conexion-pdo.php";
$nombre = "Mujer";

$query = "select * from peliculas 
			where nombre like :nom ";
/*
*/			
$stmt = $db->prepare($query);

$stmt->bindValue("nom", '%'.$nombre.'%');

$stmt->execute();
echo "peliculas <br>";

echo "Titulo  - ";
echo "Genero  - ";
echo "Precio <br>";

while($fila=$stmt->fetch() ){
	echo "".$fila["nombre"]." - ";
	echo "".$fila["genero"]." - ";
	echo "".$fila["precio"]."<br>";
}