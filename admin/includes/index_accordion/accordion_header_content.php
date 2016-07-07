<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php"> Add Section Header</a></li>
		</ol>
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
					<td><?php echo $section->section_title; ?></td>
					<td><?php echo $section->section_description; ?></td>
					<td><?php echo $section->display; ?></td>
					<td><span><a class="btn btn-info btn-xs" href="update_header.php?id=<?php echo $section->section_id; ?>">View</a></span></td>
				</tr>
<?php endforeach; ?>
			</tbody>
		</table>
	  </div>
	  <ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php"> Add Section Benefits</a></li>
	  </ol>
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
			</tbody>
		</table>
	  </div>
</div>
