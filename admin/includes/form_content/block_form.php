<form action="" method="post" enctype="multipart/form-data">

	<div class="col-md-8">
		<div class="form-group">
			<label for="section_title">Icon</label>
			<input type="text" class="form-control" name="icon" value="<?php echo $block->icon; ?>">
		</div>
		<div class="form-group">
			<label for="section_title">Title</label>
			<input type="text" class="form-control" name="title" value="<?php echo $block->title; ?>" required>
		</div>
		<div class="form-group">
			<label for="brand_text">Description</label>
			<textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo $block->description; ?></textarea>
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
	  <span class="ion-ios-monitor-outline"></span> &nbsp;Display this header on home page
	 </p>
	 <div class="form-group">
	 	 <input type="radio" name="display" value="true" <?php if(isset($block->display) && $block->display === "true") echo 'checked'?>> Yes <br>
	 	 <input type="radio" name="display" value="false" <?php if(isset($block->display) && $block->display === "false") echo 'checked'; ?>>No
	 </div>
	 <p class="text">
	 	<span class="fa fa-indent"></span> &nbsp;Add section header to:
	 </p>
	 <div class="form-group">
	 	<select name="section" id="" class="form-control">
	 	<?php if( isset($block->section_name )) : ?>
	 		<option value="<?php echo $block->section_name; ?>"><?php echo $block->section_name; ?></option>
	 	<?php endif; ?>
	 		<option value="Get Food Fast">Get Food Fast</option>
	 		<option value="How It Works">How It Works</option>
	 		<option value="Cities">Cities</option>
	 		<option value="Testimonial">Testimonial</option>
	 		<option value="Start Eating Healthy">Start Eating Healthy</option>
	 	</select>
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
