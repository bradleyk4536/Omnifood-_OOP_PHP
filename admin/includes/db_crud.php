<?php
/* CREATE A DATABASE RECORD */

class Db_Crud {
		public $message;

	public static function find_all() {
		return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
	}

	public static function create() {
		global $database;
		$result = $database->connection->prepare("INSERT INTO " . static::$db_table . static::$db_table_fields . static::$db_name_values . " ");

		return $result;

	}

/* USE FOR INTERNAL DATABASE ONLY */
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

/*VALIDATION INPUT TEXT ALLOW NUMBER, CHARACTERS AND WHITESPACE*/

	public static function val_char_only($input_field) {
		if(!preg_match("/^[a-z0-9 .\-]+$/i",$input_field)) {
			$result = false;
		} else { $result = true; }
		return ($result) ? $input_field : false;
	}

	/*VALIDATE EMAIL FIELDS*/

	public static function val_email($input_field) {
		if(!filter_var($input_field, FILTER_VALIDATE_EMAIL)) {
			$result = false;
		} else { $result = true; }
		return ($result) ? $input_field : false;
	}
}
?>
