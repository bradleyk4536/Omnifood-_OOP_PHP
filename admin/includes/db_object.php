<?php require_once "db_config.php"; ?>
<?php
		class Connect_db {

			public $connection;
			public $upload_errors_array = array(
			UPLOAD_ERR_OK => "There is no error",
			UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
			UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE directive",
			UPLOAD_ERR_PARTIAL => "The uploaded file was only partial uploaded",
			UPLOAD_ERR_NO_FILE => "No file was uploaded",
			UPLOAD_ERR_NO_TMP_DIR => "Missing a temporay folder",
			UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
			UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
		);
			function __construct(){ $this->open_db_connection(); }

			/* CONNECT TO THE DATABASE */
			public function open_db_connection() {
				try {
				$this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
				/* Set a predefined PDO attribute on how errors will be reported. This case throw errors */
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) { die( "Unable to connect to database" ); }
			}

			/* ONLY USE WHEN DOING INTERNAL QUERRIES NO INPUT FROM OUTSIDE */
			public function query_db($sql) {
				$result = $this->connection->query($sql);
				$this->confirm_query($result);
				return $result;
			}

			/* TEST TO SEE IF QUERY IS SUCCESSFULL */
			private function confirm_query($result) {
				if(!$result) { die( "Database Query failed" . $this->connection->error ); }
			}
		}
$database = new Connect_db();
?>
