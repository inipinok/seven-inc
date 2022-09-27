@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid">
    <h4 class="fw-bold py-3 mb-4">
    <h4 class="fw-bold py-3"><span class="text-muted fw-light">Category /</span> Category</h4>
    </h4>
    <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="{{url ('categories/' . $category->slug) }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/300x300?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h6 class="card-title text-center flex-fill p-2 text-white" style="background-color: rgba(0,0,0,0.4);">{{ $category->slug }}</h6>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
	</div>
</div>
<!-- Examples -->
@endsection