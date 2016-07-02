<?php
	require_once "Producto.php";
	
	$prod = new Producto;
	try{	
		$prod->nombre = "Lata Sardinas";
		echo $prod->nombre;
		//print_r($prod);
		
		$prod->saraza = "Lata saraza";
		echo "<br>".$prod->saraza;
	}
	catch (exception $e){
		echo "<br>Error : <br>".$e->getMessage();
	}