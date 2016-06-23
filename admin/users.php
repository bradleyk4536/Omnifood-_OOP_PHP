<?php include "includes/admin_header.php"; ?>
<div id="wrapper">
	<?php $users = User::read_all(); ?>
<?php include "includes/admin_top_navigation.php"; ?>

<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
 <div class="row">
	  <div class="col-lg-12">
			<h1 class="page-header">Omnifood</h1>
				<ol class="breadcrumb">
					 <li>
						  <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
					 </li>
					 <li class="active">
						  <i class="fa fa-file"></i>&emsp;<a href="add_user.php">Add Users</a>
					 </li>
				</ol>
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
								<a rel='<?php echo $user->user_id ?>' href='javascript:void(0)' class='delete_link'>Delete</a>
							</div>
							</td>
							<td><?php echo $user->first_name; ?> </td>
							<td><?php echo $user->last_name; ?> </td>
							<td><?php echo $user->email; ?> </td>
							<td><?php echo $user->role; ?> </td>
						</tr>
					<?php endforeach; ?>

				</tbody>
			</table>
<?php include "delete.php"; ?>
		</div>
	  </div>
 </div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<hr>
	</div>
</div>
<!--DYNAMIC DATA BEING PASSED TO DELETE.PHP-->
<script>
	$(document).ready(function(){
		$(".delete_link").on('click', function(){
			var id = $(this).attr("rel");
			var del_url = "users.php?delete="+ id +"";
			$(".modal_delete_link").attr("href", del_url);
			$("#deleteModal").modal('show');
		})
	});
</script>
<?php include "includes/admin_footer.php"; ?>
<!--	target delete model and delete record					-->
