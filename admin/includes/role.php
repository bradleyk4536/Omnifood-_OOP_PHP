<?php

class Role extends Db_Crud {
	protected static $find_all_sql = "SELECT * FROM role ";
	public $role_id;
	public $role;
	public $description;

/*POPULATE ROLE DROP DOWN ON ADD_USER AND UPDATE_USER FILES */
	public static function get_user_role() {
		global $database;

		$result 		= $database->query_db("SELECT * FROM role ");
		$obj_result = $result->fetchAll(PDO::FETCH_OBJ);
		return $obj_result;
	}
}
?>
