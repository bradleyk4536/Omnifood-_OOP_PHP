<?php include "init.php"; ?>
<?php
	$session->logout();
	header("Location: ../index.php");
?>
