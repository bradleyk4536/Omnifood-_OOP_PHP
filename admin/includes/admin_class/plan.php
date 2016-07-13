<?php
	class Plan extends Db_Crud {
		protected static $find_all_sql = "SELECT * FROM plans WHERE section_name = 'start_eating' ";

		protected static $create_sql = "INSERT INTO plans(plan_name, plan_price, plan_description, plan_icon1, plan_feature1, plan_icon2, plan_feature2, plan_icon3, plan_feature3, plan_icon4, plan_feature4, display, action, section_name) VALUES (:plan_name, :plan_price, :plan_description, :plan_icon1, :plan_feature1, :plan_icon2, :plan_feature2, :plan_icon3, :plan_feature3, :plan_icon4, :plan_feature4, :display, :action, :section_name) ";

		protected static $update_sql = "UPDATE plans SET plan_name=:plan_name, plan_price=:plan_price, plan_description=:plan_description, plan_icon1=:plan_icon1, plan_feature1=:plan_feature1, plan_icon2=:plan_icon2, plan_feature2=:plan_feature2, plan_icon3=:plan_icon3, plan_feature3=:plan_feature3, plan_icon4=:plan_icon4, plan_feature4=:plan_feature4, display=:display, action=:action WHERE plan_id = :id ";

		protected static $find_by_id_sql = "SELECT * FROM plans WHERE plan_id = :id ";

		public $plan_id;
		public $plan_name;
		public $plan_price;
		public $plan_description;
		public $plan_icon1;
		public $plan_feature1;
		public $plan_icon2;
		public $plan_feature2;
		public $plan_icon3;
		public $plan_feature3;
		public $plan_icon4;
		public $plan_feature4;
		public $display = "false";
		public $action = "btn-ghost";
		public $section_name;
		public $add_up_result;


		public function add_update($control) {
		global $filename;

		$result = static::operation($control);

		$this->plan_name 		 		 = static::val_string($_POST['plan_name']);
		$this->plan_price 			 = static::val_string($_POST['plan_price']);
		$this->plan_description 	 = static::val_string($_POST['plan_description']);
		$this->plan_icon1 	 		 = static::val_string($_POST['plan_icon1']);
		$this->plan_feature1 	 	 = static::val_string($_POST['plan_feature1']);
		$this->plan_icon2 			 = static::val_string($_POST['plan_icon2']);
		$this->plan_feature2 		 = static::val_string($_POST['plan_feature2']);
		$this->plan_icon3 			 = static::val_string($_POST['plan_icon3']);
		$this->plan_feature3 		 = static::val_string($_POST['plan_feature3']);
		$this->plan_icon4 			 = static::val_string($_POST['plan_icon4']);
		$this->plan_feature4 		 = static::val_string($_POST['plan_feature4']);
		$this->display 			 	 = static::val_string($_POST['display']);
		$this->action 			 		 = static::val_string($_POST['action']);

		$result->bindParam(':plan_name', $this->plan_name, PDO::PARAM_STR);
		$result->bindParam(':plan_price', $this->plan_price, PDO::PARAM_STR);
		$result->bindParam(':plan_description', $this->plan_description, PDO::PARAM_STR);
		$result->bindParam(':plan_icon1', $this->plan_icon1, PDO::PARAM_STR);
		$result->bindParam(':plan_feature1', $this->plan_feature1, PDO::PARAM_STR);
		$result->bindParam(':plan_icon2', $this->plan_icon2, PDO::PARAM_STR);
		$result->bindParam(':plan_feature2', $this->plan_feature2, PDO::PARAM_STR);
		$result->bindParam(':plan_icon3', $this->plan_icon3, PDO::PARAM_STR);
		$result->bindParam(':plan_feature3', $this->plan_feature3, PDO::PARAM_STR);
		$result->bindParam(':plan_icon4', $this->plan_icon4, PDO::PARAM_STR);
		$result->bindParam(':plan_feature4', $this->plan_feature4, PDO::PARAM_STR);
		$result->bindParam(':display', $this->display, PDO::PARAM_STR);
		$result->bindParam(':action', $this->action, PDO::PARAM_STR);

		if($control === "add") :
		$this->section_name	  = static::val_string($_GET['section']);
		$result->bindParam(':section_name', $this->section_name, PDO::PARAM_STR);
		endif;

		if($control === "update") :
			$this->plan_id = static::val_int($_GET['id']);
			$result->bindParam(':id', $this->plan_id, PDO::PARAM_INT);
		endif;

		return $result;

	}
	}
?>
