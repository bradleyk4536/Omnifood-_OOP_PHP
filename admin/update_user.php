<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to('users.php');
	endif;
	$user = User::find_by_id($_GET['id']);
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Edit User</h1>
					<ol class="breadcrumb">
					 <li><i class="fa fa-dashboard"></i>  <a href="users.php">User Manager</a></li>
					</ol>
<?php
if(isset($_POST['submit'])) :
	$user = new User;
	if($user) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['username']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])) :
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
			$user->add_up_result = $user->add_update("update");
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($user->add_up_result) :
				$user->add_up_result->execute();
				$session->message = "<i class='ion-person-add'></i> SUCCESS &mdash; USER UPDATED";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE USER";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($seesion->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php include "includes/form_content/user_form.php"; ?>
				<small>*Note: Password is required for all changes.</small>
			  </div>
		 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php require_once "includes/admin_footer.php"; ?>
