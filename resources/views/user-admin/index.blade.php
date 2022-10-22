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
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/user-admin')}}"><i class="bx bx-home me-1"></i> Admin</a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="table-responsive col-lg-12">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No Telephone</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody>

              @foreach($data as $admin)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$admin->name}}</td>
                  <td>{{$admin->email}}</td>
                  <td>{{$admin->phone_number}}</td>
                  <td>{{$admin->role}}</td>
                </tr>
              @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection