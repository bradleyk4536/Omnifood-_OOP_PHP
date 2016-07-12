<div class="col-md-12">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="col-md-3">Plan</th>
				<th class="col-md-3">Price</th>
				<th class="col-md-4">Description</th>
				<th class="col-md-4">Display</th>

				<th></th>
			</tr>
		</thead>
		<tbody>
<?php foreach( $start_eating as $eat ): ?>
			<tr>
				<td><?php echo $eat->plan_name; ?></td>
				<td><?php echo $eat->plan_price; ?></td>
				<td><?php echo $eat->plan_description; ?></td>
				<td><?php echo $eat->display; ?></td>
				<td><span><a class="btn btn-info btn-xs" href="update_plan.php?id=<?php echo $eat->plan_id; ?>">View</a></span></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
</div>
