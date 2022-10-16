@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid mt-3">
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Admin /</span> Admin
</h4>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories')}}"><i class="bx bx-home me-1"></i> Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories/create')}}"><i class='bx bx-add-to-queue'></i> Tambah Admin</a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="table-responsive col-lg-6">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Telephone</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
            @if(auth()->user()->is_admin)

              @foreach($admins as $admin)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$admin->name}}</td>
                  <td>{{$admin->phone_number}}</td>
                </tr>
              @endforeach

              @else 
              
              @foreach($users as $user)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->phone_number}}</td>
                </tr>
              @endforeach

              @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection