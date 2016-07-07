<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$role = Role::get_user_role();
$user = new User();
if(isset($_POST['submit'])) :
	if($user) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['username']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])) :
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
			$user->add_up_result = $user->add_update("add");
/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($user->add_up_result) :
				$user->add_up_result->execute();
				$session->message = "<i class='ion-person-add'></i> SUCCESS &mdash; NEW USER ADDED";
			else :
					$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW USER";
			endif;
		endif;
	endif;
endif;
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
	 <div class="row">
		  <div class="col-lg-12">
				<h1 class="page-header">Add User</h1>
			<ol class="breadcrumb">
			 <li><i class="ion-person"></i>  <a href="users.php">User Manager</a></li>
			 <li><i class="ion-person-add"></i>&emsp;<a href="add_user.php">Add Another User</a></li>
			</ol>
			<?php if($user->add_up_result && isset($session->message)) : ?>
			<div class="col-sm-6 col-sm-offset-3">
				<?php User::notifyMessage($session->message, "success"); ?>
			</div>
			<?php endif; ?>
			<?php if($user->add_up_result === false && isset($session->message)) : ?>
			<div class="col-sm-6 col-sm-offset-3">
				<?php User::notifyMessage($session->message, "failure"); ?>
			</div>
			<?php endif; ?>
				<?php include "includes/user_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php include "includes/admin_footer.php"; ?>
