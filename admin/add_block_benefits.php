<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php
$block = new Block();
if(isset($_POST['submit'])) :
	if($block) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['title']) && !empty($_POST['description'])) :
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$block->add_up_result = $block->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($block->add_up_result) :
					$block->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW BENEFIT ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW BENEFIT<br>";
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
				<h1 class="page-header">Omnifoods &mdash; <small>Add Benefit</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="fa fa-indent"></i>&emsp;<a href="add_block_benefits.php">Add Benefit</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($block->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Block::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($block->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Block::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php require_once "includes/form_content/block_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php require_once "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
