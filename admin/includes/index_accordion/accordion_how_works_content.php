<div class="col-md-12">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="col-md-5">Instruction</th>
				<th class="col-md-5">Display</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php foreach( $how_works as $work ): ?>
			<tr>
				<td><?php echo $work->instruction; ?></td>
				<td><?php echo $work->display; ?></td>
				<td><span><a class="btn btn-info btn-xs" href="update_how_works.php?id=<?php echo $work->how_id; ?>">View</a></span></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
</div>
