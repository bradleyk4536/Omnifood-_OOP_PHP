<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("medias.php");
	endif;
	$media = Media::find_by_id($_GET['id']);
	$saveMedia = $media;
?>

<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Update Media</small> </h1>
					<ol class="breadcrumb">
					 <li><i class="ion-ios-camera"></i>  <a href="medias.php">Media Manager</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$media = new Media;
	if($media) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['caption']) && !empty($_POST['alternate_text'])) :
			$media->caption 	= trim($_POST['caption']);
			$media->alternate_text = trim($_POST['alternate_text']);
			$media->save_file_data($saveMedia);

				if(empty($_FILES['media'])) :
				  print_r($saveMedia);
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $media->add_up_result = $media->add_update("update");
				  else :
				  	$media->set_file($_FILES['media']);
				  	$media->save();
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
					$media->add_up_result = $media->add_update("update");

				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($media->add_up_result) :
				$media->add_up_result->execute();
				$session->message = "<i class='ion-ios-camera'></i> SUCCESS &mdash; MEDIA UPDATED";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($session->message, "success");
				echo "</div>";

			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE MEDIA";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($seesion->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php include "includes/media_form.php"; ?>
			  </div>
		 </div>
<?php include "delete_media.php"; ?>
		 <!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<?php include "includes/admin_footer.php"; ?>
