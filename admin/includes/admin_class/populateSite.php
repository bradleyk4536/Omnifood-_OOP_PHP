<?php
	class Populate extends Db_Crud {
		public static $find_all_sql;

		public static function foodHeader() {
			static::$find_all_sql = "SELECT * FROM section WHERE display = 'true' AND section_name = 'get_food' ";
			$result =  static::read_all();
			if($result) : return $result; else : return $result = false; endif;
		}

		public static function foodBenefits() {

			static::$find_all_sql = "SELECT * FROM block_benefits WHERE display = 'true' AND section_name = 'get_food' ";

			$result = static::read_all();
			if($result) : return $result; else : return false; endif;
		}

		public static function testimonialHeader() {
			static::$find_all_sql = "SELECT * FROM section WHERE display = 'true' AND section_name = 'testimonial' ";

			$result = static::read_all();
			if($result) : return $result; else : return false; endif;
		}

		public static function testimonial() {
			static::$find_all_sql = "SELECT * FROM testimonial WHERE display = 'true' AND section_name = 'testimonial' ";

			$result = static::read_all();
			if($result) : return $result; else : return false; endif;

		}
	}

?>
