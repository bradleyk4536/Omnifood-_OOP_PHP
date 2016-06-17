<?php include "includes/header.php"; ?>
<section id="item_detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<article>
					<div class="dish_image">
						<div class="thumbnail">
							<img src="assets/images/2.jpg" alt="">
						</div>
					</div>
					<div class="ingredients">
						<h3>Ingredients</h3>
						<ol>
							<li><span>4 (100 g)</span>boneless skinless chicken breasts</li>
							<li><span>1 tablespoon</span>Lemon Juice</li>
							<li><span>2</span>Garlic Cloves</li>
							<li><span>1 tablespoon balsamic vinager</span></li>
							<li><span>2 tablespoons</span>olive oil</li>
						</ol>
					</div>
					<div class="directions">
						<h3>Preparation</h3>
						<p>Place the chicken breasts side by side in a shallow dish. Mix together the lemon juice, garlic, honey, balsamic vinegar, 1 tbsp olive oil &amp; 1 tbsp chopped parsley and pour over the chicken. Turn the breasts over until well coated. Leave in the fridge to marinate for 30 minutes.</p>
					</div>
					<div class="cooking">
						<h3>Cooking</h3>
						<p>Sear quickly for 1-2 minutes on each side until the chicken browns, lower the heat and cook for about 10 minutes or until the chicken is done, turning the breasts over once or twice.</p>
					</div>
					<div class="serving">
						<h3>Serving</h3>
						<p>Pour the reserved marinade over the chicken, remove from the pan and arrange on serving plates. Grate over the lemon zest and scatter with the rest of the parsley. Cut the lemon into wedges and serve with the chicken.</p>
					</div>
				</article>
				<div id="comments">
				<div class="comments-wrap">
					<h3>4 comments</h3>
					<ol class="comments-list">
						<li class="comment">
							<h4>John Smith <small>&bull; August 12, 2014</small></h4>
							<div class="comment-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
							</div>
							<ol class="children">
								<li class="comment">
									<h4>Cris Mccopper <small>&bull; August 12, 2014</small></h4>
									<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
									</div>
							<ol class="children">
								<li class="comment">
									<h4>Jon Dee <small>&bull; August 12, 2014</small></h4>
									<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
									</div>
								</li>
							</ol>
								</li>
							</ol>
						</li>
						<li class="comment">
							<h4>Jane Smith <small>&bull; August 12, 2014</small></h4>
							<div class="comment-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptas quia eveniet, voluptatum non quasi quam illo voluptates dolor numquam, libero ab consequuntur possimus sunt incidunt reiciendis vitae rerum temporibus!</p>
							</div>
						</li>
					</ol>
					<div class="leave-comment">
					<h3>Leave a comment</h3>
						<form action="">
							<p>Your email address will not be published. Required fields are marked. <span class="required">*</span></p>
							<p class="comment-form-author">
							<label for="author">Name *</label>
							<input type="text" id="author">
							</p>
							<p class="comment-form-email">
							<label for="email">Email *</label>
							<input type="email" id="email">
							</p>
							<p class="comment-form-url">
							<label for="url">Website</label>
							<input type="url" id="url">
							</p>
							<p class="comment-form-comment">
							<label for="comment">Comment *</label>
							<textarea name="" id="comment" cols="45" rows="8"></textarea>
							</p>
							<p class="form-submit">
							<input class="btn btn-success" type="submit" name="submit">
							</p>
						</form>
					</div>
				</div>
			</div>
			</div>
			<!--				SIDE BAR-->
					<aside class="col-sm-4">
						<div class="widget">
							<h4>Subscribe To Our Great Newsletter</h4>
							<p>Keep up to date with the latest news.</p>
							<button class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#newsletter_modal">Subscribe now</button>
						</div>
						<div class="widget">
							<h4>Contact Us</h4>
							<p>Have a question or suggestion. We will love to hear from you.</p>
							<button class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#contact_modal">Send Message</button>
						</div>
						<div class="widget">
							<form action="" role="form" class="search-form">
								<label for="sidebar-search" class="sr-only">Search Blog</label>
								<input type="text" id="sidebar-search" placeholder="Search the blog">

							</form>
						</div>
<!--
						<div class="widget">
							<h4>Recent Post</h4>
							<ul>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
							</ul>
						</div>
						<div class="widget">
							<h4>Categories</h4>
							<ul>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
								<li><a href="">Blog Post 1</a></li>
							</ul>
						</div>
-->
					</aside>
		</div>
	</div>
</section>
<?php include "includes/newsletter_modal_content.php"; ?>
<?php include "includes/footer.php"; ?>
