@extends('template.main')
@section('content')
<!-- single article section -->
<div class="container pt-100 pb-100">
		<div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="{{url ('categories/' . $category->slug) }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h6 class="card-title text-center flex-fill p-2 text-white" style="background-color: rgba(0,0,0,0.4);">{{ $category->slug }}</h6>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
		</div>
	</div>
	<!-- end single article section -->
@endsection