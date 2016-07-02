<?php
	require_once "Persona.php";
	
	$per = new Persona('Juan', 'Perez');
	
	echo "<font FACE='Verdana' SIZE=5 COLOR=blue>";
	echo $per->Presentarce()."<br>";	
	echo "</font>";
	
	//serialize = me retorna un string con el objeto
	$s = serialize($per);
	//esta funcion crea un archivo agrega el contenido y lo cierra..
	file_put_contents('prueba1.txt', $s);
	
	echo "objeto serializado";
