<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
<?php
	if(empty($_GET['id'])) { redirect_to('users.php'); }

		$user = User::find_by_id($_GET['id']);
		$user->usernameErr 	= "";
		$user->first_nameErr = "";
		$user->last_nameErr 	= "";
		$user->roleErr 		= "";
		$hash_password    	= $user->password;

		if(isset($_POST['submit'])) {

			if($user) {
				$user->email = $_POST['email'];


				$update = User::update();


			/*	CHECK REQUIRED FIELDS ONLY CONTAIN LETTER AND WHITE SPACE */
				if(!$user->username = User::val_char_only($_POST['username'])) {
						$user->usernameErr = "Field can only contain letters, numbers and white space.";
				} else { $update->bindParam(':username', $user->username, PDO::PARAM_STR); }

				if(!$user->first_name = User::val_char_only($_POST['first_name'])) {
						 $user->first_nameErr = "Field can only contain letters, numbers and white space.";
				} else { $update->bindParam(':first_name', $user->first_name, PDO::PARAM_STR); }

				if(!$user->last_name = User::val_char_only($_POST['last_name'])) {
						 $user->last_nameErr = "Field can only contain letters, numbers and white space.";
				} else { $update->bindParam(':last_name', $user->last_name, PDO::PARAM_STR); }

				$update->bindParam(':email', $user->email, PDO::PARAM_STR);

				if($hash_password != $_POST['password']) {
					$user->password = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost => 12'));
				} else {
					$user->password = $hash_password;
				}

				$update->bindParam(':password', $user->password, PDO::PARAM_STR);

				if(!$user->role = User::val_char_only($_POST['role'])) {
						 $user->roleErr = "Field can only contain letters, numbers and white space.";
				} else { $update->bindParam(':role', $user->role, PDO::PARAM_STR); }

				$update->bindParam(':id', $_GET['id'], PDO::PARAM_INT);

				/* CREATE RECORD ONLY WITH ALL REQUIRED FIELDS VALIDATED */
				if($user->username && $user->first_name && $user->last_name && $user->password) {
				$result 			= $update->execute();
				if ($result) {
					echo $user->message = "User Updated";
				} else {
					echo $user->message = "User not updated";
				}
			}
		}
		}
?>
<?php include "includes/admin_top_navigation.php"; ?>
<?php include "includes/admin_footer.php"; ?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">
						 Update User
					</h1>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<input type="file" name="user_image">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" required value="<?php echo $user->username; ?>">
								<?php echo $user->usernameErr; ?>
							</div>
							<div class="form-group">
								<label for="first-name">First Name</label>
								<input type="text" name="first_name" class="form-control" required value="<?php echo $user->first_name; ?>">
								<?php echo $user->first_nameErr; ?>
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" class="form-control" required value="<?php echo $user->last_name; ?>">
								<?php echo $user->last_nameErr; ?>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" required value="<?php echo $user->email; ?>">
							</div>
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" name="role" class="form-control" value="<?php echo $user->role; ?>">
								<?php echo $user->roleErr; ?>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" required class="form-control" value="<?php echo $user->password; ?>">
							</div>
							<div class="form-group pull-right">
							<input type="submit" class="btn btn-success" name="submit" value="Save User">
							</div>
						</div>
					</form>
			  </div>
		 </div>
		 <!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>

