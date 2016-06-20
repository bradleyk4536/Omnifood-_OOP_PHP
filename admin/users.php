<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
	<?php $users = User::read_all(); ?>
<?php include "includes/admin_top_navigation.php"; ?>
<?php include "includes/admin_footer.php"; ?>
<div id="page-wrapper">
	<div class="container-fluid">
					 <!-- Page Heading -->
			 <div class="row">
				  <div class="col-lg-12">
						<h1 class="page-header">Omnifood</h1>
						<div class="col-md-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Username</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Role</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($users as $user) : ?>
									<tr>
										<td><?php echo $user->user_id; ?> </td>
										<td><?php echo $user->username; ?>
										<div class="action_link">
											<a href="update_user.php?id=<?php echo $user->user_id ?>">Edit</a>
											<a href="delete_user.php?id=<?php echo $user->user_id ?>">Delete</a>
										</div>
										</td>
										<td><?php echo $user->first_name; ?> </td>
										<td><?php echo $user->last_name; ?> </td>
										<td><?php echo $user->email; ?> </td>
										<td><?php echo $user->role; ?> </td>
<!--										path in src attribute is from class method for dynamic paths-->
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>

					</div>
				  </div>
			 </div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<hr>
	</div>
</div>

