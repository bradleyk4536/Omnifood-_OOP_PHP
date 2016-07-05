<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
	if(empty($_GET['id'])) :
		redirect_to("index.php");
	endif;
	$hero = Hero::find_by_id($_GET['id']);
	$saveLogo = $hero;
?>

<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
		 <div class="row">
			  <div class="col-lg-12">
					<h1 class="page-header">Omnifoods &mdash; <small>Hero Section</small> </h1>
					<ol class="breadcrumb">
					 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
					 <li><i class="ion-ios-camera"></i>  <a href="../index.php">View Site</a></li>
				</ol>
<?php
if(isset($_POST['submit'])) :
	$hero = new Hero;
	if($hero) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['brand_text']) && !empty($_POST['hero_text'])) :
			$hero->brand_icon 			= trim($_POST['brand_icon']);
			$hero->brand_text 			= trim($_POST['brand_text']);
			$hero->hero_text 				= trim($_POST['hero_text']);
			$hero->hero_subtext 			= trim($_POST['sub_text']);
			$hero->display 				= trim($_POST['display']);
			$hero->newsletter_text 		= trim($_POST['news_text']);

			$hero->save_file_data($saveLogo);

				if(empty($_FILES['logo'])) :
				  	/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				  $hero->add_up_result = $hero->add_update("update");
				  else :
				  	  $hero->logo = $hero->set_file($_FILES['logo']);
					  if (!$hero->logo) :
				  			$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW LOGO <br>" . $hero->file_errors;
				  	  else:
						$hero->save();
						/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */

				  	  endif;
				  $hero->add_up_result = $hero->add_update("update");
				endif;
/*TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
			if($hero->add_up_result) :
				$hero->add_up_result->execute();
				$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; HERO SECTION UPDATED <br>" . $hero->file_errors;
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Hero::notifyMessage($session->message, "success");
				echo "</div>";

			else :
				$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO UPDATE HERO SECTION";
				echo "<div class='col-sm-6 col-sm-offset-3'>";
				Hero::notifyMessage($session->message, "failure");
				echo "</div>";
			endif;
		endif;
	endif;
endif;
?>
<?php include "includes/hero_form.php"; ?>
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
