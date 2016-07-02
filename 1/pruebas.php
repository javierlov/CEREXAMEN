<?php
require_once 'pelicula.php';

	$pel = new Pelicula(5);
	
	echo "<pre>";
	print_r($pel);
    //var_dump($pel); //informa mas datos
	echo "</pre>";
    
    $pel->setCantidad(8);
    
    echo "<pre>";
	print_r($pel);
    //var_dump($pel); //informa mas datos
	echo "</pre>";