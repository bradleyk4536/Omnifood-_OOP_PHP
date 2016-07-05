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
								 <li><i class="ion-ios-camera"></i> <a href="add_page.php">Page Manager</a></li>
								 <?php endif; ?>
								 <li><i class="ion-android-restaurant"></i> <a href="../index.php"> View Site</a></li>
						</ol>
				  </div>
			 </div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<hr>
		<ol class="breadcrumb">
							 <li><i class="fa fa-indent"></i><a href="add_section.php"> Add Section</a></li>
						</ol>
		<div id="accordion">
		<?php foreach($sections as $section ) : ?>
			<h3><a href="#"><i class="<?php echo $section->section_icon; ?>"></i><strong> <?php echo $section->section_title; ?></strong></a></h3>
<div>
    <p>
        <strong>HTML5</strong> is a markup language for structuring and presenting content for the World Wide Web, and is a core technology of the Internet originally proposed by Opera Software. It is the fifth revision of the HTML standard (created in 1990 and standardized as HTML4 as of 1997) and, as of July 2012, is still under development.
    </p>
    <span><a href="update_hero.php?id=11">View</a></span>
</div>

		<?php endforeach; ?>





		</div>
  </div><!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
