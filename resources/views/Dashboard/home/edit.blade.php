
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Edit Data home</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/home/{{ $home->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <div class="form-group">
              <label for="judul">Judul</label>
              <input type="judul" class="form-control" id="judul" name="judul" value="{{ old('judul', $home->judul) }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="tombol">Tombol</label>
                <input type="tombol" class="form-control" id="tombol" name="tombol" value="{{ old('tombol', $home->tombol) }}">
              </div>
          </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $home->deskripsi) }}">
              </div>
          </div>
          <div class="mb-3">
            <div class="form-group">
                <label for="link">Link</label>
                <input type="link" class="form-control" id="link" name="link" value="{{ old('link', $home->link) }}">
              </div>
          </div>
<div class="mb-3">
    <label for="formFile" class="form-label">Ganti Foto home</label>
    <input type="hidden" name="oldImage" value="{{ $home->foto }}">
    @if ($home->foto)
                    <img src="{{ asset('storage/' . $home->foto) }}"
                        class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                @endif
                <input class="form-control @error('foto') is-invalid @enderror" type="file" id="foto" name="foto"
                    onchange="previewImage()">
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>

    <script>

        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(foto.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection