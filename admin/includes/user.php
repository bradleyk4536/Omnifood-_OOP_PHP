<?php
	class User extends Db_Crud {
		protected static $db_table = "users";
		protected static $db_table_fields = "(username, first_name, last_name, email, password, role)";
		protected static $db_name_values = "VALUES(:username, :first_name, :last_name, :email, :password, :role) ";
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

	}
?>
