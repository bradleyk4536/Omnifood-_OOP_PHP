<?php
Section::get_header("get_food");
$sections = Section::read_all();
$benefits = Block::read_all();
?>
<h3><a href="#"><strong>Get Food Fast</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=get_food"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_block_benefits.php?block=get_food"> Add Benefits</a></li>
	  </ol>
<?php include "accordion_benefit_content.php"; ?>
</div>
