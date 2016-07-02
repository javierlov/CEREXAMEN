<?php
 
class DBC {
	static $dbh;
	
	// Defino el constructor privado sólamente para que no se pueda instanciar la clase.
	private function __construct() {}

	/**
	 * @static
	 * @return PDO
	 */
	static function getConnection() {
		if(empty(self::$dbh)) {
			try {
				self::$dbh = new PDO("mysql:host=localhost;dbname=php_oop", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			} catch(Exception $e) {
				echo "Error de conexión a MySQL: " . $e->getMessage();
			}
		}

		return self::$dbh;
	}

	/**
	 * @static
	 * @param string $query
	 * @return PDOStatement
	 */
	static function getStatement($query) {
		return self::getConnection()->prepare($query);
	}
}
