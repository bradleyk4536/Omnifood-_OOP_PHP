<?php
	$headers 	= Populate::getHeader('section', 'how_works');
	$instructs 	= Populate::getBody('how_works', 'how_works');
?>
<section id="how_it_works">
	<div class="container">

	<?php foreach( $headers as $header ) : ?>
		<div class="section_header">
			<h2><?php echo $header->title; ?></h2>
		</div>
	<?php endforeach; ?>

		<div class="row">

	<?php foreach( $instructs as $instruct ) : ?>
		<?php if(!empty($instruct->image)) : ?>
			<div class="col-sm-6 phone">
				<img src="admin/media/<?php echo $instruct->image; ?>" alt="" class="app-screen js--wp-2">
			</div>
		<?php endif; ?>
	<?php endforeach; ?>

			<div class="col-sm-6">
		<?php $counter = 0; ?>
		<?php foreach( $instructs as $instruct ) : ?>
			<?php $counter++; ?>
				<div class="work-steps clearfix">
				<span> <?php echo $counter; ?>.</span>
				<p><?php echo $instruct->instruction; ?></p>
				</div>
		<?php endforeach; ?>

				<a href="#" class="btn-app"><img src="assets/images/download-app-android.png" alt="Google Play"></a>
				<a href="#" class="btn-app"><img src="assets/images/download-app.svg" alt="Apple Store"></a>
			</div>
		</div>
	</div>
</section>
