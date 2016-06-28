<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
	<?php $roles = Role::read_all(); ?>
<?php include "includes/admin_top_navigation.php"; ?>

<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
 <div class="row">
	  <div class="col-lg-12">
			<h1 class="page-header">Omnifoods &mdash; <small>Role Manager</small></h1>
			<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a></li>
				 <li><i class="ion-ios-people"></i> <a href="users.php">View Users</a></li>
				 <li><i class="ion-android-restaurant"></i> <a href="../index.php"> View Site</a></li>
				 <li><i class="fa fa-info"></i> <a href="#" data-toggle="modal" data-target="#roleModal">Info</a></li>
			</ol>
			<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Role</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($roles as $role) : ?>
						<tr>
							<td><?php echo $role->role_id; ?> </td>
							<td><?php echo $role->role; ?>
							<div class="action_link">
<!--								<a href="update_user.php?id=<?php// echo $role->role_id ?>">Edit</a>-->
							</div>
							</td>
							<td><?php echo $role->role_description; ?> </td>
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
<?php include "includes/role_modal.php"; ?>
</div>
<?php include "includes/admin_footer.php"; ?>
