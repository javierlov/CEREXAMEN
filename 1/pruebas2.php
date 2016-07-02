<?php
require_once 'pelicula.php';
require_once 'Carrito.php';

	$c = new Carrito();
    $c->Agregar(new Pelicula(1))
        ->Agregar(new Pelicula(2))
        ->Agregar(new Pelicula(3))
        ->Agregar(new Pelicula(2))
        ->Agregar(new Pelicula(4))
        ->Agregar(new Pelicula(1));
    
    echo "<pre>";
	print_r($c);    
	echo "</pre>";
    
    
    