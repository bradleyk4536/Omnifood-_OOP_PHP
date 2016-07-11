<?php
	$headers = Populate::getHeader('section', 'cities');
	$cities	= Populate::getBody('cities', 'cities');
?>
<section id="cities">
	<div class="container">

	<?php foreach( $headers as $header ) : ?>
		<div class="section_header">
			<h2><?php echo $header->title; ?></h2>
		</div>
	<?php endforeach; ?>

		<div class="row">

			<?php foreach( $cities as $city ) :?>
				<div class="col-sm-3">
					<img src="admin/media/<?php echo $city->image; ?>" alt="<?php echo $city->name; ?>">
					<h3><?php echo $city->name; ?></h3>
					<div class="city-feature">
						<i class="<?php echo $city->icon_1; ?> icon-small"></i><?php echo $city->description_1; ?>
					</div>
					<div class="city-feature">
						<i class="<?php echo $city->icon_2; ?> icon-small"></i><?php echo $city->description_2; ?>
					</div>
					<div class="city-feature">
						<i class="<?php echo $city->social_icon; ?> icon-small"></i>
						<a href="#" class="fmt-link"><?php echo $city->smedia_link; ?></a>
					</div>
				</div>
			<?php endforeach; ?>

			</div>
	</div>
</section>
