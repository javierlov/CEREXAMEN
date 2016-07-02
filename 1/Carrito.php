<?php

require_once "Pelicula.php";

class Carrito{
    protected $peliculas = array();
    //para objetos se puede tipar el parametro obligando a que pase este tipo 
    public function Agregar(Pelicula $pel, $cant = 1){         
          
        foreach($this->peliculas as $unapeli){
           
            if($unapeli->id == $pel->id){
                $unapeli->setCantidad($unapeli->cantidad + $cant);
                return $this;                
            }                
        }
                
        $this->peliculas[] = $pel;
        //se hace habitualmente el return en las clases
        //se usa para encadenar la clase..y hacer multiples llamadas
        return $this;
    }
}