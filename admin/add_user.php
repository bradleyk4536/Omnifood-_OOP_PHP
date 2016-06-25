<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$user = new User();
if(isset($_POST['submit'])) {
	if($user) {
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['username']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])) {
 			$user->username 	= trim($_POST['username']);
			$user->first_name = trim($_POST['first_name']);
			$user->last_name 	= trim($_POST['last_name']);
			$user->email 		= trim($_POST['email']);
			$user->password 	= trim($_POST['password']);
			$user->role 		= trim($_POST['role']);
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
			$result = $user->add_update("add");
/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($result) {
				$result->execute();
				echo $user->message = "New User Added";
			} else {
					echo $user->message = "Unable to add new user";
			}
		} else {
		echo $user->message = "All fields are required to be filled in"; }
	}
}
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Add User</h1>
					<ol class="breadcrumb">
					 <li>
						  <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
					 </li>
					 <li>
						  <i class="fa fa-file"></i>&emsp;<a href="add_user.php">Add User</a>
					 </li>
				</ol>
					<?php include "includes/user_form.php"; ?>
			  </div>
		 </div>
		 <!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>

<?php include "includes/admin_footer.php"; ?>
