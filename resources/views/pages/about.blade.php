@extends('layouts.default')
@section('container')
@foreach ($abouts as $about)
<section class="content mt-5" id="content">
        <div class="container">
          <div class="row pt-5 d-flex flex-row">
            <div class="col-md-3">
              <img src="{{ asset('storage/'. $about->foto) }}" alt="" style="max-width: 300px" />
            </div>
            <div class="col-md-9">
              <h1>About Us</h1>
              <p class="mt-4">
                {{$about->deskripsi}}
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="fw-bold fs-2">Kontak</p>
              <p>Hubungi kami untuk info lebih lanjut</p>
            </div>
            <div class="col-md-6">
              <a href="https://api.whatsapp.com/send/?phone=62{{ $about->no_wa }}&text&type=phone_number&app_absent=0" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                <span>0{{ $about->no_wa }}</span>
              </a>
              <a href="https://www.instagram.com/{{ $about->instagram }}/">
                <i class="fa-brands fa-instagram"></i>
                <span>{{ $about->instagram }}</span>
              </a>
              <a href="">
                <i class="fa-solid fa-envelope"></i>
                <span>{{ $about->email }}</span>
              </a>
              <a href="">
                <i class="fa-solid fa-location-dot"></i>
                <span>{{ $about->alamat }}</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      @endforeach
      <style>
        body {
  min-height: 1100px;
}

.contact {
  margin-top: 100px;
}

.contact .container {
  background-color: #ffbe0b;
  border-radius: 40px;
  padding: 50px;
}

.contact a {
  text-decoration: none;
  color: black;
  display: block;
  margin-bottom: 16px;
}

.contact i {
  font-size: 1.2rem;
  margin-right: 20px;
}

      </style>
      @endsection