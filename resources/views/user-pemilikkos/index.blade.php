@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid mt-3">
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pemilik Kost /</span> Pemilik Kost
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
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories')}}"><i class="bx bx-home me-1"></i> Pemilik Kost</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories/create')}}"><i class='bx bx-add-to-queue'></i> Tambah Pemilik Kost</a></li>
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
                  <th>Action</th>
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
                  <td>
                  <a href="" class="btn btn-sm btn-warning mb-2"><i class='bx bx-message-square-edit'></i></a>
                      <a href="" class="btn btn-sm btn-info mb-2"><i class='bx bx-show-alt'></i></a>
                      <form action="{{url('dashboard/user-pemilikkos')}}" method="post"  class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-danger mb-2" onclick="return confirm('Anda yakin mau menghapus ini?')">
                        <i class='bx bx-message-square-x'></i>                        
                      </button>
                      </form>
                  </td>
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