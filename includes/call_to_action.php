<?php
	$headers = Populate::getHeader('section', 'start_eating');
	$plans = Populate::getBody('plans', 'start_eating');
?>
<section id="call_to_action">
	<div class="container">

	<?php foreach( $headers as $header ) : ?>
		<div class="section_header">
			<h2><?php echo $header->title; ?></h2>
		</div>
	<?php endforeach; ?>

		<div class="row">

		<?php foreach( $plans as $plan ) :?>
			<div class="col-sm-4">
				<div class="plan-box">
				<div>
					<h3><?php echo $plan->plan_name; ?></h3>
					<p><span><?php echo $plan->plan_price; ?></span></p>

				<?php if(!empty($plan->plan_description)) : ?>
					<p><?php echo $plan->plan_description; ?></p>
				<?php else : ?>
				  <p>&emsp;</p>
				<?php endif; ?>

				</div>
				<div>
					<ul>
						<li><i class="<?php echo $plan->plan_icon1; ?> icon-small"></i><?php echo $plan->plan_feature1; ?></li>
						<li><i class="<?php echo $plan->plan_icon2; ?> icon-small"></i><?php echo $plan->plan_feature2; ?></li>
						<li><i class="<?php echo $plan->plan_icon3; ?> icon-small"></i><?php echo $plan->plan_feature3; ?></li>

					<?php if (!empty($plan->plan_icon4) || !empty ($plan->plan_feature4)) : ?>
						<li><i class="<?php echo $plan->plan_icon4; ?> icon-small"></i><?php echo $plan->plan_feature4; ?></li>
					<?php else : ?>
					 	<li class='icon-small'>&emsp;</li>
					<?php endif; ?>

					</ul>
				</div>
				<div><a href="#" class="btn <?php echo $plan->action; ?> btn-lg">Sign up now</a></div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</section>
