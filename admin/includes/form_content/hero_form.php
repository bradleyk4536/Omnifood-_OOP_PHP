<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
	<div class="row">
		<div class="col-md-4">
			<label for="brand_icon">Brand Icon</label>
			<input type="text" name="brand_icon" class="form-control" value="<?php echo $hero->brand_icon; ?>">
		</div>
		<div class="col-md-4">
			<label for="brand_text">Brand Text</label>
			<input type="text" name="brand_text" class="form-control" value="<?php echo $hero->brand_text; ?>">
		</div>
	</div>
</div>
	<div class="col-md-8">

		<div class="form-group">
		<label for="logo_image">Logo Image</label>
		<a class="thumbnail" href="#">
			<img class="logo" src="media/<?php echo $hero->logo; ?>" alt="">
			<input type="file" name="logo">
		</a>
		</div>
		<div class="form-group">
			<label for="hero_text">Hero Text</label>
			<input type="text" name="hero_text" class="form-control" value="<?php echo $hero->hero_text; ?>">
		</div>
		<div class="form-group">
			<label for="sub_text">Hero subtext</label>
			<input type="text" name="sub_text" class="form-control" value="<?php echo $hero->hero_subtext; ?>">
		</div>
		<div class="form-group">
			<label for="news_text">Newsletter Text</label>
			<input type="text" name="news_text" class="form-control" value="<?php echo $hero->newsletter_text; ?>">
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
