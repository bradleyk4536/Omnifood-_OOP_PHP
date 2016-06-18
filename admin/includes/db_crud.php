<?php
/* CREATE A DATABASE RECORD */

class Db_Crud {

	public static function find_all() {
		return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
	}

	public static function create() {
		global $database;
		$result = $database->connection->prepare("INSERT INTO " . static::$db_table . "(" . implode(", ", array_values(static::$db_table_fields)) . ")" . "VALUES(?, ?, ?, ?, ?, ?)";

		return $result;

	}

	public static function find_by_query($sql) {
		global $database;
		$result = $database->query_db($sql);
		$obj_result = $result->fetchAll(PDO::FETCH_OBJ);
		return $obj_result;
	}

	/* GET RECORD COUNT FROM APPLICABLE TABLE */
	public static function get_count() {
		global $database;
		$result = $database->query_db("SELECT * FROM " . static::$db_table . " ");
		return $result;
	}
}
?>
