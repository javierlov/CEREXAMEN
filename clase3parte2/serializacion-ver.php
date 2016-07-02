<?php
	require_once "Persona.php";
	///vamos a des-serializar el objeto y verlo
	//esta funcion lee un archivo
	$contenido = file_get_contents('prueba1.txt');
	
	$x = unserialize($contenido);
	
    echo "<font FACE='Verdana' SIZE=5 COLOR=blue>";
	echo $x->Presentarce()."<br>";	
	echo "</font>";

	echo "<br>objeto des.serializado";
