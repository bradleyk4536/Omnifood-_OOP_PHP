<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
 <div id="wrapper">
	<?php include "includes/admin_top_navigation.php"; ?>
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
<?php include "includes/hero_accordion.php"; ?>
<?php include "includes/get_food_accordion.php"; ?>
		<h3><a href="#"><strong>How It Works &mdash; Simple As 1, 2, 3</strong></a></h3>
		<div>
			<ol class="breadcrumb">
				<li><i class="fa fa-indent"></i><a href="add_section.php"> Add Section</a></li>
			</ol>
		  <hr>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Logo Image</th>
						<th>Tag Line</th>
						<th>Display</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			 <span><a href="update_hero.php?id=11">View</a></span>
		</div>
		<h3><a href="#"><strong>Were Currently In These Cities</strong></a></h3>
		<div>
			<ol class="breadcrumb">
				<li><i class="fa fa-indent"></i><a href="add_section.php"> Add Section</a></li>
			</ol>
		  <hr>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Logo Image</th>
						<th>Tag Line</th>
						<th>Display</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			 <span><a href="update_hero.php?id=11">View</a></span>
		</div>
		<h3><a href="#"><strong>Our Customers Can't Live Without Us</strong></a></h3>
		<div>
			<ol class="breadcrumb">
				<li><i class="fa fa-indent"></i><a href="add_section.php"> Add Section</a></li>
			</ol>
		  <hr>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Logo Image</th>
						<th>Tag Line</th>
						<th>Display</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			 <span><a href="update_hero.php?id=11">View</a></span>
		</div>
		<h3><a href="#"><strong>Start Eating Healthy Today</strong></a></h3>
		<div>
			<ol class="breadcrumb">
				<li><i class="fa fa-indent"></i><a href="add_section.php"> Add Section</a></li>
			</ol>
		  <hr>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Logo Image</th>
						<th>Tag Line</th>
						<th>Display</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
			 <span><a href="update_hero.php?id=11">View</a></span>
		</div>
</div>
  </div><!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
