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
			<select name="role" id="" class="form-control">
<!-- GET THE ROLE FROM USERS TABLE -->
				<option value="<?php echo $user->role ?>"><?php echo $user->role; ?></option>
<!--    POPULATE ROLE DROP DOWN FROM ROLE TABLE				-->
				<?php $role = User::get_user_role(); ?>
				<?php foreach($role as $role) : ?>
				<?php if($user->role != $role->role) : ?>
				<option value="<?php echo $role->role ?>"><?php echo $role->role; ?></option>
				<?php endif; ?>
				<?php endforeach; ?>


			</select>
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
