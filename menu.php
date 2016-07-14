<?php include "includes/header.php"; ?>
<?php
	$headers = Populate::getHeader('section', 'dish');
	$dishes = Populate::getBody('dish', 'dish');
?>
<section id="menu">
<div class="container">
<?php foreach( $headers as $header) : ?>
	<div class="jumbotron">
		<h1 class="text-center"><i class="ion-android-restaurant"></i><?php echo $header->title; ?></h1>
	</div>
<?php endforeach; ?>

</div>
	<div class="row">

<?php foreach( $dishes as $dish ) : ?>
		<article class="dish col-sm-4">
			<div class="thumbnail">
				<img src="admin/media/<?php echo $dish->image; ?>" alt="<?php echo $dish->name; ?>">
			<h3><?php echo $dish->name; ?></h3>
			<p><?php echo substr($dish->description, 0, 150); ?>...<a href="#"> continue &raquo;</a></p>
			</div>
		</article>
<?php endforeach; ?>


	</div>
</section>
<?php include "includes/footer.php"; ?>
