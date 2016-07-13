<?php
class Dish extends Media {

	protected static $find_all_sql	= "SELECT * FROM dish WHERE section_name = 'dish' ";

	protected static $create_sql 		= "INSERT INTO dish(name, description, display, section_name, image) VALUES (:name, :description, :display, :section_name, :image) ";

	protected static $update_sql 		= "UPDATE dish SET name=:name, description=:description, display=:display, image=:image WHERE dish_id = :id ";

	protected static $find_by_id_sql = "SELECT * FROM dish WHERE dish_id = :id LIMIT 1";

	public $dish_id;
	public $name;
	public $description;
	public $display = false;
	public $section_name;
	public $image;
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

		$this->name  	  		= static::val_string($_POST['name']);
		$this->description	= static::val_string($_POST['description']);
		$this->display 	  	= static::val_string($_POST['display']);
		$this->image			= static::val_string($this->filename);


		$result->bindParam(':name', $this->name, PDO::PARAM_STR);
		$result->bindParam(':description', $this->description, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);

		if($control === "add") :
		$this->section_name	  = static::val_string($_GET['section']);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		endif;

		$result->bindParam(':image', $this->image, PDO::PARAM_STR);


		if($control === "update") :
			$this->dish_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->dish_id, PDO::PARAM_INT);
		endif;

		return $result;
	}
}
?>
