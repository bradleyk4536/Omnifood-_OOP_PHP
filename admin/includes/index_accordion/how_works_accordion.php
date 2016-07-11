<?php
Section::get_header("how_works");
$sections = Section::read_all();
$how_works = Works::read_all();
?>
<h3><a href="#"><strong>How It Works</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=how_works"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_how_works.php?section=how_works"> Add Instructions</a></li>
	  </ol>
<?php include "accordion_how_works_content.php"; ?>
</div>
