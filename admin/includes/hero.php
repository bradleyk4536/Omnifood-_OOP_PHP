<?php
	class Hero extends Media {
		protected static $find_all_sql = "SELECT * FROM hero WHERE display = TRUE ";

		protected static $create_sql = "INSERT INTO hero(brand_icon, brand_text, newsletter_text, hero_text, hero_subtext, display) VALUES (:brand_icon, :brand_text, :newsletter_text, :hero_text, :hero_subtext, :display) ";

		protected static $update_sql = "UPDATE hero SET brand_icon=:brand_icon, brand_text=:brand_text, background_img=:background_img, logo=:logo, newsletter_text=:newsletter_text, hero_text=:hero_text, hero_subtext=:hero_subtext, display=:display WHERE hero_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM hero WHERE hero_id = :id ";

		public $hero_id;
		public $brand_icon;
		public $brand_text;
		public $background_img;
		public $logo;
		public $newsletter_text;
		public $hero_text;
		public $hero_subtext;
		public $display;
		public $add_up_result;
		public $media_result;


		public function add_update($control) {
		global $database;
		switch ($control):
			case "add":
				$result = static::create();
			break;

			case "update":
				$result = static::update();
				$this->hero_id = $_GET['id'];

			break;
		endswitch;
		$this->brand_icon 		 = static::val_string($this->brand_icon);
		$this->brand_text 		 = static::val_string($this->brand_text);
//		$this->background_img 	 = static::val_string($this->filename);
//		$this->logo 				 = static::val_string($this->filename);
		$this->newsletter_text 	 = static::val_string($this->newsletter_text);
		$this->hero_text 			 = static::val_string($this->hero_text);
		$this->hero_subtext    	 = static::val_string($this->hero_subtext);
		$this->display 			 = static::val_string($this->display);

		$result->bindParam(':brand_icon', $this->brand_icon, PDO::PARAM_STR);
		$result->bindParam(':brand_text', $this->brand_text, PDO::PARAM_STR);
//		$result->bindParam(':background_img', $this->background_img, PDO::PARAM_STR);
//		$result->bindParam(':logo', $this->logo, PDO::PARAM_STR);
		$result->bindParam(':newsletter_text', $this->newsletter_text, PDO::PARAM_STR);
		$result->bindParam(':hero_text', $this->hero_text, PDO::PARAM_STR);
		$result->bindParam(':hero_subtext', $this->hero_subtext, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		if($control === "update") { $result->bindParam(':id', $this->hero_id, PDO::PARAM_INT); }

		return $result;

	}
	}
?>
