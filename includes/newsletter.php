<!--DISPLAYED ON LANDING PAGE-->
<section id="newsletter">
	<div class="container">
	<?php if($session->message) : ?>
			<div class="col-sm-12">
				<div class="row">
					<?php User::notifyMessage($session->message, "failure"); ?>
				</div>
			</div>
	<?php endif; ?>
		<div class="row text-center">
			<div class="col-sm-6">
				<p class="lead"><strong>Subscribe to our great newsletter</strong></p>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletter_modal">Subscribe now</button>
			</div>
		</div>
	</div>
<?php include "includes/newsletter_modal_content.php"; ?>
</section>
