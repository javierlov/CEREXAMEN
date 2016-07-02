<?php
/*

*/

class Math{
	static function dividir($valor, $divisor){
		
		if($divisor == 0){
			throw new Exception("No se puede dividir por 0");
			//throw crea una exception....
		} 
		return ($valor / $divisor);
	}
}