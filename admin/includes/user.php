<?php
	class User extends Db_Crud {
		protected static $find_all_sql = "SELECT * FROM users ";
		protected static $create_sql = "INSERT INTO users(username, first_name, last_name, email, password, role) VALUES (:username, :first_name, :last_name, :email, :password, :role) ";
		protected static $find_by_id_sql = "SELECT * FROM users WHERE user_id = :user_id LIMIT 1";
		protected static $update_sql = "UPDATE users SET username=:username, first_name=:first_name, last_name=:last_name, email=:email, role=:role, password=:password WHERE user_id = :id ";
		protected static $delete_sql = "DELETE FROM users WHERE user_id = :id ";
		public $user_id;
		public $username;
		public $first_name;
		public $last_name;
		public $email;
		public $password;
		public $role;
		public $message;

		public function add_update($control) {
			global $database;
/*DETERMINE WHAT SHOULD BE DONE UPDATE A RECORD OR ADD ONE */
			switch ($control) :
			case "add":
					$result = static::create();
					if(!$this->email) {return false; } else { break; }
			case "update":
					$result = static::update();
					$this->user_id 	= $_GET['id'];

					break;
			default: return false;
			endswitch;
			if(!$this->email) {
				return false;
			} else {
				$this->username 	= static::val_string($this->username);
				$this->first_name = static::val_string($this->first_name);
				$this->last_name 	= static::val_string($this->last_name);
				$this->email 		= static::val_email($this->email);
				$this->role 		= static::val_string($this->role);
				$this->password 	= static::val_string($this->password);
				$this->password 	= password_hash($this->password, PASSWORD_BCRYPT, array('cost => 12'));
				$result->bindParam(':username', $this->username, PDO::PARAM_STR);
				$result->bindParam(':first_name', $this->first_name, PDO::PARAM_STR);
				$result->bindParam(':last_name', $this->last_name, PDO::PARAM_STR);
				$result->bindParam(':email', $this->email, PDO::PARAM_STR);
				$result->bindParam(':password', $this->password, PDO::PARAM_STR);
				$result->bindParam(':role', $this->role, PDO::PARAM_STR);
				if ($control === "update") {$result->bindParam(':id', $this->user_id, PDO::PARAM_INT); }

				return $result;

			}
		}



	}
?>
