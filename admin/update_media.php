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
			$media->save_file_data($saveMedia);
				if(empty($_FILES['media'])) :
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $media->add_up_result = $media->add_update("update");
				  else :
				  	  $media->media_result = $media->set_file($_FILES['media']);
					  if (!$media->media_result) :
				  			$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE NEW MEDIA <br>" . $media->file_errors;
				  	  else:
						$media->save();
						/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  	  endif;
				  $media->add_up_result = $media->add_update("update");
				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($media->add_up_result) :
				$media->add_up_result->execute();
				$session->message = "<i class='ion-ios-camera'></i> SUCCESS &mdash; MEDIA UPDATED <br>" . $media->file_errors;
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE MEDIA";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				User::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php include "includes/media_form.php"; ?>
			  </div>
		 </div>
<?php include "delete_media.php"; ?><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php include "includes/admin_footer.php"; ?>
