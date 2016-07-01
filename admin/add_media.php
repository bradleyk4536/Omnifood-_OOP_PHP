<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$media = new Media();

if(isset($_POST['submit'])) {
	if($media) {
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['caption']) && !empty($_POST['alternate_text'])) {
			$media->caption 			= trim($_POST['caption']);
			$media->alternate_text 	= trim($_POST['alternate_text']);

			$media->set_file($_FILES['media']);
			$media->save();

/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
			$media->add_up_result = $media->add_update("add");
/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($media->add_up_result) {
				$media->add_up_result->execute();
				$session->message = "<i class='ion-ios-camera'></i> SUCCESS &mdash; NEW MEDIA ADDED";
			} else {
					$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW MEDIA";
			}
		}
	}
}
?>
<?php include "includes/admin_top_navigation.php"; ?>
	<div id="page-wrapper">

	<div class="container-fluid">
		 <!-- Page Heading -->
	 <div class="row">
		  <div class="col-lg-12">
				<h1 class="page-header">Omnifoods &mdash; <small>Add Media</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="medias.php">Media Manager</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="add_media.php">Add Another Image</a></li>
				</ol>
					<?php if($media->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Media::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if($media->add_up_result === false && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Media::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php include "includes/media_form.php"; ?>

		  </div>

	 </div>
		 <!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<?php include "includes/admin_footer.php"; ?>
<!-- /#page-wrapper -->
