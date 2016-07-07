<?php require_once "database/init.php"; ?>
<?php
	$session->logout();
	header("Location: ../index.php");
?>
