<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$section = new Section();
if(isset($_POST['submit'])) :
	if($section) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['section_title'])) :
			$section->section_icon 				= trim($_POST['section_icon']);
			$section->section_title 			= trim($_POST['section_title']);
			$section->section_description 	= trim($_POST['section_description']);
			$section->display						= trim($_POST['display']);
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$section->add_up_result = $section->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($section->add_up_result) :
					$section->add_up_result->execute();

					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW SECTION ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW SECTION <br>";
				endif;
		endif;
	endif;
endif;
?>
<?php include "includes/admin_top_navigation.php"; ?>
	<div id="page-wrapper">

	<div class="container-fluid">
		 <!-- Page Heading -->
	 <div class="row">
		  <div class="col-lg-12">
				<h1 class="page-header">Omnifoods &mdash; <small>Add Section</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li>
						  <i class="fa fa-indent"></i>&emsp;<a href="add_section.php">Add Section</a>
					 </li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($section->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Section::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($section->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Section::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php include "includes/section_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
