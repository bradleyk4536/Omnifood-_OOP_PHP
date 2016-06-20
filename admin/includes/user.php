<?php
	class User extends Db_Crud {
		protected static $find_all_sql = "SELECT * FROM users ";
		protected static $create_sql = "INSERT INTO users(username, first_name, last_name, email, password, role) VALUES (:username, :first_name, :last_name, :email, :password, :role) ";
		protected static $find_by_id_sql = "SELECT * FROM users WHERE user_id = :user_id LIMIT 1";
		protected static $update_sql = "UPDATE users SET username = :username, first_name = :first_name, last_name = :last_name, email = :email, password = :password, role = :role WHERE user_id = :id ";
		public $user_id;
		public $username;
		public $first_name;
		public $last_name;
		public $email;
		public $password;
		public $role;
		public $usernameErr;
		public $first_nameErr;
		public $last_nameErr;
		public $emailErr;
		public $roleErr;

	}
?>
