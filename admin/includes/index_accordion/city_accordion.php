<?php
Section::get_header("cities");
$sections = Section::read_all();
$cities 	 = City::read_all();
?>
<h3><a href="#"><strong>Cities</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=get_food"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="ion-ios-home"></i><a href="add_city.php?section=cities"> Add City</a></li>
	  </ol>
<?php include "accordion_city_content.php"; ?>
</div>

