<form action="" method="post" enctype="multipart/form-data">

	<div class="col-md-8 col-md-offset-2">
			<div class="form-group">
			<label for="section_title">Page Name</label>
			<input type="text" class="form-control" name="page_name" value="<?php echo $page->page_name; ?>">
			</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<label for="section_title">Page Link</label>
			<input type="text" class="form-control" name="page_link" value="<?php echo $page->page_link; ?>">
		</div>
	</div>
	<div class="info-box-footer clearfix">
	  <div class="info-box-update pull-right ">
			<input type="submit" name="submit" value="Update" class="btn btn-primary btn-lg ">
	  </div>
	</div>
</form>
