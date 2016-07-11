<?php
	class Hero extends Media {
		protected static $find_all_sql = "SELECT * FROM hero ";

		protected static $create_sql = "INSERT INTO hero(brand_icon, brand_text, logo, newsletter_text, hero_text, hero_subtext, display) VALUES (:brand_icon, :brand_text, :logo, :newsletter_text, :hero_text, :hero_subtext, :display) ";

		protected static $update_sql = "UPDATE hero SET brand_icon=:brand_icon, brand_text=:brand_text, logo=:logo, newsletter_text=:newsletter_text, hero_text=:hero_text, hero_subtext=:hero_subtext, display=:display WHERE hero_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM hero WHERE hero_id = :id ";

		public $hero_id;
		public $brand_icon;
		public $brand_text;
		public $background_img;
		public $logo;
		public $newsletter_text;
		public $hero_text;
		public $hero_subtext;
		public $display = "false";
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

		$this->brand_icon 		 = static::val_string($_POST['brand_icon']);
		$this->brand_text 		 = static::val_string($_POST['brand_text']);
		$this->logo 				 = static::val_string($this->filename);
		$this->newsletter_text 	 = static::val_string($_POST['news_text']);
		$this->hero_text 			 = static::val_string($_POST['hero_text']);
		$this->hero_subtext    	 = static::val_string($_POST['sub_text']);
		$this->display 			 = static::val_string($_POST['display']);
		$result->bindParam(':brand_icon', $this->brand_icon, PDO::PARAM_STR);
		$result->bindParam(':brand_text', $this->brand_text, PDO::PARAM_STR);
		$result->bindParam(':logo', $this->filename, PDO::PARAM_STR);
		$result->bindParam(':newsletter_text', $this->newsletter_text, PDO::PARAM_STR);
		$result->bindParam(':hero_text', $this->hero_text, PDO::PARAM_STR);
		$result->bindParam(':hero_subtext', $this->hero_subtext, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		if($control === "update") :
			$this->hero_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->hero_id, PDO::PARAM_INT);
		endif;

		return $result;

	}
	}
?>
