
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Edit Data About</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/about/{{ $about->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $about->deskripsi) }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="instagram" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $about->instagram) }}">
              </div>
          </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="no_wa">Nomor Whatsapp</label>
                <input type="no_wa" class="form-control" id="no_wa" name="no_wa" value="{{ old('no_wa', $about->no_wa) }}">
              </div>
          </div>
          <div class="mb-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $about->email) }}">
              </div>
          </div>
          <div class="mb-3">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $about->alamat) }}">
              </div>
          </div>
<div class="mb-3">
    <label for="formFile" class="form-label">Ganti Foto About</label>
    <input type="hidden" name="oldImage" value="{{ $about->foto }}">
    @if ($about->foto)
                    <img src="{{ asset('storage/' . $about->foto) }}"
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