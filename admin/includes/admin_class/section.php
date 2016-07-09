<?php
class Section extends Db_Crud {

	protected static $find_all_sql = "SELECT * FROM section WHERE display = 'true' ";

	protected static $create_sql = "INSERT INTO section(icon, title, description, section_name, display) VALUES (:icon, :title, :description, :section_name, :display) ";

	protected static $update_sql = "UPDATE section SET icon=:icon, title=:title, description=:description, display=:display WHERE section_id = :id ";

	protected static $find_by_id_sql = "SELECT * FROM section WHERE section_id = :id ";


	public $section_id;
	public $icon;
	public $title;
	public $description;
	public $display = "false";
	public $add_up_result;
	public $section_name;

	public function add_update($control) {
	global $filename;

	$result = static::operation($control);

	$this->icon 		 		= static::val_string($_POST['icon']);
	$this->title 		 		= static::val_string($_POST['title']);
	$this->description 		= static::val_string($_POST['description']);
	$this->display 			= static::val_string($_POST['display']);

	$result->bindParam(':icon', $this->icon, PDO::PARAM_STR);
	$result->bindParam(':title', $this->title, PDO::PARAM_STR);
	$result->bindParam(':description', $this->description, PDO::PARAM_STR);

	if($control === "add") :
	$this->section_name		= static::val_string($_GET['header']);
	$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
	endif;

	$result->bindParam(':display', $this->display, PDO::PARAM_STR);

	if($control === "update") :
		$this->section_id = static::val_int($_GET['id']);
		$result->bindParam(':id', $this->section_id, PDO::PARAM_INT);
	endif;

	return $result;

	}
}
?>
