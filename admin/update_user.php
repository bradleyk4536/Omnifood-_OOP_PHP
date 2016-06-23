<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
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


			$result = $user->add_update("update");

			if($result) {
				$result->execute();
				echo $user->message = "User Updated";
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
					<h1 class="page-header">Update User</h1>
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
