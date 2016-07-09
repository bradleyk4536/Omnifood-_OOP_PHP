<?php
Section::getAll("get_food");
$sections = Section::read_all();
Block::getAccordion("SELECT * FROM block_benefits WHERE section_name = 'get_food' ");
$benefits = Block::read_all();
?>
<h3><a href="#"><strong>Get Food Fast</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=get_food"> Add Section Header</a></li>
		</ol>
<?php include "accordion_header_content.php"; ?>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_block_benefits.php?block=get_food"> Add Benefits</a></li>
	  </ol>
<?php include "accordion_benefit_content.php"; ?>
</div>
