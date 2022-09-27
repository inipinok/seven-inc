@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid mt-3">
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kost /</span> Kost
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
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/kost')}}"><i class="bx bx-home me-1"></i> Kost</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('dashboard/kost/create')}}"><i class='bx bx-add-to-queue'></i> Tambah Kost</a></li>
          </ul>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Category</th>
                  <th>No Hp</th>
                  <th>Alamat</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($kosts as $kost)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$kost->title}}</td>
                  <td>{{$kost->category->slug}}</td>
                  <td>{{$kost->user->phone_number}}</td>
                  <td>{{$kost->address}}</td>
                  <td>{{$kost->price}}</td>
                  <td>
                  <a href="{{ url("dashboard/kost/$kost->slug/edit")}}" class="btn btn-sm btn-warning mb-2"><i class='bx bx-message-square-edit'></i></a>
                      <a href="{{ url('dashboard/kost/' . $kost->slug) }}" class="btn btn-sm btn-info mb-2"><i class='bx bx-show-alt'></i></a>
                      <form action="{{ url('dashboard/kost/' . $kost->slug) }}" method="post" class="d-inline">
                        @method('delete')
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