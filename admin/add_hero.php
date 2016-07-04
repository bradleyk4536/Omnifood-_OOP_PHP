<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$hero = new Hero();
if(isset($_POST['submit'])) :
	if($hero) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['brand_text']) && !empty($_POST['hero_text'])) :
			$hero->brand_icon 			= trim($_POST['brand_icon']);
			$hero->brand_text 			= trim($_POST['brand_text']);
			$hero->hero_text 				= trim($_POST['hero_text']);
			$hero->hero_subtext 			= trim($_POST['sub_text']);
			$hero->display 				= trim($_POST['display']);
			$hero->newsletter_text 		= trim($_POST['news_text']);
			$hero->logo 			 = $hero->set_file($_FILES['logo']);
			if(!$hero->logo) :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD <br> LOGO IMAGE"; //. $media->file_errors;
			else:
				$hero->save();
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$hero->add_up_result = $hero->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($hero->add_up_result) :
					$hero->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW HERO SECTION ADDED <br>" . $hero->file_errors;
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW HERO SECTION <br>" . $hero->file_errors;
				endif;
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
				<h1 class="page-header">Omnifoods &mdash; <small>Hero Section</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($hero->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Hero::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($hero->add_up_result === false || $hero->logo === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Hero::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php include "includes/hero_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
