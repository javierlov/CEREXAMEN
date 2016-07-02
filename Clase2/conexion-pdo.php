<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_base="php_pdo";
//para mysql es siempre asi
$db_dsn="mysql:host=$db_host;dbname=$db_base";
try{
	$db = new PDO($db_dsn, $db_user, $db_pass);
	
}
catch(Exception $e){	
	echo "fallo la coneccion<br>";
	echo $e->getMessage();		
}


//$db->