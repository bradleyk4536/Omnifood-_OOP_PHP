<form action="" method="post" enctype="multipart/form-data">

	<div class="col-md-8">
		<div class="form-group">
			<label for="brand_text">Testimonial</label>
			<textarea name="testimonial" id="" cols="30" rows="10" class="form-control"><?php echo $testimonial->testimonial; ?></textarea>
		</div>
		<div class="form-group">
			<label for="section_title">Author Name</label>
			<input type="text" class="form-control" name="author" value="<?php echo $testimonial->author; ?>" required>
		</div>
		<div class="form-group">
		<label for="logo_image">Author Image</label>
		<a class="thumbnail" href="#">
			<img class="logo" src="media/<?php echo $testimonial->image; ?>" alt="">
			<input type="file" name="testimonial">
		</a>
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
	  <span class="ion-ios-monitor-outline"></span> &nbsp;Display this testimonial on home page
	 <div class="form-group">
	 	 <input type="radio" name="display" value="true" <?php if(isset($testimonial->display) && $testimonial->display === "true") echo 'checked'?>> Yes <br>
	 	 <input type="radio" name="display" value="false" <?php if(isset($testimonial->display) && $testimonial->display === "false") echo 'checked'; ?>>No
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
