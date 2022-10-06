@extends('dashboard.layout.main')
@section('content')
<!-- Content -->
        
<h1>selamat datang, {{ auth()->user()->name }} <br> anda login sebagai {{Auth()->user()->role}}</h1>
          
<!-- / Content -->
@endsection