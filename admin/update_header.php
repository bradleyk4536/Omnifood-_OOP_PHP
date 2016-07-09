<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("index.php");
	endif;
	$section = Section::find_by_id($_GET['id']);
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Update Section Header</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-camera"></i>  <a href="../index.php">View Site</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$section = new Section;
	if($section) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['title'])) :
			$section->add_up_result = $section->add_update("update");
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($section->add_up_result) :
				$section->add_up_result->execute();
				$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; SECTION HEADER UPDATED <br>";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Section::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE SECTION HEADER";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Section::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/form_content/section_form.php"; ?>
			  </div>
		 </div>
<?php require_once "delete_media.php"; ?><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php require_once "includes/admin_footer.php"; ?>
