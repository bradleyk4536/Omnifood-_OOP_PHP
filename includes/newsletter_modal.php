<!--DISPLAYED ON LANDING PAGE-->
<section id="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead"><strong>Subscribe to our great newsletter</strong></p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-primary btn lg" data-toggle="modal" data-target="#newsletter_modal">Get Newsletter</button>
			</div>
		</div>
	</div>
<!--	MODAL FORM NOT DISPLAYED UNTIL BUTTON IS SELECTED-->
	<div class="modal fade" id="newsletter_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe to our newsletter</h4>
			</div>
			<div class="modal-body">
				<p>Simply enter your name and email.</p>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label for="subscribe-name" class="col-sm-3 control-label">First Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="subscribe-email" placeholder="Enter first name">
						</div>
					</div>
					<div class="form-group">
						<label for="subscribe-name" class="col-sm-3 control-label">Last Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="subscribe-email" placeholder="Enter last name">
						</div>
					</div>
					<div class="form-group">
						<label for="subscribe-email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="subscribe-email" placeholder="Enter email">
						</div>
					</div>
					<input type="submit" class="btn btn-danger" value="Subscribe">
				</form>
				<hr>
				<p><small>By providing you email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect you privacy &amp; you may unscribe at any time. </small></p>
			</div>
		</div>
	</div>
</div>
</section>
