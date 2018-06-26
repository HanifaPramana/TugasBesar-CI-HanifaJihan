<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Kost Bidadari</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets_user/') ?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assets_user/') ?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets_user/') ?>js/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2 text-center">
							<div id="colorlib-logo";"><a href="index.html"></div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<?php if ($this->session->userdata('logged_in') == null): ?>
									<li class="btn-cta"><a href="<?php echo base_url('Login/penghuni') ?>">Login Penghuni</a></li>
									<li class="btn-cta"><a href="<?php echo base_url('Login') ?>">Login Admin</a></li>
								<?php else: ?>
									<?php if ($this->session->userdata('logged_in')['level'] == 3): ?>
										<li class="btn-cta"><a href="<?php echo base_url('Home/penghuni') ?>">Halaman Penghuni</a></li>
										<li class="btn-cta"><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
									<?php else: ?>
										<li class="btn-cta"><a href="<?php echo base_url('Kamar') ?>">Halaman Admin</a></li>
									<?php endif ?>
								<?php endif ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="intro">
							<img src="<?php echo base_url()?>assets/img/logokost.png" width="280px" ><br><br>
							<h1>Selamat Datang, Perantau</h1>
							<p>Kos Kosan Fasilitas Lengkap Sederhana dan Nyaman di Kota Malang</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<aside id="colorlib-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="flexslider">
							<ul class="slides">
								<li style="background-image: url(<?php echo base_url('assets_user/') ?>images/img_bg_1.jpg);">
									<div class="overlay"></div>
								</li>
								<li style="background-image: url(<?php echo base_url('assets_user/') ?>images/img_bg_2.jpg);">
									<div class="overlay"></div>
								</li>
								<li style="background-image: url(<?php echo base_url('assets_user/') ?>images/img_bg_3.jpg);">
									<div class="overlay"></div>
								</li>
								<li style="background-image: url(<?php echo base_url('assets_user/') ?>images/img_bg_4.jpg);">
									<div class="overlay"></div>
								</li>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>How It Works</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-lightbulb"></i>
							</span>
							<div class="desc">
								<h3>User Experienced</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-tools"></i>
							</span>
							<div class="desc">
								<h3>Virtual Design</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-map"></i>
							</span>
							<div class="desc">
								<h3>Design &amp; Research</h3>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-work">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-1.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-2.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-3.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-4.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-5.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 no-gutters text-center animate-box">
						<a href="work.html" class="work-entry" style="background-image: url(<?php echo base_url('assets_user/') ?>images/work-6.jpg);">
							<div class="desc">
								<div class="display-t">
									<div class="display-tc">
										<span>Illustration</span>
										<h2>Work Name</h2>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo base_url('assets_user/') ?>images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>My Accomplishment</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="icon-paperplane"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Projects</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="icon-cup"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Cups of Coffee</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 text-center animate-box">
							<div class="counter-entry">
								<span class="icon"><i class="icon-user2"></i></span>
								<div class="desc">
									<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
									<span class="colorlib-counter-label">Satisfied Clients</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
							<div class="desc2">
								<h2><a href="blog.html">Making A Website from scratch</a></h2>
							</div>
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-1.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">10</span><span class="month">Mar</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
							<div class="desc2">
								<h2><a href="blog.html">Making A Website from scratch</a></h2>
							</div>
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-2.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">09</span><span class="month">Mar</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
							<div class="desc2">
								<h2><a href="blog.html">Making A Website from scratch</a></h2>
							</div>
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-3.jpg);"></a>
							<div class="desc">
								<p class="meta"><span class="day">08</span><span class="month">Mar</span></p>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-testimony" class="testimony-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/cover_img_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>My Clients Says</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row animate-box">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<figure class="figure-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/person1.jpg);"></figure>
											<blockquote>
												<span>Tony Stark</span>
												<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<figure class="figure-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/person2.jpg);"></figure>
											<blockquote>
												<span>Mark Smith</span>
												<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<figure class="figure-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/person3.jpg);"></figure>
											<blockquote>
												<span>John Griffin</span>
												<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic</p>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<footer id="colorlib-footer">
			<div class="newsletter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="newsletter-flex">
								<div class="one-forth">
									<div class="display-tc">
										<form class="form-inline qbstp-header-subscribe">
											<div class="col-three-forth">
												<div class="form-group">
													<input type="text" class="form-control" id="email" placeholder="Enter your email">
												</div>
											</div>
											<div class="col-one-third">
												<div class="form-group">
													<button type="submit" class="btn btn-primary">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="three-forth">
									<div class="display-tc">
										<h2>Subscribe to update for our Newsletter</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Landing</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About</a></li>
								<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
								<li><a href="#"><i class="icon-check"></i> Terms &amp; Condition</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="blog.html" class="blog-img" style="background-image: url(<?php echo base_url('assets_user/') ?>images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="blog.html">Become a Creative</a></h2>
								<p class="admin"><span>20 March 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i> + 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com"><i class="icon-location4"></i> yourwebsite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
									<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('assets_user/') ?>js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.waypoints.min.js"></script>
		<!-- Stellar Parallax -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.stellar.min.js"></script>
		<!-- Flexslider -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="<?php echo base_url('assets_user/') ?>js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url('assets_user/') ?>js/magnific-popup-options.js"></script>
		<!-- Counters -->
		<script src="<?php echo base_url('assets_user/') ?>js/jquery.countTo.js"></script>
		<!-- Main -->
		<script src="<?php echo base_url('assets_user/') ?>js/main.js"></script>

	</body>
	</html>

