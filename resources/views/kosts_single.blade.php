@extends('template.main')
@section('content')
<!-- single article section -->
<div class="container pt-70 pb-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>{{ $kost->title }}</h3>
                <p><a href="{{ url('kosts/' . $kost->slug) }}"></a></p>
                <p>By. <a href="{{ url('author/' . $kost->user->name )}}">{{ $kost->user->name }}</a>  ini <a href="{{ url('categories/' . $kost->category->slug )}}">{{ $kost->category->slug }}</a> </p>
				
                <img src="https://source.unsplash.com/1000x500?{{ $kost->category->name }}" alt="">
                
                <article class="my-3 fs-5">
                    {!! $kost->body !!}
                </article>
                
                <a href="{{ url ('kosts') }}">back</a>
            </div>
			<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Fasilitas</h4>
							<ul>
								<li>Kamar Mandi Dalam</li>
								<li>AC</li>
								<li>WIFI</li>
								<li>Lemari</li>
								<li>Dapur Bersama</li>
								<li>Kasur</li>
							</ul>
						</div>
						<div class="recent-posts">
							<h4>Peraturan</h4>
							<ul>
								<li>Kost Khusus Putri</li>
								<li>Dilarang Keluar Melebihi Jam 10 Malam</li>
								<li>Pria dilarang Masuk Kost</li>
								<li>Menaati tata tertib yang ada</li>
							</ul>
						</div>
						<div class="price">
							<h4>Price</h4>
							<p class="btn btn-success">Rp.{{ $kost->price }} /bulan</p>
							<h4>Alamat</h4>
							<p>{{ $kost->address }}</p>
							<a href="{{url('checkout')}}" class="boxed-btn black">Booking Sekarang!</a>
						</div>
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="#">Terjamin</a></li>
								<li><a href="#">Nyaman</a></li>
								<li><a href="#">Ramah</a></li>
								<li><a href="#">Elegan</a></li>
								<li><a href="#">Murah</a></li>
								<li><a href="#">Terdekat</a></li>
							</ul>
						</div>
					</div>
				</div>
        </div>
</div>
<!-- end single article section -->
@endsection