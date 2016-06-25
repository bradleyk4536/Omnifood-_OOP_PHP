<?php
if(isset($_GET['delete'])) {

	if($session->is_signed_in() && $_SESSION['role'] === 'Admin') {

		$deleteUser = User::deleteRecord($_GET['delete']);

		if($deleteUser) { header("Location: users.php"); }
	}
}
?>
<!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
       <p>Deleting user is irreversible.<strong>Are you sure you want to delete?</strong></p>
      </div>
      <div class="modal-footer">
      	<a href="" class="btn btn-danger modal_delete_link">Delete</a>
       	<button class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>
