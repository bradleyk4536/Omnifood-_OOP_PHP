<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("index.php");
	endif;
	$how_works = Works::find_by_id($_GET['id']);
	$saveImage = $how_works;
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Update Instruction</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-camera"></i>  <a href="../index.php">View Site</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$how_works = new Works;
	if($how_works) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['instruction'])) :
			$how_works->save_file_data($saveImage);
				if(empty($_FILES['how_works'])) :
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $how_works->add_up_result = $how_works->add_update("update");
				  else :
				  	  $how_works->image = $how_works->set_file($_FILES['how_works']);
					  if (!$how_works->image) :
				  			$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW LOGO <br>" . $how_works->file_errors;
				  	  else:
						$how_works->save();
						/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  	  endif;
				  $how_works->add_up_result = $how_works->add_update("update");
				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($how_works->add_up_result) :
				$how_works->add_up_result->execute();
				$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; INSTRUCTION UPDATED <br>";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Works::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE INSTRUCTION";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Works::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/form_content/how_works_form.php"; ?>
			  </div>
		 </div>
<?php require_once "delete_media.php"; ?><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php require_once "includes/admin_footer.php"; ?>
