<!doctype html>
	<html lang="en">

	<head>
		<title>Paragon Abadi Prima &mdash; <?= $judul ?></title>
		<link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
		

		<link rel="stylesheet" href="<?= base_url('assets/third_party/fonts/');?>icomoon/style.css">

		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>bootstrap-datepicker.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>jquery.fancybox.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>owl.carousel.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/fonts/');?>flaticon/font/flaticon.css">
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>aos.css">

		<!-- MAIN CSS -->
		<link rel="stylesheet" href="<?= base_url('assets/third_party/css/');?>style.css">

	</head>

	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

		<div class="site-wrap" id="home-section">

			<div class="site-mobile-menu site-navbar-target">
				<div class="site-mobile-menu-header">
					<div class="site-mobile-menu-close mt-3">
						<span class="icon-close2 js-menu-toggle"></span>
					</div>
				</div>
				<div class="site-mobile-menu-body"></div>
			</div>

			<header class="site-navbar site-navbar-target" role="banner">

				<div class="container mb-3">
					<div class="d-flex align-items-center">
						<div class="site-logo mr-auto">
							<!-- <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logos.png'); ?>"></a> -->
							<a href="<?= base_url(); ?>">PT. Paragon</a>
						</div>
						<div class="site-quick-contact d-none d-lg-flex ml-auto ">
							<div class="d-flex site-info align-items-center mr-5">
								<span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
								<span>34 Street Name, City Name Here, <br> United States</span>
							</div>
							<div class="d-flex site-info align-items-center">
								<span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
								<span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
							</div>

						</div>
					</div>
				</div>


				<div class="container">
					<div class="menu-wrap d-flex align-items-center">
						<span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>



						<nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
							<ul class="site-menu main-menu js-clone-nav mr-auto ">
								<li class="<?= $judul == 'Home' ? 'active' : ''; ?>"><a href="<?= base_url(); ?>" class="nav-link">Home</a></li>
								<li class="<?= $judul == 'About' ? 'active' : ''; ?>"><a href="<?= base_url('pages/about'); ?>" class="nav-link">About</a></li>
								<!-- <li class="<?= $judul == 'Packages' ? 'active' : ''; ?>"><a href="<?= base_url('pages/packages'); ?>" class="nav-link">Packages</a></li>
								<li class="<?= $judul == 'Gallery' ? 'active' : ''; ?>"><a href="<?= base_url('pages/gallery'); ?>" class="nav-link">Gallery</a></li> -->
								<li class="<?= $judul == 'Products' ? 'active' : ''; ?>"><a href="<?= base_url('pages/products'); ?>" class="nav-link">Products</a></li>
								<li class="<?= $judul == 'Contact' ? 'active' : ''; ?>"><a href="<?= base_url('pages/contact'); ?>" class="nav-link">Contact</a></li>
							</ul>
						</nav>

						<div class="top-social ml-auto">
							<?php if($user != null): ?>
								<a href="<?=base_url('dashboard'); ?>"><span class="icon-tachometer"></span> Dashboard</a>
							<?php else: ?>
								<a href="<?=base_url('auth'); ?>"><span class="icon-user"></span> Login</a>
							<?php endif; ?>
						</div>
					</div>
				</div>



			</header>