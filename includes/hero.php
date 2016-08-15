<?php $heros = Populate::hero_section(); ?>
<section id="hero" data-type="background" data-speed="5">
	<div class="container clear-fix">
		<div class="row">
		<?php foreach( $heros as $hero ) : ?>
			<div class="col-sm-4 visible-md-block visible-lg-block">
				<img class="hero-image" src="admin/media/<?php echo $hero->logo; ?>" alt="">
			</div>
			<div class="hero-text col-sm-8">
			<h1><?php echo $hero->hero_text; ?></h1>
			<h2><?php echo $hero->hero_subtext; ?></h2>
			<a href="#" class="btn btn-full">I&#39;m hungry</a>
			<a href="#" class="btn btn-ghost">Show Me More</a>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</section>
