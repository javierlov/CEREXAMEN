<?php
//metodos magicos 

 class Producto{
	private $nombre;
	private $precio;
	
	//metodo __set se ejecuta cuando intento acceder a un a propiedad
	public function __set($prop, $valor){
		if( !property_exists($this, $prop))	{
			throw new exception("la propiedad $prop no existe"); 			
		}		
		$this->$prop = $valor;
		//$this->("set".ucfirst($prop))($valor);
		
	}
	
	public function __get($prop){		
		return $this->$prop;		
	}
 }