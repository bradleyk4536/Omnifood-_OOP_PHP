<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php
$testimonial = new Testimonial();
if(isset($_POST['submit'])) :
	if($testimonial) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['testimonial'])) :
			$testimonial->image = $testimonial->set_file($_FILES['image']);
			if(!$testimonial->image) :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD <br> LOGO IMAGE"; //. $media->file_errors;
			else:
				$testimonial->save();
			endif;
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$testimonial->add_up_result = $testimonial->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($testimonial->add_up_result) :
					$testimonial->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW TESTIMONIAL ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW TESTIMONIAL <br>" . $testimonial->file_errors;
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
				<h1 class="page-header">Omnifoods &mdash; <small>Add Testimonial</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="fa fa-indent"></i>&emsp;<a href="add_testimonial.php?section=testimonial">Add Testimonial</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($testimonial->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Testimonial::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($testimonial->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Testimonial::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php require_once "includes/form_content/testimonial_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php require_once "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
