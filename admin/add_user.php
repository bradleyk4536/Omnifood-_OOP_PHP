<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
<?php
	if(isset($_POST['submit'])) {
		$user = new User();
		if($user) {
			$create = $user->create();
			$create->execute([

				'username' 		=> 'mikej'
			]);
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

					<form action="add_user.php" method="post" enctype="multipart/form-data">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<input type="file" name="user_image">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="first-name">First Name</label>
								<input type="text" name="first_name" class="form-control">
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input type="text" name="last_name" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" name="role" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control">
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

