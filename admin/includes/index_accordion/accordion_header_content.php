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
<?php foreach( $sections as $section ) : ?>
				<tr>
					<td><?php echo $section->title; ?></td>
					<td><?php echo substr($section->description, 0, 50); ?>...</td>
					<td><?php echo $section->display; ?></td>
					<td><span><a class="btn btn-info btn-xs" href="update_header.php?id=<?php echo $section->section_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	  </div>

