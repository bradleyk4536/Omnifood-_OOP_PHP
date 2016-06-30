<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $media->title; ?>">
		</div>
		<div class="form-group">
		<a class="thumbnail" href="#">
			<img src="<?php echo $media->picture_path(); ?>" alt="">
			<input type="file" name="media">
		</a>
		</div>
		<div class="form-group">
			<label for="caption">Caption</label>
			<input type="text" name="caption" class="form-control" value="<?php echo $media->title; ?>">
		</div>
		<div class="form-group">
			<label for="caption">Alternate Text</label>
			<input type="text" name="alternate_text" class="form-control" value="<?php echo $media->alternate_text; ?>">
		</div>
		<div class="form-group">
			<label for="caption">Description</label>
			<textarea class="form-control" name="description" id="" cols="30" rows="10"><?php echo $media->description; ?></textarea>
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
	  <span class="glyphicon glyphicon-calendar"></span> Uploaded on: April 22, 2030 @ 5:26
	 </p>
	 <p class="text ">
		Photo Id: <span class="data photo_id_box"></span>
	 </p>
	 <p class="text">
		Filename: <span class="data">image.jpg</span>
	 </p>
	<p class="text">
	 File Type: <span class="data">JPG</span>
	</p>
	<p class="text">
	  File Size: <span class="data">3245345</span>
	</p>
</div>
<div class="info-box-footer clearfix">
  <div class="info-box-delete pull-left">
		<a  href="delete_photo.php?id=" class="btn btn-danger btn-lg ">Delete</a>
  </div>
  <div class="info-box-update pull-right ">
		<input type="submit" name="submit" value="Update" class="btn btn-primary btn-lg ">
  </div>
</div>
</div>
</div>
</div>
</form>
