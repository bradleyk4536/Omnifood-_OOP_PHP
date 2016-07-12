<?php $navs = Populate::hero_section(); ?>
<header class="site-header" role="banner"><!--	NAVBAR-->
	<div class="navbar-wraper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<?php foreach( $navs as $nav ) : ?>
				<a class="navbar-brand" href="index.php"><i class="<?php echo $nav->brand_icon; ?>"></i> <?php echo $nav->brand_text; ?></a>
				<?php endforeach; ?>
			 </div><!-- Collect the nav links, forms, and other content for toggling -->
			 <div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
				  <li class="active"><a href="index.php">Home</a></li>
				  <li><a href="menu.php">Menu</a></li>
				  <li><a href="#" data-toggle="modal" data-target="#contact_modal">Contact</a></li>
				  <?php if(!$session->is_signed_in()) : ?>
				  <li><a href="#" data-toggle="modal" data-target="#login_modal">Login</a></li>
				  <?php elseif($session->is_signed_in()) : ?>
				  <li><a href="admin/index.php">Admin</a></li>
				  <li><a href="admin/includes/logout.php">Logout</a></li>
				  <?php endif; ?>
				</ul>
			 </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</header>
<?php include "admin/includes/login_modal.php"; ?>
