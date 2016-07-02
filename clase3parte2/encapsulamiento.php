<?php
	require_once "Persona.php";
	
	$per = new Persona;
	$per->nombre='Juan';
	$per->setApellido('Perez');	
	$per->setEdad(30);	
	
	echo "<font FACE='Verdana' SIZE=15 COLOR=blue>";
	echo $per->nombre."<br>";
	echo $per->getApellido()."<br>";
	echo $per->getEdad()."<br>";	
	echo "</font>";
	