<?php
$headers = Populate::foodHeader();
$benefits = Populate::foodBenefits();
?>
<section id="get_food_fast">
	<div class="container">
		<div class="section_header">

		<?php
			if(!$headers) :
				echo "<h2>Omnifoods - Great Food Fast</h2>";
			else :
				foreach( $headers as $header ) :
		?>
			<i class="<?php echo $header->icon; ?> section_icon"></i>
			<h2><?php echo $header->title; ?></h2>
			<p class="section_intro_text"><?php echo $header->description; ?></p>
		<?php
				endforeach;
			endif;
		?>
		</div>
		<div class="row">

		<?php
			if($benefits) :
				foreach ( $benefits as $benefit ) :
		?>
				<div class="col-sm-3">
				<i class="<?php echo $benefit->icon; ?> icon-big" aria-hidden="true"></i>
				<h3><?php echo $benefit->title; ?></h3>
				<p><?php echo $benefit->description; ?></p>
				</div>
		<?php
				endforeach;
			endif;
		?>

		</div><!--end row-->
	</div><!--end container-->
	<div class="menu_button text-center">
		<a href="menu.php" class="btn btn-info btn-lg btn-color">See our menu</a>
	</div>
</section>
