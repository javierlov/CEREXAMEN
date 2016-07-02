<?php
/*
hoy encasulamiento..
public es una de las propiedades
private y protected.

protected solo se puede acceder desde la clase o subclase

private solo se puede acceder desde la clase que lo declara

se puede usar un consturctor privado para clases static
*/
	class Persona{
		public $nombre;
		protected $apellido;		
		private $edad;
		
	function __construct(){
	}
	
	public function setApellido($value){
		$this->apellido = $value;
	}
	
	public function getApellido(){
		return $this->apellido;
	}
	
	public function setEdad($value){
		$this->edad = $value;
	}
	
	public function getEdad(){
		return $this->edad;
	}
		
	}
	
