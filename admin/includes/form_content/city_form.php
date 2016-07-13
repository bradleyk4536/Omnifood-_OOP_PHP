<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-8">
		<div class="form-group">
			<label for="name">City Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $city->name; ?>">
		</div>
		<div class="form-group">
		<label for="image">City Image</label>
		<a class="thumbnail" href="#">
			<img class="logo" src="media/<?php echo $city->image; ?>" alt="">
			<input type="file" name="image">
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
			  <span class="ion-ios-monitor-outline"></span> Display city on site
			 </p>
			 <div class="form-group">
				 <input type="radio" name="display" value="true" <?php if(isset($city->display) && $city->display === "true") echo 'checked'?>> Yes <br>
				 <input type="radio" name="display" value="false" <?php if(isset($city->display) && $city->display === "false") echo 'checked'; ?>>No
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
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
			<label for="icon_1">Feature Icon</label>
			<input type="text" name="icon_1" class="form-control" value="<?php echo $city->icon_1; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="description_1">Feature</label>
			<input type="text" name="description_1" class="form-control" value="<?php echo $city->description_1; ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		 	<div class="form-group">
		 		<label for="icon_2">Feature Icon</label>
			<input type="text" name="icon_2" class="form-control" value="<?php echo $city->icon_2; ?>">
		 	</div>
		</div>
		<div class="col-md-4">
			<label for="description_2">Feature</label>
			<input type="text" name="description_2" class="form-control" value="<?php echo $city->description_2; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="social_icon">Social Media Icon</label>
			<input type="text" name="social_icon" class="form-control" value="<?php echo $city->social_icon; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="smedia_link">Social Media</label>
			<input type="text" name="smedia_link" class="form-control" value="<?php echo $city->smedia_link; ?>">
			</div>
		</div>
	</div>

</form>
