<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head();?>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


<!-- .preloader -->
<!-- <div class="preloader"></div> -->
<!-- /.preloader -->


<!-- menu-area -->
<header class="main-header header-style-four">

	<!-- header-top-style-two -->
	<div class="header-top-two">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<ul class="social-style-four in-block">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="logo-box centred">
						<a href="index.html"><figure><img src="<?php echo get_template_directory_uri()?>/images/logo/logo1.png" alt=""></figure></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="search-box">
						<form action="index.html" method="post">
							<div class="form-group">
								<input type="search" name="search" placeholder="Search" required="">
								<button type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- header-top-style-two -->


	<!-- main-menu -->
	<div class="theme_menu menu-area stricky centred">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 menu-column">
					<div class="menu-area">
						<nav class="main-menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse clearfix">
								<ul class="navigation clearfix">
									<li class="current"><a href="#">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="dropdown"><a href="#">Pages</a>
										<ul class="submenu">
											<li><a href="single.html">Single Post</a></li>
											<li><a href="category.html">Category Page</a></li>
											<li><a href="author.html">Author Page</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>


								<!-- mobile menu -->
								<ul class="mobile-menu clearfix">
									<li class="current dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Homepage Larg Grid</a></li>
											<li><a href="index2.html">Homepage Grid</a></li>
											<li><a href="index3.html">Homepage List</a></li>
											<li><a href="index4.html">Homepage Masonry</a></li>
											<li><a href="index5.html">Homepage Classic</a></li>
											<li><a href="index6.html">Homepage Zigzag</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li class="dropdown"><a href="#">Features</a>
										<ul>
											<li><a href="post1.html">Standard Post</a></li>
											<li><a href="post2.html">Slider Post</a></li>
											<li><a href="post3.html">Gallery Post</a></li>
											<li><a href="video-post.html">Video Post</a></li>
											<li><a href="audio-post.html">Audio Post</a></li>
											<li><a href="shop.html">Shop</a></li>
											<li><a href="shop-single.html">Single Shop</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
										</ul>
									</li>
									<li><a href="travel.html">Travel</a></li>
									<li><a href="lifestyle.html">Lifestyle</a></li>
									<li><a href="music.html">Music</a></li>
									<li><a href="contact.html">contact</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end main-menu -->
</header>
<!-- end menu-area -->
