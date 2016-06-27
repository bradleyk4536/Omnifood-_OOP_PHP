<?php
/* CREATE A DATABASE RECORD */

class Db_Crud {



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

	public static function deleteRecord($superGlobal) {
		global $database;
		$get_id = $superGlobal;
		$result = $database->connection->prepare( static::$delete_sql );
		if ($result) { $execute = $result->execute(['id' => $get_id ]); } else { $execute = false; }
		return $execute;
	}

/* USE FOR INTERNAL DATABASE ONLY */
	private function find_by_query($sql) {
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

/* SANITIZE STRING - RETURNS FILTERED DATA ON SUCCESS OR FALSE ON FAILURES */

	public static function val_string($input_field) {
		$sanitize = filter_var($input_field, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		return $sanitize;
	}

	/* SANITIZE AND VALIDATE EMAIL - RETURNS FILTERED DATA ON SUCCESS OR FALSE ON FAILURES */

	public static function val_int($input_field) {

			$sanitize = filter_var($input_field, FILTER_SANITIZE_NUMBER_INT);

			if(!$result = filter_var($sanitize, FILTER_VALIDATE_INT)) {
				return $result;
			} else {
				return $input_field;
			}

	}

	/* SANITIZE AND VALIDATE EMAIL - RETURNS FILTERED DATA ON SUCCESS OR FALSE ON FAILURES */

	public static function val_email($input_field) {

			$sanitize = filter_var($input_field, FILTER_SANITIZE_EMAIL);

			if($result = filter_var($sanitize, FILTER_VALIDATE_EMAIL)) {
				return $result;
			} else {
				return false;
			}
	}

	/* USER MESSAGES */
	public static function notifyMessage($message, $type){

	switch ($type):
		case "success":
		$document = <<<SUCCESS
		<div class='alert alert-success alert-dismissible text-center' role='alert'>
	  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	  	<strong> $message </strong>
		</div>
SUCCESS;
		break;

		case "failure":
		$document = <<<FAILURE
		<div class='alert alert-danger alert-dismissible text-center' role='alert'>
	  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
	  	<strong> $message </strong>
		</div>
FAILURE;
		break;
		endswitch;

		echo $document;
	}

}
?>
