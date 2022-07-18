
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Edit Data Testimoni</h1>
    <br>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/testimoni/{{ $testimoni->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formFile" class="form-label">Ganti Foto Testimoni</label>
            <input type="hidden" name="oldImage" value="{{ $testimoni->foto }}">
            @if ($testimoni->foto)
                            <img src="{{ asset('storage/' . $testimoni->foto) }}"
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
                  
        </div>
        <div class="mb-3">
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="nama" class="form-control" id="nama" name="nama" value="{{ old('nama', $testimoni->nama) }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="komentar">Komentar</label>
                <input type="komentar" class="form-control" id="komentar" name="komentar" value="{{ old('komentar', $testimoni->komentar) }}">
              </div>
          </div>
       
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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