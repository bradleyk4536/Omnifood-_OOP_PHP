<?php
	class Works extends Media {

		protected static $find_all_sql 	= "SELECT * FROM how_works WHERE section_name = 'how_works' ";

		protected static $create_sql = "INSERT INTO how_works(instruction, image, section_name, display) VALUES (:instruction, :image, :section_name, :display) ";

		protected static $update_sql = "UPDATE how_works SET instruction=:instruction, image=:image, display=:display WHERE how_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM how_works WHERE how_id = :id LIMIT 1";

		public $how_id;
		public $image;
		public $instruction;
		public $section_name;
		public $display = false;
		public $add_up_result;

				/*	CAPTURE IMAGE FILE DATA IF NOT CHANGED DURING UPDATE OVERRIDE*/
	public function save_file_data($fileData) {
		if(!empty($fileData)) :
			$this->filename = $fileData->image;
		endif;
	}

	public function add_update($control) {
		global $filename;

		$result = static::operation($control);

		$this->instruction  = static::val_string($_POST['instruction']);
		$this->image		 = static::val_string($this->filename);
		$this->display 	 = static::val_string($_POST['display']);

		$result->bindParam(':instruction', $this->instruction, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);

		if($control === "add") :
		$this->section_name	  = static::val_string($_GET['section']);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		endif;

		$result->bindParam(':image', $this->image, PDO::PARAM_STR);

		if($control === "update") :
			$this->how_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->how_id, PDO::PARAM_INT);
		endif;

		return $result;
	}
	}


?>
