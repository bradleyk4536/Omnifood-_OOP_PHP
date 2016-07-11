<?php
	class City extends Media {
		protected static $find_all_sql = "SELECT * FROM city WHERE section_name = 'cities' ";

		protected static $create_sql = "INSERT INTO cities(image, name, icon_1, icon_2, social_icon, description_1, description_2, smedia_link, display, section_name) VALUES (:image, :name, :icon_1, :icon_2, :social_icon, :description_1, :description_2, :smedia_link, :display, :section_name) ";

		protected static $update_sql = "UPDATE cities SET image=:image, name=:name, icon_1=:icon_1, icon_2=:icon_2, social_icon=:social_icon, description_1=:description_1, description_2=:description_2, display=:display WHERE cities_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM cities WHERE cities_id = :id ";

		public $cities_id;
		public $image;
		public $name;
		public $icon_1;
		public $icon_2;
		public $social_icon;
		public $description_1;
		public $description_2;
		public $smedia_link;
		public $display = "false";
		public $section_name;
		public $add_up_result;
		public $media_result;

			/*	CAPTURE IMAGE FILE DATA IF NOT CHANGED DURING UPDATE */
		public function save_file_data($fileData) {
		if(!empty($fileData)) :
			$this->filename = $fileData->logo;
		endif;
	}

		public function add_update($control) {
		global $filename;

		$result = static::operation($control);

		$this->name 		 		 = static::val_string($_POST['name']);
		$this->image 				 = static::val_string($this->filename);
		$this->icon_1 	 			 = static::val_string($_POST['icon_1']);
		$this->icon_2 			 	 = static::val_string($_POST['icon_2']);
		$this->social_icon    	 = static::val_string($_POST['social_icon']);
		$this->description_1     = static::val_string($_POST['description_1']);
		$this->description_2     = static::val_string($_POST['description_2']);
		$this->smedia_link    	 = static::val_string($_POST['smedia_link']);
		$this->display 			 = static::val_string($_POST['display']);

		$result->bindParam(':image', $this->filename, PDO::PARAM_STR);
		$result->bindParam(':name', $this->name, PDO::PARAM_STR);
		$result->bindParam(':icon_1', $this->icon_1, PDO::PARAM_STR);
		$result->bindParam(':icon_2', $this->icon_2, PDO::PARAM_STR);
		$result->bindParam(':social_icon', $this->social_icon, PDO::PARAM_STR);
		$result->bindParam(':description_1', $this->description_1, PDO::PARAM_STR);
		$result->bindParam(':description_2', $this->description_2, PDO::PARAM_STR);
		$result->bindParam(':smedia_link', $this->smedia_link, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);

		if($control === "add") :
		$this->section_name	  = static::val_string($_GET['section']);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		endif;

		if($control === "update") :
			$this->hero_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->cities_id, PDO::PARAM_INT);
		endif;

		return $result;

	}
	}
?>
