<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
 <div id="wrapper">
	<?php include "includes/admin_top_navigation.php"; ?>

  <div id="page-wrapper">
		<div class="container-fluid">
			 <!-- Page Heading -->
			 <div class="row">
				  <div class="col-lg-12">
						<h1 class="page-header">Omnifood</h1>
						<ol class="breadcrumb">
							 <li>
								  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
							 </li>
							 <li class="active">
								  <i class="fa fa-file"></i> Blank Page
							 </li>
						</ol>
				  </div>
			 </div><!-- /.row -->
		</div><!-- /.container-fluid -->
		<hr>
		<?php include "includes/admin_dashboard.php"; ?>
  </div><!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->
<?php include "includes/admin_footer.php"; ?>
