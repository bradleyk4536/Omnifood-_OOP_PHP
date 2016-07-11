<div class="col-md-12">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="col-md-4">Title</th>
				<th class="col-md-4">Description</th>
				<th class="col-md-2">Display</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php foreach( $benefits as $benefit ): ?>
			<tr>
				<td><?php echo $benefit->title; ?></td>
				<td><?php echo substr($benefit->description, 0, 30); ?>...</td>
				<td><?php echo $benefit->display; ?></td>
				<td><span><a class="btn btn-info btn-xs" href="update_block_benefits.php?id=<?php echo $benefit->block_id; ?>">View</a></span></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
</div>
