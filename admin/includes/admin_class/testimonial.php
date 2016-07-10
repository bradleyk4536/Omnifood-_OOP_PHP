<?php
class Testimonial extends Media {

	//protected static $find_all_sql	= "SELECT * FROM testimonial WHERE display = 'true' ";

	protected static $create_sql 		= "INSERT INTO testimonial(testimonial, display, section_name, image, author) VALUES (:testimonial, :display, :section_name, :image, :author) ";

	protected static $update_sql 		= "UPDATE testimonial SET testimonial=:testimonial, display=:display, image=:image, author=:author WHERE testimonial_id = :id ";

	protected static $find_by_id_sql = "SELECT * FROM testimonial WHERE testimonial_id = :id LIMIT 1";

	public $testimonial_id;
	public $testimonial;
	public $display;
	public $section_name;
	public $image;
	public $author;
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

		$this->testimonial  	  = static::val_string($_POST['testimonial']);
		$this->display 	  	  = static::val_string($_POST['display']);
		$this->image			  = static::val_string($this->filename);
		$this->author			  = static::val_string($_POST['author']);

		$result->bindParam(':testimonial', $this->testimonial, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);

		if($control === "add") :
		$this->section_name	  = static::val_string($_GET['section']);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		endif;

		$result->bindParam(':image', $this->image, PDO::PARAM_STR);
		$result->bindParam(':author', $this->author, PDO::PARAM_STR);

		if($control === "update") :
			$this->testimonial_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->testimonial_id, PDO::PARAM_INT);
		endif;

		return $result;
	}
}
?>
