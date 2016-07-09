<?php
Section::getAll("testimonial");
$sections = Section::read_all();
Testimonial::getAccordion("SELECT * FROM testimonial WHERE section_name = 'testimonial' ");
$testimonials = Testimonial::read_All();
?>
<h3><a href="#"><strong>Testimonial</strong></a></h3>
<div>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_header.php?header=testimonial"> Add Section Header</a></li>
		</ol>
	<section><?php include "accordion_header_content.php"; ?></section>
		<ol class="breadcrumb">
			<li><i class="fa fa-indent"></i><a href="add_testimonial.php?section=testimonial"> Add Testimonial</a></li>
	  </ol>
<?php include "accordion_testimonial_content.php"; ?>
</div>
