<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.png" rel="icon">
	<!--Title-->
	<title>{{ config('app.site_short_name') }} | {{ isset($page_title) ? $page_title : config('app.site_long_name') }}</title>
	<!-- CSS -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{ asset("css/simple-line-icons.min.css") }}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ asset("css/themify-icons.css") }}">
	<!-- Owl Slider -->
	<link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
	<!-- Revolution Slider -->
	<link rel="stylesheet" type="text/css" href="{{ asset("rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css") }}">
	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset("rs-plugin/css/settings.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("rs-plugin/css/main-slider/rs6.css") }}">
	<!-- Main Style -->
	<link rel="stylesheet" href="{{ asset("css/color-schemes/" . config('app.zegen.theme') . ".css") }}">
	<link rel="stylesheet" href="{{ asset("css/style.css") }}" class="main-style">
	<style>
		#rev_slider_6_1_wrapper .tp-loader.spinner1 {
			background-color: #FFFFFF !important;
		}
	</style>
	<style>
		.rs-layer.Concept-Content a,
		.rs-layer.Concept-Content a:visited {
			color: #fff !important;
			border-bottom: 1px solid #fff !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content a:hover {
			border-bottom: 1px solid transparent !important
		}

		.rs-layer.Concept-Content-Dark a,
		.rs-layer.Concept-Content-Dark a:visited {
			color: #000 !important;
			border-bottom: 1px solid #000 !important;
			font-weight: 700 !important
		}

		.rs-layer.Concept-Content-Dark a:hover {
			border-bottom: 1px solid transparent !important
		}

		@media only screen and (max-width:575px) {
			rs-layer.res-slide-btn {
				padding: 7px 16px !important;
				font-size: 13px !important
			}
		}

		#rev_slider_1_1_wrapper .zeus.tparrows {
			cursor: pointer;
			min-width: 60px;
			min-height: 60px;
			position: absolute;
			display: block;
			z-index: 1000;
			border-radius: 50%;
			overflow: hidden;
			background: rgba(0, 0, 0, 0.38)
		}

		#rev_slider_1_1_wrapper .zeus.tparrows:before {
			font-family: 'revicons';
			font-size: 17px;
			color: #ffffff;
			display: block;
			line-height: 60px;
			text-align: center;
			z-index: 2;
			position: relative
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
			content: '\e824'
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
			content: '\e825'
		}

		#rev_slider_1_1_wrapper .zeus .tp-title-wrap {
			background: rgba(0, 0, 0, 0.5);
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			position: absolute;
			opacity: 0;
			transform: scale(0);
			-webkit-transform: scale(0);
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s;
			border-radius: 50%
		}

		#rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			background-position: center center;
			background-size: cover;
			border-radius: 50%;
			transform: translatex(-100%);
			-webkit-transform: translatex(-100%);
			transition: all 0.3s;
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s
		}

		#rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
			transform: translatex(100%);
			-webkit-transform: translatex(100%)
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
			transform: translatex(0);
			-webkit-transform: translatex(0);
			opacity: 1
		}

		#rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
			transform: scale(1);
			-webkit-transform: scale(1);
			opacity: 1
		}

		#rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
			line-height: 60px !important;
			font-size: 17px !important
		}

		#rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
			line-height: 60px !important;
			color: #ffffff !important;
			font-size: 17px !important
		}

		#rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
			min-width: 60px !important;
			min-height: 60px !important;
			background: rgba(0, 0, 0, 0.38) !important
		}

		#rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
			line-height: 60px !important;
			font-size: 17px !important
		}
	</style>
</head>
<!--Body Start-->

<body data-res-from="1025">
	<!--Page Loader-->
	<div class="page-loader"></div>
	<!--Zmm Wrapper-->
	<div class="zmm-wrapper">
		<a href="#" class="zmm-close close"></a>
		<div class="zmm-inner bg-white typo-dark">
			<div class="text-center mobile-logo-part margin-bottom-30">
				<a href="index.html" class="img-before"><img src="{{ asset("images/logo-dark.png") }} class="img-fluid" width="170"
						height="51" alt="Logo"></a>
			</div>
			<div class="zmm-main-nav">
			</div>
			<div class="search-form-wrapper margin-top-30">
				<form class="search-form" role="search">
					<div class="input-group add-on">
						<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i
									class="ti-arrow-right"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Overlay Search -->
	<div class="overlay-search text-center hide">
		<a href="#" class="close close-light overlay-search-close"></a>
		<div class="search-form-wrapper">
			<form class="navbar-form search-form sliding-search-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
					<div class="input-group-btn">
						<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Main wrapper-->
	<div class="page-wrapper">
		<div class="page-wrapper-inner">
			@yield('content')
		</div>
		<!-- .page-wrapper-inner -->
	</div>
	<!--page-wrapper-->

	<!-- Footer -->
	@component('zegen.partials.footer')
	@endcomponent
	<!-- Footer -->
	<!-- jQuery Lib -->
	<script src="{{ asset("js/jquery.min.js") }}") }}"></script>
	<!-- Bootstrap Js -->
	<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
	<!-- Easing Js -->
	<script src="{{ asset("js/jquery.easing.min.js") }}"></script>
	<!-- Carousel Js Code -->
	<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
	<!-- Paroller Js -->
	<script src="{{ asset("js/jquery.paroller.min.js") }}"></script>
	<!-- Isotope Js -->
	<script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
	<!-- Magnific Popup Js -->
	<script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
	<!-- Validator Js -->
	<script src="{{ asset("js/validator.min.js") }}"></script>
	<!-- Smart Resize Js -->
	<script src="{{ asset("js/smartresize.min.js") }}"></script>
	<!-- Appear Js -->
	<script src="{{ asset("js/jquery.appear.min.js") }}"></script>
	<!-- Theme Custom Js -->
	<script src="{{ asset("js/custom.js") }}"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCTLPC6fhl1bPQpZWox4FkkiSZYmBt5lQ8"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>
	<!-- REVOLUTION JS FILES -->
	<script src="{{ asset("rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
	<script src="{{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script src="{{ asset("rs-plugin/js/main-slider/rbtools.min.js") }}"></script>
	<script src="{{ asset("rs-plugin/js/main-slider/rs6.min.js") }}"></script>
	<script src="{{ asset("rs-plugin/js/main-slider/home-1.js") }}"></script>
</body>
<!-- Body End -->

</html>