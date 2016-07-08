<?php
class Block extends Db_Crud {

	protected static $find_all_sql = "SELECT * FROM block_benefits WHERE display = 'true' ";

	protected static $create_sql = "INSERT INTO block_benefits(icon, title, description, display, section_name) VALUES (:icon, :title, :description, :display, :section_name) ";

	protected static $update_sql = "UPDATE block_benefits SET icon=:icon, title=:title, description=:description, display=:display, section_name=:section_name WHERE block_id = :id ";

	protected static $find_by_id_sql = "SELECT * FROM block_benefits WHERE block_id = :id LIMIT 1";

	public $block_id;
	public $icon;
	public $title;
	public $description;
	public $display;
	public $section_name;
	public $add_up_result;


	public function add_update($control) {
		global $filename;

		$result = static::operation($control);

		$this->icon 		  	  = static::val_string($_POST['icon']);
		$this->title 		  	  = static::val_string($_POST['title']);
		$this->description  	  = static::val_string($_POST['description']);
		$this->display 	  	  = static::val_string($_POST['display']);
		$this->section_name	  = static::val_string($_POST['section']);
		$result->bindParam(':icon', $this->icon, PDO::PARAM_STR);
		$result->bindParam(':title', $this->title, PDO::PARAM_STR);
		$result->bindParam(':description', $this->description, PDO::PARAM_STR);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		if($control === "update") :
			$this->block_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->block_id, PDO::PARAM_INT);
		endif;

		return $result;
	}
}
?>
