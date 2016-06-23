<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-6 col-md-offset-3">
		<div class="form-group">
			<input type="file" name="user_image">
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" class="form-control" required value="<?php echo $user->username; ?>">

		</div>
		<div class="form-group">
			<label for="first-name">First Name</label>
			<input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">

		</div>
		<div class="form-group">
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" class="form-control" required value="<?php echo $user->last_name; ?>">

		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" required value="<?php echo $user->email; ?>">

		</div>
		<div class="form-group">
			<label for="role">Role</label>
			<input type="text" name="role" class="form-control" value="<?php echo $user->role; ?>">

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
