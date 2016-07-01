<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-8">
		<div class="form-group">
		<a class="thumbnail" href="#">
			<img src="media/<?php echo $media->filename; ?>" alt="">
			<input type="file" name="media">
		</a>
		</div>
		<div class="form-group">
			<label for="caption">Caption</label>
			<input type="text" name="caption" class="form-control" value="<?php echo $media->caption; ?>">
		</div>
		<div class="form-group">
			<label for="caption">Alternate Text</label>
			<input type="text" name="alternate_text" class="form-control" value="<?php echo $media->alternate_text; ?>">
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
		Photo Id: <span class="data photo_id_box"><?php echo $media->image_id; ?></span>
	 </p>
	 <p class="text">
		Filename: <span class="data"><?php echo $media->filename; ?></span>
	 </p>
	<p class="text">
	 File Type: <span class="data"><?php echo $media->type; ?></span>
	</p>
	<p class="text">
	  File Size: <span class="data"><?php echo $media->size; ?></span>
	</p>
</div>
<div class="info-box-footer clearfix">
  <div class="info-box-delete pull-left">
		<a rel='<?php echo $media->image_id ?>' href='javascript:void(0)' class='btn btn-danger btn-lg delete_link'>Delete</a>
  </div>
  <div class="info-box-update pull-right ">
		<input type="submit" name="submit" value="Update" class="btn btn-primary btn-lg ">
  </div>
</div>
</div>
</div>
</div>
</form>
<!--DYNAMIC DATA BEING PASSED TO DELETE.PHP-->
<script>
	$(document).ready(function(){
		$(".delete_link").on('click', function(){
			var id = $(this).attr("rel");
			var del_url = "update_media.php?delete="+ id +"";
			$(".modal_delete_link").attr("href", del_url);
			$("#deleteModal").modal('show');
		})
	});
</script>
