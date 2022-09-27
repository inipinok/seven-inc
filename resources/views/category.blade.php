@extends('template.main')
@section('content')
<!-- single article section -->
<div class="container pt-80 pb-150">
        <h3>{{ $title }}</h3>
        @foreach ($kosts as $kost)
        <h4><a href="{{ url('kosts/' . $kost->slug) }}">{{ $kost->title }}</a></h4>
        <p>By. <a href="{{ url('author/' . $kost->user->name )}}">{{ $kost->user->name }}</a>   <a href="{{ url('category/' . $kost->category->slug )}}">{{ $kost->category->slug }}</a> </p>

        <p>{{ $kost->excerpt }}</p>
        @endforeach
    </div>
	<!-- end single article section -->
@endsection