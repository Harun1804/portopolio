<!DOCTYPE html>
<html lang="en">

<head>
	<title>Harun Autobiography</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.includes.header')
    @stack('css-vendor')
    @stack('css-script')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @include('layouts.includes.navbar')

    @yield('content')

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>“It’s Not Easy to Give Up” is the right sentence to describe myself and “Hard Worker” has become part of me</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="https://twitter.com/HarunAr99072232"><span
										class="icon-twitter"></span></a>
							</li>
							<li class="ftco-animate"><a
									href="https://www.facebook.com/profile.php?id=100010236493875"><span
										class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/harun_ar18/"><span
										class="icon-instagram"></span></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
							<li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Database Designer</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>App Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Source Code Management</a>
							</li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mobile Development</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><a href="https://wa.me/085156320812?text=Hello,%20I%20Need%20your%20service%20for%20making%20a%20website"><span class="icon icon-phone"></span><span
											class="text">+62-8515-6320-812</span></a></li>
								<li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=harun.arrasyid1804@gmail.com"><span class="icon icon-envelope"></span><span
											class="text">harun.arrasyid1804@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg>
    </div>

    @include('layouts.includes.footer')
    @stack('js-vendor')
    @stack('js-script')
</body>

</html>
