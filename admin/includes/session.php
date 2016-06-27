<?php
	class Session {
		private $signed_in = false;
		public $user_id;
		public $message = "";
		public $role;
		public $username;


		function __construct() {
			session_start();
			$this->check_if_logged_in();
			$this->check_message();
		}

/* MESSAGE DISPLAYS */

		public function message($msg="") {
			if(!empty($msg)) { $_SESSION['message'] = $msg; } else { return $this->message; }
		}

/* LETS SETS SOME SESSIONS */

		public function set_login_sessions($user) {

			if($user) {
				$this->user_id 	= $_SESSION['user_id'] = $user->user_id;
				$this->role 		= $_SESSION['role'] = $user->role;
				$this->username 	= $_SESSION['username'] = $user->username;

				$this->signed_in = true;
			}

		}

		public function logout() {
			/*DELETE ALL SESSION VALUES*/

			session_unset();
			unset($this->user_id);
			$this->signed_in = false;

			/* DESTORY THE SESSION*/
			session_destroy();
		}

		private function check_if_logged_in() {

			if(isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
				$this->user_id 		= $_SESSION['user_id'];
				$this->role 			= $_SESSION['role'];
				$this->username 		= $_SESSION['username'];
				$this->signed_in = true;

			} else {
				session_unset();
				$this->signed_in = false;
			}
		}

		private function check_message(){

			if(isset($_SESSION['message'])) {

				$this->message = $_SESSION['message'];
				unset($_SESSION['message']);
			} else {

				$this->message = "";
			}
		}
//		getter method
		public function is_signed_in() { return $this->signed_in; }
	}
$session = new Session();
$message = $session->message();
?>
