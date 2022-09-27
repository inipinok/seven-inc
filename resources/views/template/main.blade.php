<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/fruitkha/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 07:44:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Lorem | Kost</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('asset/poto-kost/logoo-removebg-preview.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/style.css')}}">

	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('asset/dashboard/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('asset/admin/vendor/js/bootstrap.js') }}"></script>
   
    <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<style>
		.navbar
		{
			background-color:#20B2AA;
			list-style-type: none;
			overflow: hidden;
			top: 0;
			position: fixed;
			width: 100%;
			z-index: 1;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4">
 
		<a class="navbar-brand" href="#">Lorem'Kost</a>
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	
			<ul class="navbar-nav">
				<li class="nav-item">
				<a class="nav-link" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="{{ url('kosts') }}">Kost</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="{{ url('categories') }}">Category</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="{{ url('dashboard') }}">Admin</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="{{ url('checkout') }}"><i class="bi bi-cart2"></i></a>
				</li>
			</ul>
			<ul>
				@auth
				<div class="action">
					<div class="profile">
						<h3>welcome, {{ auth()->user()->name }} <i class="bi bi-caret-down-fill"></i><br>
					</h3>					
				</div>
				<div class="menu">
					<h3>
						<span>welcome to Lorem'Kost</span>
					</h3>
						<ul>
							<li><a href=""><i class="fa-solid fa-user"></i> My profile</a></li>
							<li><a href=""><i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
							<li><a href=""><i class="fa-solid fa-inbox"></i> Inbox</a></li>
							<li><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
							<li>
								<form action="{{ url('logout') }}" method="post">
									@csrf
									<button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i> logout</button>
								</form>
							</li>
							@else
							<a href="{{ url('login') }}" class="btn btn-outline-success mr-3">Login</a>
							@endauth
						</ul>
					</div>
				</div>
				<script>
						const toggleMenu = document.querySelector('.menu')
						const profile = document.querySelector('.profile')

						toggleMenu.style.display = 'none'

						profile.addEventListener('click', function() {
						toggleMenu.style.display = 'block'

						setInterval(() => {
							toggleMenu.style.display = 'none'
						}, 5000);
					})
										
				</script>
			</ul>		
		</div>
	
	</nav>
	<!-- end header -->

	<!-- latest news -->
	<div class="latest-news pt-100 pb-150">
		@yield('content')
	</div>
	<!-- end latest news -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="https://technext.github.io/fruitkha/index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset('asset/dashboard/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('asset/dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('asset/dashboard/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('asset/dashboard/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('asset/dashboard/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('asset/dashboard/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('asset/dashboard/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('asset/dashboard/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('asset/dashboard/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('asset/dashboard/js/main.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/admin/vendor/libs/jquery/jquery.js')}}"></script>

</body>

<!-- Mirrored from technext.github.io/fruitkha/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 07:44:53 GMT -->
</html>