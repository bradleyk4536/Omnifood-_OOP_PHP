
<?php
class User extends Db_Crud {
protected static $find_all_sql = "SELECT users.user_id, users.role, users.username, users.first_name, users.last_name, users.email, users.password, role.role_id, role.role FROM users LEFT JOIN role ON users.role = role.role ORDER BY users.user_id DESC ";

protected static $create_sql = "INSERT INTO users(username, first_name, last_name, email, password, role) VALUES (:username, :first_name, :last_name, :email, :password, :role) ";

protected static $find_by_id_sql = "SELECT users.user_id, users.role, users.username, users.first_name, users.last_name, users.email, users.password, role.role_id, role.role FROM users LEFT JOIN role ON users.role = role.role WHERE user_id = :id ";

protected static $update_sql = "UPDATE users SET username=:username, first_name=:first_name, last_name=:last_name, email=:email, role=:role, password=:password WHERE user_id = :id ";
protected static $delete_sql = "DELETE FROM users WHERE user_id = :id ";
protected static $login_sql = "SELECT * FROM users WHERE username = :username LIMIT 1";

public $user_id;
public $username;
public $first_name;
public $last_name;
public $email;
public $password;
public $role;
public $message = "";
public $add_up_result;

public function add_update($control) {
	global $database;
/*DETERMINE WHAT SHOULD BE DONE UPDATE A RECORD OR ADD ONE */

	$result = static::operation($control);

		$this->username 	= static::val_string($_POST['username']);
		$this->first_name = static::val_string($_POST['first_name']);
		$this->last_name 	= static::val_string($_POST['last_name']);
		$this->email 		= static::val_email($_POST['email']);
		$this->role 		= static::val_string($_POST['role']);
		$this->password 	= static::val_string($_POST['password']);
		$this->password 	= password_hash($this->password, PASSWORD_BCRYPT, array('cost => 12'));
		$result->bindParam(':username', $this->username, PDO::PARAM_STR);
		$result->bindParam(':first_name', $this->first_name, PDO::PARAM_STR);
		$result->bindParam(':last_name', $this->last_name, PDO::PARAM_STR);
		$result->bindParam(':email', $this->email, PDO::PARAM_STR);
		$result->bindParam(':password', $this->password, PDO::PARAM_STR);
		$result->bindParam(':role', $this->role, PDO::PARAM_STR);
		if ($control === "update") :
			$this->user_id 	= static::val_int($_GET['id']);
			$result->bindParam(':id', $this->user_id, PDO::PARAM_INT);
		endif;

		return $result;

}
public static function check_user() {
	global $database;
	$username = static::val_string($_POST['username']);
	$password = static::val_string($_POST['password']);
	$sql = $database->connection->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
	$sql->bindParam(':username', $username);
	$sql->execute();
	$get_login_info = $sql->fetch(PDO::FETCH_OBJ);
	if($get_login_info) :
		$verify_password = password_verify($password, $get_login_info->password);
		return $verify_password ? $get_login_info : false;
	else :
		 return false;
	endif;
}
}
?>
