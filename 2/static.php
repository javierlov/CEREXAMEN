<?php
/*
static=metodos y propiedades de la clase...
se utiliza el :: para referenciar a un metodo static
los metodos static no tienen acceso a $this
los metodos static son globales
*/
require_once "Math.php";

echo Math::dividir(10,2);