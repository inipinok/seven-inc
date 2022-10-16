@extends('dashboard.layout.main')
@section('content')
<div class="container-fluid mt-3">
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">categories /</span> Create
</h4>
  <div class="row">
    <div class="">
      <div class="card">
        <div class="card-header">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories')}}"><i class="bx bx-home me-1"></i> categories</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('dashboard/categories/create')}}"><i class='bx bx-add-to-queue'></i> Tambah categories</a></li>
        </ul>
        </div>
        <div class="card-body">
          <form action="{{url('dashboard/categories')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
              <label for="name">Nama categories</label>
              <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror required" value="{{ old('name')}}">
              @error('name')
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