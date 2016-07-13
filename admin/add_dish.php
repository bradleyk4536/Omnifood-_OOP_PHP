<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php
$dish = new Dish();
if(isset($_POST['submit'])) :
	if($dish) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['name']) && !empty($_POST['description'])) :
			$dish->image = $dish->set_file($_FILES['image']);
			if(!$dish->image) :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD <br> IMAGE"; //. $media->file_errors;
			else:
				$dish->save();
			endif;
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$dish->add_up_result = $dish->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($dish->add_up_result) :
					$dish->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW DISH ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW DISH <br>" . $dish->file_errors;
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
				<h1 class="page-header">Omnifoods &mdash; <small>Add dish</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="fa fa-indent"></i>&emsp;<a href="add_dish.php?section=dish">Add Dish</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($dish->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Dish::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($dish->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Dish::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php require_once "includes/form_content/dish_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php require_once "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
