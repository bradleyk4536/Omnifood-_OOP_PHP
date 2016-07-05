<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="form-group">
			<label for="section_title">Section Icon</label>
			<input type="text" class="form-control" name="section_title">
		</div>
		<div class="form-group">
			<label for="section_title">Section Title</label>
			<input type="text" class="form-control" name="section_title">
		</div>
		<div class="form-group">
			<label for="brand_text">Section Description</label>
			<input type="text" name="brand_text" class="form-control" value="<?php echo $hero->brand_text; ?>">
		</div>
		<hr>
		<div class="form-group">
			<label for="section_title">Benefit Icon</label>
			<input type="text" class="form-control" name="section_title">
		</div>
		<div class="form-group">
			<label for="brand_text">Benefit Header</label>
			<input type="text" name="brand_text" class="form-control" value="<?php echo $hero->brand_text; ?>">
		</div>
		<div class="form-group">
			<label for="brand_text">Benefit Description</label>
			<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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
	  <span class="ion-ios-monitor-outline"></span> Display this Hero Section on site
	 </p>
	 <div class="form-group">
	 	 <input type="radio" name="display" value="true" <?php if(isset($hero->display) && $hero->display === "true") echo 'checked'?>> Yes <br>
	 	 <input type="radio" name="display" value="false" <?php if(isset($hero->display) && $hero->display === "false") echo 'checked'; ?>>No
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
