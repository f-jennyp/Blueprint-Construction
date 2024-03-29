<footer>
	<div id="footer">
		<div class="row">
			<div class="top" id="contact">
				<div class="contact-con">
					<h1>Contact Us</h1>
					<div class="to-sm">Get in touch with Blueprint Construction. FREE CONSULTATION, simply fill out the
						form below and one of our team members will be in touch to get your gateway to dream
						transformations. Let’s connect and bring your vision to life!</div>
					<form action="sendContactForm" method="post" class="sends-email ctc-form">
						<div class="flex">
							<label><span class="ctc-hide">Name</span>
								<input type="text" name="name" placeholder="Name">
							</label>
							<label><span class="ctc-hide">Phone</span>
								<input type="text" name="phone" placeholder="Phone">
							</label>
						</div>
						<div class="flex">
							<label><span class="ctc-hide">Email</span>
								<input type="text" name="email" placeholder="Email">
							</label>
							<label><span class="ctc-hide">Confirm</span>
								<input type="text" name="email" placeholder="Confirm Email">
							</label>
						</div>
						<label><span class="ctc-hide">Message</span>
							<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
						</label>

						<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>

						<div class="flex">
							<div class="text-left ctcCheckbox">
								<label>
									<input type="checkbox" name="consent" class="consentBox"> I hereby consent to
									having this
									website store my submitted information so that they can respond to my
									inquiry.
								</label><br>

								<label>
									<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby
									confirm that
									I have read and understood this website’s <a
										href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy
										Policy.</a>
								</label>
							</div>

							<div class="submit flex">
								<div class="g-recaptcha"></div>

								<button type="submit" class="ctcBtn btn hvr-grow hvr-sweep-to-top" disabled>SUBMIT FORM</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="footer-con">
				<div class="logo-holder hvr-grow">
					<a href="home"><img loading="lazy" src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="socials">
					<a href="<?php $this->info('fb_link') ?>" target="_blank"><img loading="lazy"
							src="public/images/content/fb.png" alt=""></a>
					<a href="<?php $this->info('ig_link') ?>" target="_blank"><img loading="lazy"
							src="public/images/content/ig.png" alt=""></a>
					<a href="<?php $this->info('yt_link') ?>" target="_blank"><img loading="lazy"
							src="public/images/content/yt.png" alt=""></a>
					<a href="<?php $this->info('tt_link') ?>" target="_blank"><img loading="lazy"
							src="public/images/content/tt.png" alt=""></a>
					<a href="<?php $this->info('gp_link') ?>" target="_blank"><img loading="lazy"
							src="public/images/content/gp.png" alt=""></a>
				</div>

				<div class="comp-info">
					<div class="flex">
						<div class="location item">
							<div class="label">LOCATION</div>
							<a>
								<?php $this->info("address"); ?>
							</a>
						</div>

						<div class="phone item">
							<div class="label">PHONE</div>
							<a class="hvr-grow" href="tel:<?php $this->info("phone"); ?>">
								<?php $this->info("phone"); ?>
							</a>
						</div>

						<div class="email item">
							<div class="label">EMAIL</div>
							<a class="hvr-grow" href="mailto:<?php $this->info("email"); ?>">
								<?php $this->info("email"); ?>
							</a>
						</div>

					</div>
				</div>
			</div>

			<div class="nav-holder">
				<nav>
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


			<div class="copyrights">
				<p class="copy">
					©
					<?php echo date("Y"); ?>.
					<?php $this->info("company_name"); ?>. All Rights Reserved.
					<?php if ($this->siteInfo['policy_link']): ?>
						<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
					<?php endif ?>
				</p>
				<p class="techno">
					<a href="http://technodreamoutsourcing.com/">Web Design</a> Done by <img loading="lazy"
						src="public/images/hd-logo.png" alt="">
				</p>
			</div>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script>
	// EFFECTS / ANIMATION
	function reveal() {
		var reveals = document.querySelectorAll(".reveal");

		for (var i = 0; i < reveals.length; i++) {
			var windowHeight = window.innerHeight;
			var elementTop = reveals[i].getBoundingClientRect().top;
			var elementVisible = 150;

			if (elementTop < windowHeight - elementVisible) {
				reveals[i].classList.add("active");
			} else {
				reveals[i].classList.remove("active");
			}
		}
	}

	window.addEventListener("scroll", reveal);

	// HEADER FIXED
	document.addEventListener("DOMContentLoaded", function () {
		var header = document.getElementById("header");
		var logoImg = document.querySelector("#header .logo-holder img");

		function updateHeader() {
			if (window.scrollY > 0) {
				header.classList.add("fixed");
			} else {
				header.classList.remove("fixed");
			}

			// Resize logo image based on scroll position
			var maxImgWidth = 250;
			var scrolledPercentage = Math.min(1, window.scrollY / 100); // You can adjust the factor based on your design
			var newImgWidth = maxImgWidth + (1 - scrolledPercentage) * (logoImg.width - maxImgWidth);
			logoImg.style.maxWidth = newImgWidth + "px";
		}

		// Initial call to set header and image size
		updateHeader();

		window.addEventListener("scroll", function () {
			updateHeader();

			// Check if scroll position is at the top
			if (window.scrollY === 0) {
				// Reset the image size when back at the top
				logoImg.style.maxWidth = "489px"; // Adjust the original max-width value
			}
		});
	});

</script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				grecaptcha.render(el, { 'sitekey': '6LeWgAkpAAAAAFSpZWANpqUHal-W0bgABjVJveRl' });
			});
		};

		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if (in_array($view, ["home", "gallery"])): ?>
	<script type="text/javascript" src="public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="public/scripts/jquery.pajinate.js"></script>
	<script>
		$(document).ready(function () {
			$('#gall1').pajinate({
				num_page_links_to_display: 3,
				items_per_page: 10
			});
			$('.fancy').fancybox({
				helpers: {
					title: {
						type: 'over'
					}
				}
			});
		})
	</script>
<?php endif; ?>


<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>