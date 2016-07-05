<?php
	class Section extends Db_Crud {

		protected static $find_all_sql = "SELECT * FROM section WHERE display = 'true' ";

		protected static $create_sql = "INSERT INTO section(section_icon, section_title, section_description, display) VALUES (:icon, :title, :description, :display) ";

		protected static $update_sql = "UPDATE section SET section_icon=:icon, section_title=:title, section_description=:description, display=:display WHERE section_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM section WHERE section_id = :id ";

		public $section_id;
		public $section_icon;
		public $section_title;
		public $section_description;
		public $display = "false";
		public $add_up_result;

		public function add_update($control) {
		global $filename;
		switch ($control):
			case "add":
				$result = static::create();
			break;

			case "update":
				$result = static::update();
				$this->section_id = $_GET['id'];

			break;
		endswitch;
		$this->section_icon 		 		= static::val_string($this->section_icon);
		$this->section_title 		 	= static::val_string($this->section_title);
		$this->section_description 	= static::val_string($this->section_description);

		$result->bindParam(':icon', $this->section_icon, PDO::PARAM_STR);
		$result->bindParam(':title', $this->section_title, PDO::PARAM_STR);
		$result->bindParam(':description', $this->section_description, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		if($control === "update") { $result->bindParam(':id', $this->section_id, PDO::PARAM_INT); }

		return $result;

	}
	}
?>
