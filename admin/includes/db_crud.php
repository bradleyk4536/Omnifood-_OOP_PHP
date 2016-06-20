<?php
/* CREATE A DATABASE RECORD */

class Db_Crud {
		public $message;


/* GET SPECIFIC RECORD FROM TABLE */

public static function find_by_id($id) {
	global $database;
	$result = $database->connection->prepare( static::$find_by_id_sql );
	$result->bindParam(':user_id', $id, PDO::PARAM_INT);
	$result->execute();

	$object = $result->fetch(PDO::FETCH_OBJ);

	return $object;
}

/* CREATE A RECORD */
	public static function create() {
		global $database;
		$result = $database->connection->prepare( static::$create_sql );
		return $result;
	}

	/* GET ALL RECORDS FROM TABLE */
	public static function read_all() { return static::find_by_query( static::$find_all_sql ); }

	/* UPDATE RECORD */

	public static function update() {
		global $database;
		$result = $database->connection->prepare( static::$update_sql );
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
		$result = $database->query_db( static::$find_all_sql );
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
