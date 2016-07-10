<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php
$how_works = new Works();
if(isset($_POST['submit'])) :
	if($how_works) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['instruction'])) :
			$how_works->image = $how_works->set_file($_FILES['how_works']);
			if(!$how_works->image) :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD <br> LOGO IMAGE"; //. $media->file_errors;
			else:
				$how_works->save();
			endif;
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$how_works->add_up_result = $how_works->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($how_works->add_up_result) :
					$how_works->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW INSTRUCTION ADDED";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW TESTIMONIAL <br>" . $how_works->file_errors;
				endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/admin_top_navigation.php"; ?>
<div id="page-wrapper">
	<div class="container-fluid">
	 <div class="row">
		  <div class="col-lg-12">
				<h1 class="page-header">Omnifoods &mdash; <small>Add Instruction</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="fa fa-indent"></i>&emsp;<a href="add_how_works.php?section=how_works">Add How Works</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($how_works->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Works::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($how_works->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Works::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php require_once "includes/form_content/how_works_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php require_once "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
