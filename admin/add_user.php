<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
<?php
		$user = new User();
		if(isset($_POST['submit'])) {
			if($user) {
				$user->email = $_POST['email'];
				$user->password = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost => 12'));
				$user->role = $_POST['role'];
				$create = $user->create();

			/*	CHECK REQUIRED FIELDS ONLY CONTAIN LETTER AND WHITE SPACE */
				if(!$user->username = $user->val_char_only($_POST['username'])) {
						 $user->usernameErr = "Field can only contain letters, numbers and white space.";
				} else { $create->bindParam(':username', $user->username, PDO::PARAM_STR); }

				if(!$user->first_name = $user->val_char_only($_POST['first_name'])) {
						 $user->first_nameErr = "Field can only contain letters, numbers and white space.";
				} else { $create->bindParam(':first_name', $user->first_name, PDO::PARAM_STR); }

				if(!$user->last_name = $user->val_char_only($_POST['last_name'])) {
						 $user->last_nameErr = "Field can only contain letters, numbers and white space.";
				} else { $create->bindParam(':last_name', $user->last_name, PDO::PARAM_STR); }

				$create->bindParam(':email', $user->email, PDO::PARAM_STR);
				$create->bindParam(':password', $user->password, PDO::PARAM_STR);
				$create->bindParam(':role', $user->role, PDO::PARAM_STR);

				/* CREATE RECORD ONLY WITH ALL REQUIRED FIELDS VALIDATED */
				if($user->username && $user->first_name && $user->last_name && $user->password) {
				$result = $create->execute();
				$user->message = ($result) ? "New User Added" : "Unable To Add New User";
				}
				echo $user->message;
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
						 Add User
					</h1>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<input type="file" name="user_image">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" required value="<?php echo $user->username; ?>">
								<span class="styleErr"><?php echo $user->usernameErr; ?> </span>
							</div>
							<div class="form-group">
								<label for="first-name">First Name</label>
								<input type="text" name="first_name" class="form-control" required value="<?php echo $user->first_name; ?>">
								<span class="styleErr"><?php echo $user->first_nameErr; ?> </span>
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" class="form-control" required value="<?php echo $user->last_name; ?>">
								<span class="styleErr"><?php echo $user->last_nameErr; ?> </span>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" required value="<?php echo $user->email; ?>">
								<span class="styleErr"><?php echo $user->emailErr; ?> </span>
							</div>
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" name="role" class="form-control" value="<?php echo $user->role; ?>">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" required class="form-control">
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

