<div class="col-md-8 col-md-offset-2">
	  	<table class="table table-condensed">
			<thead>
				<tr>
					<th class="col-md-4">City</th>
					<th class="col-md-2">Display</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php foreach( $cities as $city ): ?>
				<tr>
					<td><?php echo substr($city->name, 0, 30); ?>...</td>
					<td><?php echo $city->display; ?></td>
					<td></td>
					<td><span><a class="btn btn-info btn-xs" href="update_city.php?id=<?php echo $city->cities_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
		<h6 class="text-center">NOTE: NO MORE THAN FOUR CITIES CAN BE SET TO DISPLAY TRUE </h6>
</div>
