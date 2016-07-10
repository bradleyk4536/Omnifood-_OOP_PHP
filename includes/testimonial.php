<?php
$headers 		= Populate::testimonialHeader();
$testimonials 	= Populate::testimonial();
?>


<section id="testimonial">
	<div class="container">

	<?php foreach( $headers as $header ) : ?>
		<div class="section_header">
			<h2><?php echo $header->title; ?></h2>
		</div>
	<?php endforeach; ?>

		<div class="row">

		<?php foreach( $testimonials as $testimonial ) : ?>
			<div class="col-sm-4">
				<blockquote><?php echo $testimonial->testimonial; ?>.
					<cite><img src="admin/media/<?php echo $testimonial->image; ?>" alt="<?php echo $testimonial->author; ?>"><?php echo $testimonial->author; ?></cite>
				</blockquote>
			</div>
	<?php endforeach; ?>

		</div>
	</div>
</section>
