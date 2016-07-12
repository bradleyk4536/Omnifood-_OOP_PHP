<?php
	class Populate extends Db_Crud {
		public static $find_all_sql;

		public static function hero_section() {

			static::$find_all_sql = "SELECT * FROM hero WHERE display = 'true' LIMIT 1";
			$result = static::read_all();

			if($result) : return $result; else : return $result = false; endif;
		}

/*POPULATE HOME PAGE SECTIONS */
		public static function getHeader($table, $section) {
			static::$find_all_sql = "SELECT * FROM {$table} WHERE display = 'true' AND section_name = '{$section}' ";

			$result = static::read_all();
			if($result) : return $result; else : return false; endif;
		}
/* POPULATE BODY OF EACH SECTION */
		public static function getBody($table, $section) {
			static::$find_all_sql = "SELECT * FROM {$table} WHERE display = 'true' AND section_name = '{$section}' ";

			$result = static::read_all();
			if($result) : return $result; else : return false; endif;
		}
	}
?>
