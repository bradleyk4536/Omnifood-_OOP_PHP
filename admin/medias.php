<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
	<?php
	$images = new Media();
	$medias = $images->read_all();
	?>
<?php include "includes/admin_top_navigation.php"; ?>

<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
 <div class="row">
	  <div class="col-lg-12">
			<h1 class="page-header">Omnifoods &mdash; <small>Media Manager</small></h1>
			<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Main Page</a></li>
				 <?php if($_SESSION['role'] === "Admin") : ?>
				 <li><i class="ion-person-add"></i> <a href="add_media.php">Add Media</a></li>
				 <?php endif; ?>
				 <li><i class="ion-android-restaurant"></i> <a href="../index.php"> View Site</a></li>
			</ol>
			<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Image</th>
						<th>Title</th>
						<th>Caption</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($medias as $media) : ?>
						<tr>
							<td><?php echo $media->image_id; ?> </td>
							<td><img class="admin-photo-thumbnail" src="media/<?php echo $media->filename; ?>" alt=""></td>
							<td><?php echo $media->title; ?>
							<div class="action_link">
								<a href="update_media.php?id=<?php echo $media->image_id ?>">Edit</a>
								<?php if($_SESSION['role'] === "Admin") : ?>
								<a rel='<?php echo $media->image_id ?>' href='javascript:void(0)' class='delete_link'>Delete</a>
								<?php endif; ?>
							</div>
							</td>
							<td><?php echo $media->caption; ?> </td>
							<td><?php echo $media->description; ?> </td>
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
