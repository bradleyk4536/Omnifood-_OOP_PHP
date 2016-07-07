<?php include "init.php"; ?>
<?php
	if(isset($_POST['submit'])) :
		if(!empty($_POST['username']) && !empty($_POST['password']) ) :
			$verify = User::check_user();
			if($verify) :
				$session->set_login_sessions($verify);
				header("Location: admin/index.php");
			else :
				$session->message = "<i class='ion-lock-combination'></i> STOP &mdash; YOU ARE NOT AUTHORIZED TO LOGIN TO THIS SITE";
			endif;
		endif;
	endif;
?>
<section id="login">
<!--	MODAL FORM NOT DISPLAYED UNTIL BUTTON IS SELECTED-->
	<div class="modal fade" id="login_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Login</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" action="" method="post">
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-3">
							<input type="text" name="username" class="form-control" id="subscribe-email" placeholder="Username...">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-3">
							<input type="password" name="password" class="form-control" id="subscribe-email" placeholder="Password...">
						</div>
					</div>
					<hr>
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4">
							<input type="submit" name="submit" class="form-control btn btn-danger" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
<?php include "./includes/contact_modal.php"; ?>
