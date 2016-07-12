<?php
Section::get_header("start_eating");
$sections = Section::read_all();
$start_eating = Plan::read_all();
?>
<h3><a href="#"><strong>Start Eating Healthy</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=get_food"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_plan.php?section=start_eating"> Add Plan</a></li>
	  </ol>
<?php include "accordion_start_eating_content.php"; ?>
</div>
