<?php require_once "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php
$plan = new Plan();
if(isset($_POST['submit'])) :
	if($plan) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['plan_name']) && !empty($_POST['plan_price'])) :
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$plan->add_up_result = $plan->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($plan->add_up_result) :
					$plan->add_up_result->execute();
					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW PLAN ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW PLAN<br>";
				endif;
		endif;
	endif;
endif;
?>
<?php require_once "includes/admin_top_navigation.php"; ?>
	<div id="page-wrapper">
	<div class="container-fluid">
		 <!-- Page Heading -->
	 <div class="row">
		  <div class="col-lg-12">
				<h1 class="page-header">Omnifoods &mdash; <small>Add Plan</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li><i class="ion-ios-home"></i>&emsp;<a href="add_plan.php?section=start_eating">Add Plan</a></li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($plan->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Plan::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($plan->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Plan::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php require_once "includes/form_content/plan_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php require_once "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
