@extends('template.main')
    @section('testimoni')
	<!-- latest news -->
	<div class="container">
	<div class="row">
			<div class="col-md-8 col-center m-auto">
				<h2>Testimoni Customer</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class=" item carousel-item active">
							<div class="img-box"><img src="https://source.unsplash.com/1000x500?people" height="100" alt=""></div>
							<p class="testimonial">Harganya sangat mede Kost nya berkualitas juga suka deh.</p>
							<p class="overview"><b>Persone 1</b>, Office</p>
						</div>
						<div class=" item carousel-item">
							<div class="img-box"><img src="https://source.unsplash.com/1000x500?people" height="100" alt=""></div>
							<p class="testimonial">Kostnya nyaman sekali suasananya bagus tetangga kost pun ramah ramah.</p>
							<p class="overview"><b>Persone 2</b>, Marketing</p>
						</div>
						<div class=" item carousel-item">
							<div class="img-box"><img src="https://source.unsplash.com/1000x500?people" height="100" alt=""></div>
							<p class="testimonial">Rekomendasi banget sih disini soalnya fasilitas lengkap harganya pun tidak mahal juga.</p>
							<p class="overview"><b>Persone 3</b>, Salon</p>
						</div>
					</div>
				

				</div>
				</div>
		</div>
	</div>
	<style>
		body {
			font-family: 'Noto Sans' , sans-serif;
			padding: 40px 0;
		}
		h2 {
			color: #333;
			text-align: center;
			text-transform: uppercase;
			font-family: 'Noto Sans' , sans-serif;
			font-weight: bold;
			position: relative;
			margin: 30px 0 60px;
		}
		h2::after {
			content: "";
			width: 140px;
			position: absolute;
			margin: 0 auto;
			height: 3px;
			background-color: #db584e;
			left: 0;
			right: 0;
			bottom: -10px;
			opacity: .8;
		}
		.col-center {
			margin: 0 auto;
			float: none!important;
		}
		.carousel {
			margin: 50px auto;
			padding: 0 70px;
		}
		.carousel-item {
			color: #999;
			font-size: 14px;
			text-align: center;
			overflow: hidden;
			min-height: 290px;
		}
		.carousel .item .img-box {
			width: 135px;
			height: 135px;
			margin: 0 auto;
			padding: 5px;
			border: 1px solid #ddd;
			border-radius: 50%;
		}
		.carousel .img-box img {
			width: 100%;
			height: 100%;
			display: block;
			border-radius: 50%;
		}
		.carousel .testimonials {
			padding: 30px 0 10px;
		}
		.carousel .overview {
			font-style: italic;
		}
		.carousel .overview b {
			text-transform: uppercase;
			color: #db584e;
		} 
		.carousel .carousel-control {
			width: 40px;
			height: 40px;
			margin-top: -20px;
			top: 50%;
			background: none;
		}
		.carousel-control i {
			font-size: 68px;
			line-height: 42px;
            position: absolute;
			display: inline-block;
			color: rgba(0,0,0,0,8);
			text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
		}
		.carousel .carousel-indicators {
			bottom: -40px;
		}
		.carousel-indicators li, .carousel-indicators li.active {
			width: 10px;
			height: 10px;
			margin: 1px 3px;
			border-radius: 50%;
		}
		.carousel-indicators li {
			background: #999;
			border-color: transparent;
			box-shadow: inset 0 2px 1px rgbh(0,0,0,0,2);
		}
		.carousel-indicators li.active {
			background: #555;
			box-shadow: inset 0 2px 1px rgbh(0,0,0,0,2);
		}
	</style>
	<!-- end latest news -->
    @endsection