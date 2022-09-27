@extends('dashboard.layout.main')
@section('content')
<!-- Content -->
        
<h1>selamat datang, {{ auth()->user()->name }}</h1>
          
<!-- / Content -->
@endsection