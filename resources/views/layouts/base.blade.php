<!DOCTYPE html>
<html lang="en">
<head>
@php
	use App\Models\Setting;
	$settings = Setting::find(1);
@endphp
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>HIMS- Heartbeat institute of medical sciences</title>

<!-- Mobile Specific Metas
================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta name="author" content="Themefisher">
<meta name="generator" content="">
<!-- theme meta -->
<meta name="theme-name" content="HIMS" />
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Settings')}}/{{$settings->web_favicon}}" />
<!-- 
Essential stylesheets
=====================================-->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/icofont/icofont.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@livewireStyles

</head>
<body id="top">
	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:{{$settings->web_email}}"><i class="icofont-support-faq mr-2"></i>{{$settings->web_email}}</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address: {{$settings->address}} </li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+23-345-67890">
								<span>Call Now : </span>
								<span class="h4">{{$settings->web_phone}}</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="{{asset('assets/images/Settings')}}/{{$settings->web_logo}}" alt="" class="img-fluid" width="50">
					<!-- <h1>HIMS</h1> -->
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">About Us <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="{{route('mission')}}">Mission & vision</a></li>
								<li><a class="dropdown-item" href="{{route('management-team')}}">Management Team</a></li>

							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Academic <i class="icofont-thin-down"></i></a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="{{route('notice')}}">Notice board</a></li>
								<li><a class="dropdown-item" href="{{route('news')}}">News</a></li>
								{{-- <li><a class="dropdown-item" href="{{route('affiliate')}}">Affiliated By</a></li> --}}
								<li><a class="dropdown-item" href="{{route('teachers')}}">Teachers</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{route('courses')}}">Courses</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('admission-fees')}}">Admission & Fees</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

    {{$slot}}


	<!-- footer Start -->
	<footer class="footer section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mr-auto col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4">
							<img src="{{asset('assets/images/Settings')}}/{{$settings->web_logo}} " alt="" class="img-fluid" width="100">
							<!-- <h1>HIMS</h1> -->
						</div>
						<p>Heartbeat institute of medical science (HIMS) as a pioneer Institute for providing to improve the skills of medical student, Nutritionist, Pharmacist & Health Service Professionals.</p>

						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item">
								<a href="{{$settings->facebook_link}}"><i class="icofont-facebook"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="{{$settings->twitter_link}}"><i class="icofont-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="{{$settings->linkedin_link}}"><i class="icofont-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Department</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#!">Surgery </a></li>
							<li><a href="#!">Wome's Health</a></li>
							<li><a href="#!">Radiology</a></li>
							<li><a href="#!">Cardioc</a></li>
							<li><a href="#!">Medicine</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Support</h4>
						<div class="divider mb-4"></div>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#!">Terms & Conditions</a></li>
							<li><a href="#!">Privacy Policy</a></li>
							<li><a href="#!">Company Support </a></li>
							<li><a href="#!">FAQuestions</a></li>
							<li><a href="#!">Company Licence</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Get in Touch</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block mb-4">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<span class="h6 mb-0">Support Available for 24/7</span>
							</div>
							<h4 class="mt-2"><a href="mailto:{{$settings->web_email}}">{{$settings->web_email}}</a></h4>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<span class="h6 mb-0">{{$settings->working_hours_days}}</span>
							</div>
							<h4 class="mt-2"><a href="tel:+88{{$settings->web_phone}}">+880 {{$settings->web_phone}}</a></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm py-4 mt-5">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright">
							Copyright &copy; 2024, Designed &amp; Developed by <a href="https://kaizenitbd.com/">Kaizen IT Ltd</a>
						</div>
					</div>
					<!-- <div class="col-lg-6">
						<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
							<form action="#" class="subscribe">
								<input type="text" class="form-control" placeholder="Your Email address" required>
								<button type="submit" class="btn btn-main-2 btn-round-full">Subscribe</button>
							</form>
						</div>
					</div> -->
				</div>

				<div class="row">
					<div class="col-lg-4">
						<a class="backtop scroll-top-to" href="#top">
							<i class="icofont-long-arrow-up"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- 
	Essential Scripts
	=====================================-->
	<script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<script src="{{asset('assets/plugins/shuffle/shuffle.min.js')}}"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
	<script src="{{asset('assets/plugins/google-map/gmap.js')}}"></script>
	
	<script src="{{asset('assets/js/script.js')}}"></script>
    @livewireScripts

</body>
</html>
