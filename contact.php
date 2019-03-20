<!doctype html>
<html lang="en">

<head>
	<!--
	PARTIAL > Google Tag Manager script
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-script.html"); ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />
	<meta name="keywords" content="contact, podcast, studio, #BeHeard" />
	<meta name="description" content="Contact podcast recording studio #BeHeard" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Contact Solid Gold Podcast Studios | #BeHeard">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<!--
	PARTIAL > Base URL
		-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>
	<meta property="og:title" content="Contact Solid Gold Podcast Studios | #BeHeard" />
	<meta property="og:description" content="Contact podcast recording studio #BeHeard" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://solidgoldstudios.co.za/contact.php" />
	<meta property="og:image" content="http://www.solidgoldstudios.co.za/assets/images/logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://solidgoldstudios.co.za/contact.php" />
	<title>Contact Solid Gold Podcast Studios | #BeHeard</title>
	<link rel="icon" href="favicon.png" sizes="32x32 64x64 128x128" type="image/png">
	<link rel="dns-prefetch" href="https://solidgoldstudios.co.za/">

	<!-- 
	LINK > Critical CSS
	-->
	<link rel="stylesheet" href="assets/critical.min.css" />

	<!--
	LINK > Async-load non-critical CSS
	-->
	<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>

	<!--
	PARTIAL > Async-load non-critical CSS polyfill script
	-->
	<?php echo file_get_contents("assets/partials/loadcss.html"); ?>

	<!--
	PARTIAL > Cookie notice
	-->
	<?php echo file_get_contents("assets/partials/cookies.html"); ?>

	<!--
	SCRIPT > jQuery CDN
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--
	SCRIPT > Combined and deferred
	-->
	<script src="assets/scripts/combined.min.js" defer></script>

</head>

<body class="theme-grey">

	<!--
	PARTIAL > Google Tag Manager body
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-body.html"); ?>

	<!--
	PARTIAL > Browse Happy compatibility notice
	-->
	<?php echo file_get_contents("assets/partials/browse-happy.html"); ?>

	<!--
	PARTIAL > Global page leadin with logo and menu
	-->
	<?php echo file_get_contents("assets/partials/page-leadin.html"); ?>

	<!--
	Masthead
	-->
	<header class="pattern-channel-masthead flow-ttb-mob flow-ltr-tab pad-respond-xy-mob theme-dark-grey border-b-mob">

		<!--
		Container
		-->

		<div class="flow-ttb-mob width-100 constrain">

			<!--
			Content
			-->

			<div class="flow-ttb-mob flow-ltr-tab pad-respond-y-mob align-fs-mob align-c-tab">

				<!--
				Image
				-->
				<picture>
					<source srcset="assets/images/photos/gavin-kennedy-profile.webp" type="image/webp">
					<img class="large margin-r-mob round-mob border-mob" src="assets/images/photos/gavin-kennedy-profile.jpg" alt="gavin kennedy profile photo">
				</picture>

				<!--
				Text
				-->
				<div class="flow-ttb-mob align-fs-mob justify-fs-tab">
					<h1 class="text-l-mob">Hello, I'm <span class="no-break">Gavin Kennedy</span></h1>
					<p class="text-l-mob">As founder and CEO of <strong>Solid Gold Podcast Studios</strong>, my vision is to be your Podcast Partner of Choice, and my mission is to help you <strong>share your story</strong> through high-quality, creative podcasts. Please feel free to <a href="https://api.whatsapp.com/send?phone=27832271409&text=[SGS]%20Hello%20Gavin" target="_blank" rel="noopener">WhatsApp</a> or <a href="mailto:gavin@solidgoldstudios.co.za" target="_blank" rel="noopener">email</a> me directly if you have any questions about podcasting.</p>
					<p class="text-l-mob">Are you ready to <strong>#BeHeard</strong>?</p>

				</div>

			</div>

		</div>

	</header>

	<main>

		<!--
		SECTION > Contact
		-->

		<section class="flow-ttb-mob width-100 pad-respond-xy-mob theme-white border-b-mob">

			<!--
			Container
			-->

			<div class="width-100 constrain pad-respond-y-mob">

				<!--
				Form
				-->

				<form accept-charset="UTF-8" action="https://usebasin.com/f/ea7e33ad9af1" method="POST">

					<!--
					Visible inputs
					-->

					<div class="flow-ttb-mob spread">

							<div class="flow-ttb-mob flow-ltr-tab spread">

								<div>

									<label for="name">

											<span>Name</span>
											<input type="text" name="name" id="name" tabindex="1" required />

									</label>

								</div>
								<div>

									<label for="email">

											<span>Email</span>
											<input type="email" name="email" id="email" tabindex="2" required />

									</label>

								</div>

							</div>
							<div>

								<label for="name">

									<span>Message</span>
									<textarea name="message" id="message" rows="4" tabindex="3" required></textarea>

								</label>

							</div>
							<div class="flow-ttb-mob align-c-mob pad-respond-t-mob">

								<button class="theme-blue" type="submit" id="section_contactform_button_submit">Send Message</button>

							</div>

					</div>

				</form>

			</div>

		</section>

	</main>

	<!--
	Map
	-->

	<section class="theme-grey border-b-mob" id="map">

		<!--
		Container
		-->

		<div class="flow-ttb-mob width-100" style="height:300px">

			<!--
			Google map
			-->

			<object data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.496482561411!2d28.0051696147705!3d-26.082707183492023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957485f339318d%3A0x7b624606e9099d33!2s5+Rhodes+St%2C+Kensington+B%2C+Randburg%2C+2194%2C+South+Africa!5e0!3m2!1sen!2sus!4v1540764353767" width="100%" height="100%" frameborder="0" frameborder="0" style="border:0px"></object>

		</div>

	</section>


	<!--
	PARTIAL > Global page footer
	-->
	<?php echo file_get_contents("assets/partials/page-footer.html"); ?>

	<!--
	Preload elements
	-->
	<span class="preload-me"></span>

</body>

</html>
