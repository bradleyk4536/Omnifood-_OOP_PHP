<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("index.php");
	endif;
	$dish = Dish::find_by_id($_GET['id']);
	$saveImage = $dish;
?>
<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Update Dish</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-camera"></i>  <a href="../index.php">View Site</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$dish = new Dish;
	if($dish) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['name'])) :
			$dish->save_file_data($saveImage);
				if(empty($_FILES['image'])) :
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $dish->add_up_result = $dish->add_update("update");
				  else :
				  	  $dish->image = $dish->set_file($_FILES['testimonial']);
					  if (!$dish->image) :
				  			$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW IMAGE <br>" . $dish->file_errors;
				  	  else:
						$dish->save();
						/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  	  endif;
				  $dish->add_up_result = $dish->add_update("update");
				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($dish->add_up_result) :
				$dish->add_up_result->execute();
				$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; TESTIMONIAL UPDATED <br>";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Dish::notifyMessage($session->message, "success");
				echo "</div>";
			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE TESTIMONIAL";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Dish::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/form_content/dish_form.php"; ?>
			  </div>
		 </div>
<?php require_once "delete_media.php"; ?><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</div>
<?php require_once "includes/admin_footer.php"; ?>
