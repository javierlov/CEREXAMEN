<?php
/*
funcion magica de php el parametro es obligatorio
este param es el nombre de la clase
function __autoload(param)
version 5.0
*/
function __autoload($clase){
	require_once $clase.".php";
}

$p = new Persona('Richard','Helm');

/*
se puede cambiar el valor de esta variable en cualquier momento
Persona::$edadJubilacion = 70;
*/
Persona::$edadJubilacion = 70;

$p->imprimir();
//echo "<prev>".print_r($p)."</prev>";
echo $p->presentarse();