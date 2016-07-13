<?php
Section::get_header("dish");
$sections = Section::read_all();
$dishes = Dish::read_All();
?>
<h3><a href="#"><strong>Dishes</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=dish"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_dish.php?section=dish"> Add Dish</a></li>
	  </ol>
<?php include "accordion_dishes_content.php"; ?>
</div>
