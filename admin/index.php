<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
 <div id="wrapper">
	<?php require_once "includes/admin_top_navigation.php"; ?>
	<?php $sections = Section::read_all(); ?>
  <div id="page-wrapper">
		<div class="container-fluid">
			 <!-- Page Heading -->
			 <div class="row">
				  <div class="col-lg-12">
						<h1 class="page-header">Omnifood</h1>
						<ol class="breadcrumb">
							 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
								 <?php if($_SESSION['role'] === "Admin") : ?>
								 <li><i class="ion-person-add"></i> <a href="users.php">User Manager</a></li>
								 <li><i class="ion-ios-camera"></i> <a href="medias.php">Media Manager</a></li>
								 <?php endif; ?>
								 <li><i class="ion-android-restaurant"></i> <a href="../index.php"> View Site</a></li>
						</ol>
				  </div>
			 </div><!-- /.row -->
		</div><!-- /.container-fluid -->
<div id="accordion">
<?php require_once "includes/index_accordion/hero_accordion.php"; ?>
<?php require_once "includes/index_accordion/getFood_accordion.php"; ?>
<?php require_once "includes/index_accordion/how_works_accordion.php"; ?>
<?php require_once "includes/index_accordion/city_accordion.php"; ?>
<?php require_once "includes/index_accordion/testimonial_accordion.php"; ?>
<?php require_once "includes/index_accordion/start_eating_accordion.php"; ?>
<?php require_once "includes/index_accordion/dishes_accordion.php"; ?>
</div>
  </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php require_once "includes/admin_footer.php"; ?>
