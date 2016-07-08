<?php
Section::getAll("Get Food Fast");
$sections = Section::read_all();
Block::getAccordion("SELECT * FROM block_benefits ");
$benefits = Block::read_all();
?>
<h3><a href="#"><strong>Get Food Fast</strong></a></h3>
<?php include "accordion_block_content.php"; ?>
