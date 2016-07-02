<?php
/*
propiedades static
- Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides
*/

	class Persona{
		public $nombre;
		public $apellido;
		static $edadJubilacion = 65;
		
		function __construct($nom, $ape){
			$this->nombre = $nom;
			$this->apellido = $ape;
		}
		
		
		function imprimir(){
			echo "Nombre ".$this->nombre."<br>Apellido ".$this->apellido."<br>";
			/*
			en vez del nombre de la clase se puede usar la palabra reservada self
			*/
			echo "Edad de jubilacion ".self::$edadJubilacion."<br>";
		}
						
		function __destruct(){
			//echo "<br>".$this->nombre."  destruido";
		}
			
		function presentarse(){
			return "Me llamo ".$this->nombre." ".$this->apellido." y edad jubilacion ".Persona::$edadJubilacion." <br> ";
		}
	}
	
