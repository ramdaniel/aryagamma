
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Tambah Galeri</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/galeri" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <div class="mb-3">
                <label for="formFile" class="form-label">Tambahkan Foto Galeri</label>
                <img class="img-preview img-fluid " style="max-width: 200px">
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