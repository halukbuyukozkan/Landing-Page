<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css')}}">

	<link rel="stylesheet" href="{{ asset('css/custom.css" type="text/css')}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home - Corporate Layout 2 | Canvas</title>

	<style>
		#header.sticky-on-scrollup #header-wrap {
			-webkit-transition: height .4s ease, opacity .3s ease, margin-top .4s ease;
			-o-transition: height .4s ease, opacity .3s ease, margin-top .4s ease;
			transition: height .4s ease, opacity .3s ease, margin-top .4s ease;
		}
		
		#header.sticky-on-scrollup.sticky-header #header-wrap { margin-top: -60px; }
		
		#header.sticky-on-scrollup.show-sticky-onscroll.sticky-header #header-wrap { margin-top: 0px; }
	</style>
	<style>
		[id^="particles-"]  {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 50% 50%;
		}

	</style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header sticky-on-scrollup">
			<div id="header-wrap">
				<div class="container shadow rounded" style="background-color: #E9E8E5">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="{{ route('front.index') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{asset('img/logo.jpg')}}" alt="Globexim"></a>
							<a href="{{ route('front.index') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">Globexim</a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="{{ route('front.index') }}"><div>Home</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="index-blog.html"><div>Home - Blog</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="index-blog.html"><div>Blog - Layout 1</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-2.html"><div>Blog - Layout 2</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="index-blog-3.html"><div>Blog - Layout 3</div></a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>{{ __('About') }}</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="{{ route('front.index') }}"><div>{{ __('Products') }}</div></a>
									<ul class="sub-menu-container">
										@foreach($parentcategories as $category)
										<li class="menu-item">
											<a class="menu-link" href="{{ route('front.category.show',$category) }}"><div>{{ $category->name }}</div></a>
										</li>
										@endforeach
									</ul>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>{{ __('Contact') }}</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->


		<!-- Content
		============================================= -->
        @yield('content')
        <!-- #content end -->

        
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<div id="logo">
											<a href="{{ route('front.index') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{asset('img/logo.jpg')}}" alt="Globexim"></a>
											<a href="{{ route('front.index') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">Globexim</a>
										</div>

										<div class="mt-5" style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												Karaciğan Mahallesi Ali Ulvi Kurucu Caddesi
												- Enn Tepe Mall Office B Blok No 117/905 Karatay/Konya<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

								</div>

								<div class="col-md-4">

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">


								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="https://wa.me/+905343230447/" class="social-icon si-dark si-colored si-whatsapp mb-0" style="margin-right: 10px;">
													<i class="icon-whatsapp"></i>
													<i class="icon-whatsapp"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Whatsapp</strong><br>iletişim</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

		<!-- Main Particles Js
	============================================= -->
	<script src="{{ asset('js/particles/particles.min.js') }}"></script>

	<!-- - Configure Custom json - https://vincentgarreau.com/particles.js/#default -->
	<script src="{{ asset('js/particles/particles-line.js') }}"></script><!-- Particles Line -->
	<script src="{{ asset('js/particles/particles-nasa.js') }}"></script><!-- Particles Nasa -->
	<script src="{{ asset('js/particles/particles-bubbles.js') }}"></script><!-- Particles Bubbles -->
	<script src="{{ asset('js/particles/particles-snow.js') }}"></script><!-- Particles Snow -->
	<script src="{{ asset('js/particles/particles-poly.js') }}"></script><!-- Particles Poly -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js') }}"></script>
	<script>
		var slider = tns({
			container: '.slide-wrapper',
			items: 2,
			responsive: {
				400: {
					items: 1,
				},
				600: {
					items: 2
				},
				1000: {
					items: 4
				}
			},
			gutter: 20,
			slideBy: 1,
			autoplay: true,
        	mouseDrag: true,
			controls: false,
        	arrowKeys: false,
			nav: false,
        	autoplayButtonOutput: false,
		});
	</script>
	<script>
		var slider = tns({
			container: '.slide-wrapper2',
			items: 2,
			responsive: {
				400: {
					items: 1,
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			},
			gutter: 20,
			slideBy: 1,
			edgePadding: 120,
			autoplay: true,
			mouseDrag: true,
			controls: false,
			arrowKeys: false,
			nav: false,
			autoplayButtonOutput: false,
		});
	</script>

</body>
</html>