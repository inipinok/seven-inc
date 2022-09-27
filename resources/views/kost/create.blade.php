@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid mt-3">
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kost /</span> Create
</h4>
  <div class="row">
    <div class="">
      <div class="card">
        <div class="card-header">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"><a class="nav-link" href="{{url('dashboard/kost')}}"><i class="bx bx-home me-1"></i> Kost</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('dashboard/kost/create')}}"><i class='bx bx-add-to-queue'></i> Tambah Kost</a></li>
        </ul>
        </div>
        <div class="card-body">
          <form action="{{url('dashboard/kost')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
              <label for="title">Nama Kost</label>
              <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror required" value="{{ old('title')}}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control  @error('slug') is-invalid @enderror required" value="{{ old('slug')}}">
              @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label" for="country">Category</label>
              <select id="category_id" name="category_id" class="select2 form-select required">
                @foreach ($categories as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach 
              </select>
            </div>
            <div class="form-group mt-3 mb-3">
              <label for="image" class="form-label">Upload Foto</label>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control  @error('image') is-invalid @enderror " type="file" id="image" name="image" onchange="previewImage()">
            </div>
              @error('image')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" name="address" id="address" class="form-control required @error('addredd') is-invalid @enderror " value="{{ old('address')}}">
              @error('address')
                <p class="text-danger">
                  {{ $message }}
                </p>
              @enderror
            </div>
            <div class="form-group">
              <label for="body">Deskripsi</label>
              @error('body')
                <p class="text-danger">
                  {{ $message }}
                </p>
              @enderror
              <input id="body" type="hidden" name="body">
              <trix-editor input="body"></trix-editor>
            </div>
            <div class="form-group mt-3">
              <label for="phone_number">No Telpon</label>
              <input name="phone_number" id="phone_number" class="form-control required" value="{{ old('phone_number')}}">
            </div>
            <div class="row">
              <div class="col mt-2">
                <div class="form-group">
                  <label for="qty">Qty</label>
                  <input type="text" name="qty" id="qty" class="form-control required" >
                </div>
              </div>
              <div class="col mt-2">
                <div class="form-group">
                  <label for="price">Harga</label>
                  <input type="text" name="price" id="price" class="form-control required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  })

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }

  }

</script>
@endsection