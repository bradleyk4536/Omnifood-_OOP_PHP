<?php

	if(isset($_GET['delete'])) :

		if($session->is_signed_in() && $_SESSION['role'] === "Admin") :

			$deleteRecord = Media::deleteRecord($_GET['delete']);
			if($deleteRecord) :

			header("Location: medias.php");
			endif;
		endif;
	endif;
?>
<?php include "includes/delete_modal_contents.php"; ?>
