<?php include "includes/admin_header.php"; ?>
<?php ob_start(); ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) { redirect_to('users.php'); }
	$user = User::find_by_id($_GET['id']);
if(isset($_POST['submit'])) {
	$user = new User();

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
			$result = $user->add_update("update");
/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($result) {
				$result->execute();
				header("Location : users.php");
			} else {
					echo $user->message = "Unable to update user";
			}
	} else {
		echo $user->message = "All fields are required to be filled in"; }
	}
}
?>
<?php include "includes/admin_top_navigation.php"; ?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Edit User</h1>
					<ol class="breadcrumb">
					 <li>
						  <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
					 </li>
				</ol>
				<?php include "includes/user_form.php"; ?>
				<small>*Note: Password is required for all changes.</small>
			  </div>
		 </div>
		 <!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<?php include "includes/admin_footer.php"; ?>
