<?php
require_once 'DBC.php';
	//clase 4 
	//se va a crear una clase para el proyecto carrito
	class Pelicula{
		//propiedades o atributos...
		public $id;
		public $nombre;
		public $genero;				
		public $precio;
		public $cantidad;
		public $subtotal;
		
		//metodo contructor
		public function __construct($id){
			$query="select * from peliculas where cod_pelicula = ?";
			$stmt = DBC::getStatement($query);
			//se ejecuta  el query pasandole el parametro 
			$stmt->execute(array($id));
			//esto nos trae la primer fila..
			$fila = $stmt->fetch();
			
			$this->id = $id;
			$this->nombre = $fila['nombre'];
			$this->genero = $fila['genero'];
			//se asigna en cadena el precio a las dos variables
			$this->subtotal = $this->precio = $fila['precio'];
			$this->cantidad = 1;
		}
        
        public function setCantidad($value){
            $this->cantidad = $value;
            $this->CalcularSubtotal();
        }
        
        public function CalcularSubtotal(){
            $this->subtotal = $this->cantidad * $this->precio;
        } 
		
	}
	