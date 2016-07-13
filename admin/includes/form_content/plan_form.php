<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
			<label for="brand_icon">Plan</label>
			<input type="text" name="plan_name" class="form-control" value="<?php echo $plan->plan_name; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="brand_text">Plan Price</label>
			<input type="text" name="plan_price" class="form-control" value="<?php echo $plan->plan_price; ?>">
			</div>
		</div>
	</div>


<div class="row">
	<div class="col-md-8">
		<div class="form-group">
			<label for="news_text">Plan Description</label>
			<input type="text" name="plan_description" class="form-control" value="<?php echo $plan->plan_description; ?>">
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
		  <span class="ion-ios-monitor-outline"></span> Display plan on site
		 </p>
		 <div class="form-group">
			 <input type="radio" name="display" value="true" <?php if(isset($plan->display) && $plan->display === "true") echo 'checked'?>> Yes <br>
			 <input type="radio" name="display" value="false" <?php if(isset($plan->display) && $plan->display === "false") echo 'checked'; ?>>No
		 </div>
		 <p class="text">
		  <span class="ion-ios-monitor-outline"></span> Primary call to action button
		 </p>
		 <div class="form-group">
			 <input type="radio" name="action" value="btn-full" <?php if(isset($plan->action) && $plan->action === "btn-full") echo 'checked'?>> Yes <br>
			 <input type="radio" name="action" value="btn-ghost" <?php if(isset($plan->action) && $plan->action === "btn-ghost") echo 'checked'; ?>>No
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
			<label for="brand_icon">Plan Icon</label>
			<input type="text" name="plan_icon1" class="form-control" value="<?php echo $plan->plan_icon1; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="brand_text">Plan Feature</label>
			<input type="text" name="plan_feature1" class="form-control" value="<?php echo $plan->plan_feature1; ?>">
			</div>
		</div>
</div>
<div class="row">
	<div class="col-md-4">
			<div class="form-group">
			<label for="brand_icon">Plan Icon</label>
			<input type="text" name="plan_icon2" class="form-control" value="<?php echo $plan->plan_icon2; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="brand_text">Plan Feature</label>
			<input type="text" name="plan_feature2" class="form-control" value="<?php echo $plan->plan_feature2; ?>">
			</div>
		</div>
</div>
<div class="row">
	<div class="col-md-4">
			<div class="form-group">
			<label for="brand_icon">Plan Icon</label>
			<input type="text" name="plan_icon3" class="form-control" value="<?php echo $plan->plan_icon3; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="brand_text">Plan Feature</label>
			<input type="text" name="plan_feature3" class="form-control" value="<?php echo $plan->plan_feature3; ?>">
			</div>
		</div>
</div>
<div class="row">
	<div class="col-md-4">
			<div class="form-group">
			<label for="brand_icon">Plan Icon</label>
			<input type="text" name="plan_icon4" class="form-control" value="<?php echo $plan->plan_icon4; ?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="brand_text">Plan Feature</label>
			<input type="text" name="plan_feature4" class="form-control" value="<?php echo $plan->plan_feature4; ?>">
			</div>
		</div>
</div>

</form>
