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
								<li <?php if($this->uri->segment(2) == '') echo 'class="active"'; ?>><a href="<?php echo base_url('Home') ?>">Home</a></li>
								<li <?php if($this->uri->segment(2) == 'about') echo 'class="active"'; ?>><a href="<?php echo base_url('Home/about') ?>">About</a></li>
								<li <?php if($this->uri->segment(2) == 'contact') echo 'class="active"'; ?>><a href="<?php echo base_url('Home/contact') ?>">Contact</a></li>
								<?php if ($this->session->userdata('logged_in') == null): ?>
									<li class="btn-cta"><a href="<?php echo base_url('Login/penghuni') ?>" style="background-color: #f287e2;">Login Penghuni</a></li>
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