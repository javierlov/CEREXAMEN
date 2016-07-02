<?php
/*
hoy encasulamiento..
public es una de las propiedades
private y protected.

protected solo se puede acceder desde la clase o subclase

private solo se puede acceder desde la clase que lo declara

se puede usar un consturctor privado para clases static

serializa en un string
*/
	class Persona{
		public $nombre;
		public $apellido;		
		public $nombrecompleto;
		
		function __construct($n, $a){
			$this->nombre = $n;
			$this->apellido = $a;
			$this->nombrecompleto = $n." ".$a;
		}
		
		//este metodo es para serializacion.. solo guarda los datos que le pido que guarde...
		public function __sleep(){
			return array('nombre', 'apellido'); 
		}
		//reescribe una variable que no usamos en la serializacion
		public function __wakeup(){
			$this->nombrecompleto = $this->nombre." p ".$this->apellido;
			$this->nombre = 'mariana';
		}
		
		public function Presentarce(){
			return "Me llamo ".$this->nombrecompleto;
		}
		
		public function setApellido($value){
			$this->apellido = $value;
		}
		
		public function getApellido(){
			return $this->apellido;
		}
		
		
	}
	
