<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> -->

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">

	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- GOOGLE FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header" class="">
			<div class="row flex">
				<div class="logo-holder">
					<a href="home"><img loading="lazy" src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="nav-holder">
					<nav>
						<a href="#" id="pull"><strong>MENU</strong></a>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a
									href="<?php echo URL ?>about#content">ABOUT US</a></li>
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a
									href="<?php echo URL ?>services#content">SERVICES</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
									href="<?php echo URL ?>gallery#content">GALLERY</a></li>
							<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
									href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):       ?> -->
	<div id="banner">
		<div class="row">
			<div class="banner-con">
				<div class="top">
					<div class="label">Your Dream House</div>
					<div class="title">Shaping Dreams, Building Efficiency, Creating Homes.</div>

					<div class="bann-btn">
						<a href="<?php echo URL ?>contact#content">GET A FREE QUOTE</a>
					</div>
				</div>

				<div class="bottom">
					<div class="wrapper flex">
						<div class="item">
							<img loading="lazy" src="public/images/content/water.png" alt="Water Efficient">
							<div class="label">Water Efficient</div>
						</div>

						<div class="item">
							<img loading="lazy" src="public/images/content/energy.png" alt="Energy Efficient">
							<div class="label">Energy Efficient</div>
						</div>

						<div class="item">
							<img loading="lazy" src="public/images/content/24.png" alt="Title 24 Compliant">
							<div class="label">Title 24 Compliant</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif;        ?> -->