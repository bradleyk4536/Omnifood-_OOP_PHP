<?php
Section::getAll("section2");
$sections = Section::read_all();
?>
<?php foreach( $sections as $section ) : ?>
<h3><a href="#"><strong><?php echo $section->section_title; ?></strong></a></h3>
<?php endforeach; ?>
	<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php"> Add Section Header</a></li>
		</ol>
		<div class="col-md-12">
	  	<table class="table table-condensed">
			<thead>
				<tr>
<!--					<th>Icon</th>	-->
					<th class="col-md-4">Title</th>
					<th class="col-md-4">Description</th>
					<th class="col-md-2">Display</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php foreach( $sections as $section ) : ?>
				<tr>
<!--
					<td><i class="<?php echo $section->section_icon; ?>"></i>
					</td>
-->
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
<?php
Hero::getAll("SELECT * FROM hero ");
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
