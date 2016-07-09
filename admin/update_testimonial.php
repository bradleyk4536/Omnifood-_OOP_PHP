<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("index.php");
	endif;
	$testimonial = Testimonial::find_by_id($_GET['id']);
	$saveImage = $testimonial;
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Update Testimonial</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-camera"></i>  <a href="../index.php">View Site</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$testimonial = new Testimonial;
	if($testimonial) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['testimonial'])) :
			$testimonial->save_file_data($saveImage);
				if(empty($_FILES['testimonial'])) :
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $testimonial->add_up_result = $testimonial->add_update("update");
				  else :
				  	  $testimonial->image = $testimonial->set_file($_FILES['testimonial']);
					  if (!$testimonial->image) :
				  			$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW LOGO <br>" . $testimonial->file_errors;
				  	  else:
						$testimonial->save();
						/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  	  endif;
				  $testimonial->add_up_result = $testimonial->add_update("update");
				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($testimonial->add_up_result) :
				$testimonial->add_up_result->execute();
				$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; HERO SECTION UPDATED <br>" . $testimonial->file_errors;
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Testimonial::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE HERO SECTION";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Testimonial::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/form_content/testimonial_form.php"; ?>
			  </div>
		 </div>
<?php require_once "delete_media.php"; ?><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php require_once "includes/admin_footer.php"; ?>
