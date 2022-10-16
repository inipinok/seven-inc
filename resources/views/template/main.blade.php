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
				<a class="nav-link" href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i></a>
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
							@if(Auth()->user()->role == 'admin' || Auth()->user()->role == 'pemilik_kost')							
							<li><a href="{{url('dashboard')}}"><i class="fa-solid fa-user"></i> Kost Saya</a></li>
							@else
							<li><a href=""><i class="fa-solid fa-user"></i> My Profile</a></li>
							@endif
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

	<footer class="bg-light text-dark pt-5 pb-4">
		<div class="container text-center text-md-left">
			<div class="row text-center text-md-left">

				 <div class="col-md-3 col-lg-3 col-xl-3 mx-auto nt-3">
                 <h5 class="text-uppercase mb-4 font-weight-bold text-info">About Us</h5>
				 <hr class="mb-4">
				 <p>Cari Kost yang nyaman, aman, dan terpercaya? Lorem Kost menyediakan berbagai jenis Kamar Kost yang bisa di pilih sesuai dengan keinginan anda.</p>
		</div>
				
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
					<h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
					<hr class="mb-4">
					<p>
						<li class="fas fa-home mr-3"></li>JL. Raya Kelet, Keling - Jepara
				</p>
				<p>
						<li class="fas fa-envelope mr-3"></li>loremkost@gmail.com
				</p>
				<p>
						<li class="fas fa-phone mr-3"></li>0123 4567 8901
				</p>
				
				</div>

				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
					<h5 class="text-uppercase mb-4 font-weight-bold text-info">Form Us</h5>
					<hr class="mb-4">
					<p>Terima Kasih telah mengunjungi Lorem-Kost.</p>
				</div>
				</div>
				<br></br>

	
	<!-- end footer -->
	
	<!-- copyright -->		

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