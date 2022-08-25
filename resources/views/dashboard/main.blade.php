<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from technext.github.io/fruitkha/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 07:44:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
  <script src="js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Kost Online</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="asset/assets/img/logoo-removebg-preview.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&amp;display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="asset/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="asset/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="asset/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="asset/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="asset/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="asset/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="asset/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="asset/assets/css/responsive.css">
	<link rel="stylesheet" href="asset/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							
						</div>
						<!-- logo -->
						
						<!-- menu start -->
						<nav class="navbar navbar-expand-lg bg-black">
							<div class="container-fluid">
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Home</a>
									</li>
									<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
									</li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Boking
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Cart</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Boking</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
									</li>
									<li class="nav-item">
									<a class="nav-link" href="#">About</a>
									</li>
								</ul>
								<ul>
								@auth
									<div class="action">
										<div class="profile">
											<img src="asset/assets/img/ayang.jpg" alt="">
										</div>
										<div class="menu">
											<h3>{{ auth()->user()->name }}<br>
												<span> ayang pina forever</span></h3>
											<ul>
												<li><a href=""><i class="fa-solid fa-user"></i> My profile</a></li>
												<li><a href=""><i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
												<li><a href=""><i class="fa-solid fa-inbox"></i> Inbox</a></li>
												<li><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
												<li><a class="dropdown-item" href="{{ route('logout') }}"
														onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
														</a>
												</li>										
											</ul>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
											@else
											<li>
												<a class="mobile-hide " href="{{url('login')}}"><i class="fas fa-user"></i></a>
												@endauth
											</li>
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
							</div>
							</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<style>
		
	.hero-bg {
		background-image: url(asset/assets/img/kost4.jpg);
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
	}
	</style>
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						
						<div class="hero-text-tablecell">
							<p class="subtitle">Ervina Hardiyat</p>
							<h1>Pina'Kost</h1>
							<div class="hero-btns">
								<a href="{{url('shop')}}" class="boxed-btn">Cari Kost</a>
								<a href="{{url('contact')}}" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-home"></i>
						</div>
						<div class="content">
							<h3>Nyaman</h3>
							<p>Buat Tempatmu Menjadi Nyaman!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>24 Jam Siap Membantu</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-money-bill-wave"></i>
						</div>
						<div class="content">
							<h3>Bersahabat</h3>
							<p>Dapatkan Harga Yang Bersahabat!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 mt-5">
					<form action="{{url('/')}}" method="GET">
							<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="search . . ." name="search" value="{{ request('search')}}">
							<button class="btn btn-success" type="submit">Search</button>
							</div>
					</form>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->
	<!-- latest news -->
	<div class="latest-news pt-40 pb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('pondokputri')}}"><img src="asset/assets/img/kost4.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('pondokputri')}}">Kost Pondok Putri 42 Bantul</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('putribantul')}}"><img src="asset/assets/img/kost3.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('putribantul')}}">Kost Putri Bantul</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 13 Mei, 2020</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost12.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('putriceria')}}">Kost Putri Ceria</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 4 Juli, 2021</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>	
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost37.webp" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('inikost')}}">Ini Kost</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 12 Agsutus, 2021</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost2.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('omahkost')}}">Omah Kost</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i>24 Juli, 2022</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost43.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('kostputra')}}">Kost Putra</a></h3> 
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 18 Februari, 2022</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost17.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('putrabantul')}}">Putra Kost Bantul</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 28 Juli, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost45.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('khususputra')}}">Kost Khusus Putra</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 3 December, 2020</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href=""><img src="asset/assets/img/kost5.jpg" alt=""></a>
						<div class="news-text-box">
							<h3><a href="{{url('kostkita')}}">Kost Kita</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 30 Maret, 2019</span>
							</p>
							<p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
							<a href="{{url('#')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
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
							<li><a href="{{url('index')}}">Home</a></li>
							<li><a href="{{url('about')}}">About</a></li>
							<li><a href="{{url('booking')}}">Shop</a></li>
							<li><a href="{{url('news')}}">News</a></li>
							<li><a href="{{url('contact')}}">Contact</a></li>
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
					<p>Copyrights &copy; 2019 - <a href="https://www.instagram.com/vinaakzdyy/?hl=id">Ervina Hardiyat</a>,  All Rights Reserved.<br>
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
	<script src="asset/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="asset/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="asset/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="asset/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="asset/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="asset/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="asset/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="asset/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="asset/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="asset/assets/js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<!-- Mirrored from technext.github.io/fruitkha/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2022 07:44:53 GMT -->
</html>