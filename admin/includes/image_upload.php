<?php
	class Upload extends Db_Crud {
		protected static $delete_sql = "DELETE FROM media WHERE image_id = :id ";
		protected static $create_sql = "INSERT INTO media(title, caption, description, filename, alternate_text, type, size) VALUES (:title, :caption, :description, :filename, :alternate_text, :type, :size)";
		protected static $update_sql = "UPDATE media SET title=:title, caption=:caption, description=:description, filename=:filename, alternate_text=:alternate_text, type=:type, size=:size";
		public $image_id;
		public $title;
		public $caption;
		public $description;
		public $filename;
		public $alternate_text;
		public $type;
		public $size;

/*IMAGE FILE PROPERTIES*/
		public $tmp_path;
		public $upload_directory = "images";
		public $errors = array();
/*FROM PHP.NET ERROR MESSAGE EXPLAINED*/
		public $upload_errors_array = array(
			UPLOAD_ERR_OK 				=> "THERE IS NO ERROR",
			UPLOAD_ERR_INI_SIZE 		=> "THE UPLOADED FILE EXCEEDS THE UPLOAD_MAX_FILESIZE DIRECTIVE",
			UPLOAD_ERR_FORM_SIZE 	=> "THE UPLOADED FILE EXCEEDS THE MAX_FILE_SIZE DIRECTIVE",
			UPLOAD_ERR_PARTIAL 		=> "THE UPLOADED FILE WAS ONLY PARTIAL UPLOADED",
			UPLOAD_ERR_NO_FILE 		=> "NO FILE WAS UPLOADED",
			UPLOAD_ERR_NO_TMP_DIR 	=> "MISSING A TEMPORAY FOLDER",
			UPLOAD_ERR_CANT_WRITE 	=> "FAILED TO WRITE FILE TO DISK",
			UPLOAD_ERR_EXTENSION 	=> "A PHP EXTENSION STOPPED THE FILE UPLOAD"
		);
/*GET FILE INFORMATION */
		public function set_file($file){

			/* TEST TO SEE IF FILE EXIST IF NOT ECHO AND RETURN FALSE */

			if(empty($file) || !$file || !is_array($file)) :
				$this->errors[] = "THERE IS NO FILE TO UPLOAD";
				return false;
			elseif($file['error'] != 0 ) :
			$this->errors[] = $this->upload_errors_array[$file['error']];
			return false;
			else :
			/*IF NO ERRORS ARE PRESENT ASSIGN FILE SUPER GLOBAL TO CLASS PROPERTIES*/

			$this->filename = basename($file['name']);  //returns the trailing name component of path
			$this->tmp_path = $file['tmp_name'];
			$this->type 	 = $file['type'];
			$this->size 	 = $file['size'];

			endif;
		}

/*IMAGE STORAGE DIRECTORY */

		public function picture_path(){ return $this->upload_directory.DS.$this->filename; }

/* SAVE IMAGE TO DIRECTORY */

		public function save(){

			/* CHECK TO SEE IF IMAGE ALREADY EXISTS */

			if($this->id) :
				$this->add_update("update");
			else :
				if(!empty($this->errors)) :
				return false;
				endif;
			endif;

			if (empty($this->filename) || empty($this->tmp_path)) :
				 $this->errors[] = "THE FILE IS NOT AVAILABLE";
				 return false;
			endif;

				 /*  GET PERMANENT LOCATION OF IMAGES */
				$target_path = SITE_ROOT . DS. 'admin' . DS . $this->upload_directory . DS . $this->filename;
				 /*CHECK TO SEE IF FILE EXISTS*/
				if(file_exists($target_path)) :
					$this->errors[] = "The file {$this->filename} already exists";
				 	return false;
				endif;

				 /* MOVE THE IMAGE FILE FROM SUPERGLOBAL TEMP TO TARGET PATH */

				if(move_uploaded_file($this->tmp-path)) :
					if($this->add_update("add")) :
						unset($this->tmp_path);
						return true;
					endif;
				else :
					$this->errors[] = "YOU DO NOT HAVE PERMISSION TO SAVE FILE";
					return false;
				endif;
		}

/* DELETE IMAGE FROM DATABASE AND DIRECTORY */

		public static function delete_image($superGlobal){

			if($result= static::deleteRecord($superGlobal)) :
				$target_path = SITE_ROOT.DS. 'admin' . DS . $this->picture_path();
				return unlink($target_path) ? true : false;
			else :
				return false;
			endif;

		}

		public function add_update($control) {
			global $database;
			switch ($control):
				case "add":
					$result = static::create();
				break;

				case "update":
					$result = static::update();
				break;
			endswitch;

			$this->title 			 = static::val_string($this->title);
			$this->caption 		 = static::val_string($this->caption);
			$this->description 	 = static::val_string($this->description);
			$this->alternate_text = static::val_string($this->alternate_text);

			$result->bindParam(':title', $this->title, PDO::PARAM_STR);
			$result->bindParam(':caption', $this->caption, PDO::PARAM_STR);
			$result->bindParam(':description', $this->description, PDO::PARAM_STR);
			$result->bindParam(':filename', $this->filename, PDO::PARAM_STR);
			$result->bindParam('alternate_text', $this->alternate_text, PDO::PARAM_STR);
			$result->bindParam(':type', $this->type, PDO::PARAM_STR);
			$result->bindParam(':size', $this->size, PDO::PARAM_INT);

			$result->execute();

			return $result;

		}
	}
?>
