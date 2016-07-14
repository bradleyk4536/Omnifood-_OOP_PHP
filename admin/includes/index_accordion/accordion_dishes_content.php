<div class="col-md-12">
	  	<table class="table table-condensed">
			<thead>
				<tr>
					<th class="col-md-4">Dish Name</th>
					<th class="col-md-4">Dish Description</th>
					<th class="col-md-2">Display</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php foreach( $dishes as $dish ) : ?>
				<tr>
					<td><?php echo substr($dish->name, 0, 30); ?></td>
					<td><?php echo substr($dish->description, 0, 30); ?>...</td>
					<td><?php echo $dish->display; ?></td>
<td><span><a class="btn btn-info btn-xs" href="update_dish.php?id=<?php echo $dish->dish_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
</div>
