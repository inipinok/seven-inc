@extends('dashboard.layout.main')
@section('content')
<!-- single article section -->
<div class="container pt-150 pb-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>{{ $kost->title }}</h3>
                <p><a href="{{ url('kosts/' . $kost->slug) }}"></a></p>
                <p>By. <a href="{{ url('author/' . $kost->user->name )}}">{{ $kost->user->name }}</a>  ini <a href="{{ url('categories/' . $kost->category->slug )}}">{{ $kost->category->slug }}</a> </p>
				
				@if($kost->image)
				<div style="max-height: 500px; overflow:hidden;">
					<img src="{{ asset('storage/' . $kost->image)}}" alt="">
				</div>
				@else
                <img src="https://source.unsplash.com/800x500?{{ $kost->category->name }}" alt="">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $kost->body !!}
                </article>
                
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
                            <a href="{{ url('dashboard/kost') }}" class="btn btn-sm btn-info mb-2"><i class='bx bx-arrow-back' ></i></a>
                            <a href="" class="btn btn-sm btn-warning mb-2"><i class='bx bx-message-square-edit'></i></a>
                            <form action="{{ url('dashboard/kost/' . $kost->slug) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger mb-2" onclick="return confirm('Anda yakin mau menghapus ini?')">
                                <i class='bx bx-message-square-x'></i>                        
                                </button>
                            </form>	
                        </div>
					</div>
				</div>
        </div>
</div>
<!-- end single article section -->
@endsection