
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Edit Data Program</h1>
    <br>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/program/{{ $program->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="formFile" class="form-label">Ganti Foto program</label>
            <input type="hidden" name="oldImage" value="{{ $program->foto }}">
            @if ($program->foto)
                            <img src="{{ asset('storage/' . $program->foto) }}"
                                class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block" style="max-width: 150px">
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
              <label for="judul">Nama Program</label>
              <input type="judul" class="form-control" id="judul" name="judul" value="{{ old('judul', $program->judul) }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="hidden" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $program->deskripsi) }}">
                <trix-editor  input="deskripsi"></trix-editor>
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