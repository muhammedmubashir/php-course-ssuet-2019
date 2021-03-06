<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/slick.css') }} "/>
 		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/slick-theme.css') }}"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/nouislider.min.css') }}"/>
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }} "/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		@include("layout/header")

		@include("layout/navbar")

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Regular Page</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Blank</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					@yield("content")
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		@include("layout/footer")

		<!-- jQuery Plugins -->
		<script src="{{ URL::asset('asset/js/jquery.min.js')}}"></script>
		<script src="{{ URL::asset('asset/js/bootstrap.min.js')}}"></script>
		<script src="{{ URL::asset('asset/js/slick.min.js')}}"></script>
		<script src="{{ URL::asset('asset/js/nouislider.min.js')}}"></script>
		<script src="{{ URL::asset('asset/js/jquery.zoom.min.js')}}"></script>
		<script src="{{ URL::asset('asset/js/main.js')}}"></script>

	</body>
</html>
