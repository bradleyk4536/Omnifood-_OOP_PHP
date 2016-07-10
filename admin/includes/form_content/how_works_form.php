<form action="" method="post" enctype="multipart/form-data">

	<div class="col-md-8">
		<div class="form-group">
			<label for="instruct_1">Instruction</label>
			<input type="text" class="form-control" name="instruction" value="<?php echo $how_works->instruction; ?>">
		</div>
		<div class="form-group">
			<label for="logo_image">Image</label>
			<a class="thumbnail" href="#">
				<img class="logo" src="media/<?php echo $how_works->image; ?>" alt="">
				<input type="file" name="how_works">
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
	  <span class="ion-ios-monitor-outline"></span> &nbsp;Display this how it works instruction on home page
	 <div class="form-group">
	 	 <input type="radio" name="display" value="true" <?php if(isset($how_works->display) && $how_works->display === "true") echo 'checked'; ?>> Yes <br>
	 	 <input type="radio" name="display" value="false" <?php if(isset($how_works->display) && $how_works->display === "false") echo 'checked'; ?>>No
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
