@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Transaksi
          </h3>
        </div>
        <div class="card-body">
          <!-- digunakan untuk menampilkan pesan error atau sukses -->
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kost</th>
                  <th>Category</th>
                  <th>Total</th>
                  <th>Sub Total</th>
                  <th>Status Pembayaran</th>
                </tr>
              </thead>
              <tbody>
              @foreach($itemorder as $kost)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$kost->kost->title}}</td>
                  <td>{{$kost->category->slug}}</td>
                  <td>{{$kost->cart->total}}</td>
                  <td>{{$kost->cart->sub_total}}</td>
                  <td>{{$kost->cart->status_pembayaran}}</td>
                  <td>
                    <a href="" class="btn btn-sm btn-info mb-2">
                    Detail
                    </a>
                    <a href="" class="btn btn-sm btn-primary mb-2">
                    Edit
                    </a>
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