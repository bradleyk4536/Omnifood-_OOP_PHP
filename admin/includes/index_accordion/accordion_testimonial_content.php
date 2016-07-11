<div class="col-md-12">
	  	<table class="table table-condensed">
			<thead>
				<tr>
					<th class="col-md-4">Testimonial</th>
					<th class="col-md-4">Author</th>
					<th class="col-md-2">Display</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php foreach( $testimonials as $testimonial ): ?>
				<tr>
					<td><?php echo substr($testimonial->testimonial, 0, 30); ?>...</td>
					<td><?php echo $testimonial->author; ?></td>
					<td><?php echo $testimonial->display; ?></td>
					<td><span><a class="btn btn-info btn-xs" href="update_testimonial.php?id=<?php echo $testimonial->testimonial_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
</div>
