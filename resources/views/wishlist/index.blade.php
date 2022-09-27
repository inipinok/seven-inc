@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Wishlist</h3>
        </div>
        <div class="card-body">
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
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th>Nama Kost</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($itemwishlist as $wish)
                <tr>
                  <td>
                    {{ ++$no }}
                  </td>
                  <td>
                    {{ $wish->category->slug}}
                  </td>
                  <td>
                    {{ $wish->kost->title }}
                  </td>
                  <td>
                    <form action="" method="post" style="display:inline;">
                      @csrf
                      {{ method_field('delete') }}
                      <button type="submit" class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>                    
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $itemwishlist->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection