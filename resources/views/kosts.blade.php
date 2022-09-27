@extends('template.main')
@section('content')
<h3 class="mb-3 text-center">{{ $title }}</h3>
		<div class="row justify-content-center mb-4 mt-5">
			<div class="col-md-6">
				<form action="{{url('kosts')}}">
					@if (request('category'))
					<input name="category" value="{{ request('category') }}">
					@endif
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="search" value=" {{request('search') }}" placeholder="mau cari apa?">
						<button class="btn btn-outline-secondary" type="submit" >Search</button>
					</div>
				</form>
			</div>
		</div>
<!-- latest news -->
<div class="latest-news mt-80 mb-150">
		<div class="container">
			<div class="row">
				@if ($kosts->count())
				<div class="text-center">
					<div class="single-latest-news">
					<div class="position-absolute bg-dark rounded-right p-3 py-2 text-white">{{ $kosts[0]->category->slug }}</div>
						@if($kosts[0]->image)
						<div style="max-height: 700px; overflow:hidden;">
							<img src="{{ asset('storage/' . $kosts[0]->image)}}" alt="">
						</div>
						@else
						<a href="{{ url('kosts/' . $kosts[0]->slug) }}"><img src="https://source.unsplash.com/1200x600?{{ $kosts[0]->category->name }}" alt=""></a>
						@endif
						<div class="news-text-box">
							<h3><a href="{{ url('kosts/' . $kosts[0]->slug) }}">{{ $kosts[0]->title }}</a></h3>
							<p class="blog-meta">
								<small>
									<a href="{{ url('author/' . $kosts[0]->user->name )}}"><i class="fas fa-user"></i> {{ $kosts[0]->user->name }}</a> <br>
									<a href="{{ url('categories/' . $kosts[0]->category->slug )}}"><i class="fas fa-home"></i> {{ $kosts[0]->category->slug }}</a> {{ $kosts[0]->created_at->diffForHumans() }}
                                </small>
							</p>
							<p class="excerpt">{{ $kosts[0]->excerpt }}</p>
							<a href="{{ url('kosts/' . $kosts[0]->slug) }}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>

				@foreach ($kosts->skip(1) as $kost)
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
					<div class="position-absolute rounded-right p-3 py-2 text-white" style="background-color: rgba(0,0,0, 0.3)">{{ $kost->category->slug }}</div>
						@if($kost->image)
							<img src="{{ asset('storage/' . $kost->image)}}" alt="">
						@else
						<a href="{{ url('kosts/' . $kost->slug) }}"><img src="https://source.unsplash.com/500x500?{{ $kost->category->name }}" alt="{{ $kost->category->slug }}"></a>
						@endif
						<div class="news-text-box">
							<h3><a href="{{ url('kosts/' . $kost->slug) }}">{{ $kost->title }}</a></h3>
							<p class="blog-meta">
								<small>
                                    <a href="{{ url('author/' . $kost->user->name )}}"><i class="fas fa-user"></i> {{ $kost->user->name }}</a> <br>
                                    <a href="{{ url('categories/' . $kost->category->slug )}}"><i class="fas fa-home"></i> {{ $kost->category->slug }}</a> {{ $kost->created_at->diffForHumans() }}
                                </small>
							</p>
							<p>{{ $kost->excerpt }}</p>
                            <a href="{{ url('kosts/' . $kost->slug) }}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				@endforeach
				@else
				<h6 class="text-center fs-4">Maaf ya yang kamu cari gaada disini, coba pakai keyword lain! <a href="{{ url('kosts') }}" class="read-more-btn fs-4" style="color:green;font-size:4;"> oke</a></h6>

				@endif
			</div>
		</div>
</div>
<!-- end latest news -->
@endsection