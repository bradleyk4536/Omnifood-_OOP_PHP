<?php
$headers 		= Populate::getHeader('section', 'testimonial');
$testimonials 	= Populate::getBody('testimonial', 'testimonial');
?>
<section id="testimonial">
	<div class="container">

	<?php
		if(!$headers) :
			echo "<h2>Testimonials</h2>";
		else :
			foreach( $headers as $header ) :
	?>
			<div class="section_header">
				<i class="<?php echo $header->icon; ?> section_icon"></i>
				<h2><?php echo $header->title; ?></h2>
				<p class="section_intro_text"><?php echo $header->description; ?></p>
			</div>
	<?php
			endforeach;
		endif;
	?>

		<div class="row">

		<?php
		if($testimonials) :
			foreach( $testimonials as $testimonial ) :
		?>
			<div class="col-sm-4">
				<blockquote><?php echo $testimonial->testimonial; ?>.
					<cite><img src="admin/media/<?php echo $testimonial->image; ?>" alt="<?php echo $testimonial->author; ?>"><?php echo $testimonial->author; ?></cite>
				</blockquote>
			</div>
	<?php
			endforeach;
		endif;
	?>

		</div>
	</div>
</section>
