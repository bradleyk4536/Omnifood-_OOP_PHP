<?php
$foods = Populate::foodHeader();
$benefits = Populate::foodBenefits();
?>
<section id="get_food_fast">
	<div class="container">
		<div class="section_header">

		<?php foreach( $foods as $food ) : ?>
			<i class="<?php echo $food->icon; ?> section_icon"></i>
			<h2><?php echo $food->title; ?></h2>
			<p class="section_intro_text"><?php echo $food->description; ?></p>
		<?php endforeach; ?>

		</div>
		<div class="row">

		<?php foreach ( $benefits as $benefit ) : ?>
			<div class="col-sm-3">
			<i class="<?php echo $benefit->icon; ?> icon-big" aria-hidden="true"></i>
			<h3><?php echo $benefit->title; ?></h3>
			<p><?php echo $benefit->description; ?></p>
			</div>
		<?php endforeach; ?>

		</div><!--end row-->
	</div><!--end container-->
	<div class="menu_button text-center">
		<a href="menu.php" class="btn btn-info btn-lg btn-color">See our menu</a>
	</div>
</section>
