<?php include "includes/admin_header.php"; ?>
<?php if(!$session->is_signed_in()) { header("Location: ../index.php"); } ?>
<div id="wrapper">
<?php include "includes/admin_top_navigation.php"; ?>
<?php
$page = new Page();
if(isset($_POST['submit'])) :
	if($page) :
			/* CHECK TO SEE IF ALL FIELDS ARE FILLED IN BEFORE GOING ON*/
		if(!empty($_POST['page_name']) && !empty($_POST['page_link'])) :
			$page->page_name 				= trim($_POST['page_name']);
			$page->page_link 				= trim($_POST['page_link']);
/* BIND INPUTS TO PREPARE STATEMENT BINDPARAMS */
				$page->add_up_result = $page->add_update("add");
	/*	TEST FOR PREPARE STATEMENT THEN EXECUTE IF TRUE */
				if($page->add_up_result) :
					$page->add_up_result->execute();

					$session->message = "<i class='ion-happy-outline'></i> SUCCESS &mdash; NEW SECTION ADDED <br>";
				else :
						$session->message = "<i class='ion-sad-outline'></i> FAILURE &mdash; UNABLE TO ADD NEW SECTION <br>";
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
				<h1 class="page-header">Omnifoods &mdash; <small>Add Section</small> </h1>
				<ol class="breadcrumb">
				 <li><i class="fa fa-dashboard"></i>  <a href="index.php">Site Manager</a></li>
				 <li>
						  <i class="fa fa-indent"></i>&emsp;<a href="add_page.php">Add Page</a>
				 </li>
				 <li><i class="ion-ios-camera"></i>&emsp;<a href="../index.php">View Site</a></li>
				</ol>
					<?php if($page->add_up_result && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Page::notifyMessage($session->message, "success"); ?>
							</div>
							<?php endif; ?>
							<?php if(($page->add_up_result === false) && isset($session->message)) : ?>
							<div class="col-sm-6 col-sm-offset-3">
								<?php Page::notifyMessage($session->message, "failure"); ?>
							</div>
					<?php endif; ?>
<?php include "includes/page_form.php"; ?>
		  </div>
	 </div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"; ?><!-- /#page-wrapper -->
