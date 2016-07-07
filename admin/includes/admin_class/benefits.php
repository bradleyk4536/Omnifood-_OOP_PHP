<?php
class Block extends Db_Crud {

	protected static $find_all_sql = "SELECT * FROM block_benefits WHERE display = 'true' ";
	protected static $create_sql = "INSERT INTO block_benefits(block_icon, block_title, block_description, display, section_name) VALUES (:block_icon, :block_title, :block_description, :display, :section_name) ";
	protected static $update_sql = "UPDATE block_benefits SET block_icon=:block_icon, block_title=:block_title, block_description=:block_description, display=:display, section_name=:section_name WHERE block_id = :id ";
	protected static $find_by_id_sql = "SELECT * FROM block_benefits WHERE block_id = :id LIMIT 1";

	public $block_id;
	public $block_icon;
	public $block_title;
	public $block_description;
	public $display;
	public $section_name;
	public $setSection;

	public function add_update($control) {
		global $filename;

		$result = static::operation($control);

		$this->block_icon 		  = static::val_string($_POST['block_icon']);
		$this->block_title 		  = static::val_string($_POST['block_title']);
		$this->block_description  = static::val_string($_POST['block_description']);
		$this->display 			  = static::val_string($_POST['display']);
		$this->setSection			  = static::val_string($_POST['section']);
		$result->bindParam(':block_icon', $this->block_icon, PDO::PARAM_STR);
		$result->bindParam(':block_title', $this->block_title, PDO::PARAM_STR);
		$result->bindParam(':block_description', $this->block_description, PDO::PARAM_STR);
		if($control === "add") :
			$result->bindParam(':section_name', $this->setSection, PDO::PARAM_STR);
		endif;
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		if($control === "update") :
			$this->section_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->block_id, PDO::PARAM_INT);
		endif;

		return $result;
	}
}
?>
