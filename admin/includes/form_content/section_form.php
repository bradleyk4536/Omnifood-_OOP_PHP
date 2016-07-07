<form action="" method="post" enctype="multipart/form-data">

	<div class="col-md-8">
		<div class="form-group">
			<label for="section_title">Section Icon</label>
			<input type="text" class="form-control" name="section_icon" value="<?php echo $section->section_icon; ?>">
		</div>
		<div class="form-group">
			<label for="section_title">Section Title</label>
			<input type="text" class="form-control" name="section_title" value="<?php echo $section->section_title; ?>" required>
		</div>
		<div class="form-group">
			<label for="brand_text">Section Description</label>
			<textarea name="section_description" id="" cols="30" rows="10" class="form-control"><?php echo $section->section_description; ?></textarea>
		</div>
	</div>
<div class="col-md-4" >
<div  class="photo-info-box">
  <div class="info-box-header">
	  <h4>Save <span id="toggle" class="fa fa-expand pull-right"></span></h4>
  </div>
<div class="inside">
<div class="box-inner">
	<p class="text">
	  <span class="ion-ios-monitor-outline"></span> Display this Section on site
	 </p>
	 <div class="form-group">
	 	 <input type="radio" name="display" value="true" <?php if(isset($section->display) && $section->display === "true") echo 'checked'?>> Yes <br>
	 	 <input type="radio" name="display" value="false" <?php if(isset($section->display) && $section->display === "false") echo 'checked'; ?>>No
	 </div>

	<div class="info-box-footer clearfix">
  <div class="info-box-update pull-right ">
		<input type="submit" name="submit" value="Update" class="btn btn-primary btn-lg ">
  </div>
</div>
</div>
</div>
</div>
	</div>
</form>
