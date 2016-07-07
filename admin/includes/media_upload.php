<?php
	class Media extends Db_Crud {
	protected static $find_all_sql = "SELECT * FROM media ";
	protected static $delete_sql = "DELETE FROM media WHERE image_id = :id ";
	protected static $create_sql = "INSERT INTO media(caption, filename, alternate_text, type, size) VALUES (:caption, :filename, :alternate_text, :type, :size)";
	protected static $update_sql = "UPDATE media SET caption=:caption, filename=:filename,  alternate_text=:alternate_text, type=:type, size=:size WHERE image_id = :id ";
	protected static $find_by_id_sql = "SELECT * FROM media WHERE image_id = :id ";
	public $image_id;
	public $title;
	public $caption;
	public $description;
	public $filename;
	public $alternate_text;
	public $type;
	public $size;
	public $add_up_result;
	public $media_result;

	/*IMAGE FILE PROPERTIES*/
	public $tmp_path;
	public $upload_directory = "media";
	public $file_errors;
	/*FROM PHP.NET ERROR MESSAGE EXPLAINED*/
	public $upload_errors_array = array(
		UPLOAD_ERR_OK 				=> "FILE UPLOADED TO AUTHORIZED LOCATION",
		UPLOAD_ERR_INI_SIZE 		=> "THE UPLOADED FILE EXCEEDS THE UPLOAD_MAX_FILESIZE DIRECTIVE",
		UPLOAD_ERR_FORM_SIZE 	=> "THE UPLOADED FILE EXCEEDS THE MAX_FILE_SIZE DIRECTIVE",
		UPLOAD_ERR_PARTIAL 		=> "THE UPLOADED FILE WAS ONLY PARTIAL UPLOADED",
		UPLOAD_ERR_NO_FILE 		=> "IMAGE ALREADY EXISTS. NEW FILE NOT ADDED",
		UPLOAD_ERR_NO_TMP_DIR 	=> "MISSING A TEMPORAY FOLDER",
		UPLOAD_ERR_CANT_WRITE 	=> "FAILED TO WRITE FILE TO DISK",
		UPLOAD_ERR_EXTENSION 	=> "A PHP EXTENSION STOPPED THE FILE UPLOAD"
	);
	/*GET FILE INFORMATION */
	public function set_file($file){

		/* TEST TO SEE IF FILE EXIST IF NOT ECHO AND RETURN FALSE */

		if(empty($file) || !$file || !is_array($file)) :
			$this->file_errors = "THERE IS NO FILE TO UPLOAD";
			return false;
		elseif($file['error'] != 0 ) :
		$this->file_errors = $this->upload_errors_array[$file['error']];
		return false;
		else :
		/*IF NO ERRORS ARE PRESENT ASSIGN FILE SUPER GLOBAL TO CLASS PROPERTIES*/

		if(getimagesize($file['tmp_name'])) :
			$filetarget = basename($file['name']);
			if(pathinfo($filetarget, PATHINFO_EXTENSION) === "jpg" || pathinfo($filetarget, PATHINFO_EXTENSION) === "png") :
				$this->tmp_path = $file['tmp_name'];
				$this->filename = basename($file['name']);  //returns the trailing name component of path
				$this->type 	 = $file['type'];
				$this->size 	 = $file['size'];
				return true;
			else:
				if($file['errors'] != 0) :
				$this->file_errors = $this->upload_errors_array[$file['error']];
				endif;
				return false;
			endif;
		else:
				$this->file_errors = "UN-AUTHORIZED FILE TYPE";
				return false;
			endif;
		endif;
	}
	/*	CAPTURE IMAGE FILE DATA IF NOT CHANGED DURING UPDATE */
	public function save_file_data($fileData) {

		if(!empty($fileData)) :
			$this->filename = $fileData->filename;
			$this->type 	 = $fileData->type;
			$this->size		 = $fileData->size;
		endif;
	}
	//		dynamic image dirctory
	public function picture_path() {
		return $this->upload_directory.DS.$this->filename;
	}

	/* SAVE IMAGE TO DIRECTORY */

	public function save(){

		/* CHECK TO SEE IF IMAGE ALREADY EXISTS */

		if($this->image_id) :
			$this->add_update("update");
		else :
			if(!empty($this->errors)) :
			return false;
			endif;
		endif;

		if (empty($this->filename) || empty($this->tmp_path)) :
			$this->file_errors = $this->upload_errors_array[$file['error']];
			 return false;
		endif;

			 /*  GET PERMANENT LOCATION OF IMAGES */
			$target_path = SITE_ROOT . DS. 'admin' . DS . $this->upload_directory . DS . $this->filename;
			 /*CHECK TO SEE IF FILE EXISTS*/
			if(file_exists($target_path)) :
				$this->file_errors = "IMAGE ALREADY EXISTS. NEW FILE NOT ADDED";
				return false;
			endif;

			 /* MOVE THE IMAGE FILE FROM SUPERGLOBAL TEMP TO TARGET PATH */

			if(move_uploaded_file($this->tmp_path, $target_path)) :
				if($this->add_update("add")) :
					unset($this->tmp_path);
					return true;
				endif;
			else :
				$this->file_errors = "YOU DO NOT HAVE PERMISSION TO SAVE FILE";
				return false;
			endif;
	}

	/* DELETE IMAGE FROM DATABASE AND DIRECTORY */

	public function delete_image($superGlobal){

		if(static::deleteRecord($superGlobal)) :
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
				$this->image_id = $_GET['id'];

			break;
		endswitch;
		$this->caption 		 = static::val_string(trim($_POST['caption']));
		$this->alternate_text = static::val_string(trim($_POST['alternate_text']));

		$result->bindParam(':caption', $this->caption, PDO::PARAM_STR);
		$result->bindParam(':filename', $this->filename, PDO::PARAM_STR);
		$result->bindParam('alternate_text', $this->alternate_text, PDO::PARAM_STR);
		$result->bindParam(':type', $this->type, PDO::PARAM_STR);
		$result->bindParam(':size', $this->size, PDO::PARAM_INT);
		if($control === "update") { $result->bindParam(':id', $this->image_id, PDO::PARAM_INT); }

		return $result;

	}
	}
?>
