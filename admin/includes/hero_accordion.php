<h3><a href="#"><strong>Hero</strong></a></h3>
	<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_hero.php"> Add</a></li>
		</ol>
	  <hr>
	  <div class="col-md-8 col-md-offset-2">
	  	<table class="table table-condensed">
			<thead>
				<tr>
					<th>Logo Image</th>
					<th>Tag Line</th>
					<th>Display</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
Hero::getHero("SELECT * FROM hero ");
$heros = Hero::read_all();
?>
<?php foreach( $heros as $hero ) : ?>
				<tr>
					<td><img class="admin-photo-thumbnail" src="media/<?php echo $hero->logo; ?>" alt="">
					<div>

					</div>
					</td>
					<td><?php echo $hero->hero_text; ?></td>
					<td><?php echo $hero->display; ?></td>
					<td><span><a class="btn btn-info btn-xs" href="update_hero.php?id=<?php echo $hero->hero_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	  </div>


	</div>
