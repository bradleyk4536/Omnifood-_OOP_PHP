<?php
if(isset($_GET['delete'])) :
	if($session->is_signed_in() && $_SESSION['role'] === 'Admin') :
		$deleteUser = User::deleteRecord($_GET['delete']);
		if($deleteUser) { header("Location: users.php"); }
	endif;
endif;
?>
<?php include "includes/delete_modal_contents.php" ?>
