<?php
	$users = User::get_count();
 	$dishes = Dish::get_count();
	$photos = Media::get_count();
?>
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			 <div class="panel-heading">
				  <div class="row">
						<div class="col-xs-3">
							 <i class="fa fa-users fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							 <div class="huge"><?php echo $dishes->rowCount(); ?></div>
							 <div>Dishes</div>
						</div>
				  </div>
			 </div>
			 <a href="index.php">
				  <div class="panel-footer">
					 <span class="pull-left">View Details</span>
				 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
				  </div>
			 </a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			 <div class="panel-heading">
				  <div class="row">
						<div class="col-xs-3">
							 <i class="fa fa-photo fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							 <div class="huge"><?php echo $photos ->rowCount(); ?></div>
							 <div>Photos</div>
						</div>
				  </div>
			 </div>
			 <a href="medias.php">
				  <div class="panel-footer">
						<span class="pull-left">Total Photos in Gallery</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
				  </div>
			 </a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			 <div class="panel-heading">
				  <div class="row">
						<div class="col-xs-3">
							 <i class="fa fa-users fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							 <div class="huge"><?php echo $users->rowCount(); ?></div>
							 <div>Users</div>
						</div>
				  </div>
			 </div>
			 <a href="users.php">
				  <div class="panel-footer">
						<span class="pull-left">Total Users</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
				  </div>
			 </a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			 <div class="panel-heading">
				  <div class="row">
						<div class="col-xs-3">
							 <i class="fa fa-support fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							 <div class="huge">8</div>
							 <div>Comments</div>
						</div>
				  </div>
			 </div>
			 <a href="#">
				  <div class="panel-footer">
						<span class="pull-left">Total Comments</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
				  </div>
			 </a>
		</div>
	</div>
</div>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
         var data = google.visualization.arrayToDataTable([

          ['Count', 'Count'],
					<?php
						$element_text = ['Dishes','Photos', 'Users'];
						$element_count = [$dishes->rowCount(),  $photos->rowCount(), $users->rowCount()];

					for($i = 0; $i < 3; $i++) { echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
					}
					?>
        ]);
        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
        chart.draw(data, options);
      }
    </script>
        <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div><!--First Row-->
