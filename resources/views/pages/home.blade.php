@extends('layouts.default')
@section('container')
@foreach($homes as $home)
    

    <section class="hero mt-5" id="hero">
      <div class="container">
        <div class="row pt-5 d-flex flex-row">
          <div class="col-md-6">
            <h1 class="mt-4 mb-4">{{ $home->judul }}</h1>
            <p class="lh-lg">{{ $home->deskripsi }}</p>

            <div class="button-hero mt-5">
              <a href="{{ $home->link }}" class="btn-hero py-3 px-5 me-3 rounded-5 text-dark fw-bold">{{ $home->tombol }}</a>
            </div>
          </div>
          <!-- <div class="col-md-6">
            <div class="card rounded-5 m-auto">
              <img src="assets/img/keyboard1.png" width="300px" class="m-auto" alt="" />
            </div>
          </div> -->
          <img src="{{ asset('storage/'. $home->foto) }}" class="m-auto" alt="" />
        </div>
      </div>
    </section>
    <section class="infonum pt-5 pb-5">
      <div class="container">
        <div class="row text-light text-center">
          <div class="col-md-4">
            <span class="num fs-1 fw-bold">68</span>
            <p class="label">Siswa</p>
          </div>
          <div class="col-md-4">
            <span class="num fs-1 fw-bold">4</span>
            <p class="label">Program</p>
          </div>
          <div class="col-md-4">
            <span class="num fs-1 fw-bold">5</span>
            <p class="label">Team members</p>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <section id="testimoni">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="mb-5 fw-bold">TESTIMONI</h2>
          </div>
        </div>
        <div class="row text-center justify-content-center">
          @foreach ($testimonis as $testimoni)
          <div class="col-md-4">
            <div class="card border-light rounded-3" style="width: 18rem">
              <div class="card-body">
                <img src="{{ asset('storage/'. $testimoni->foto) }}" width="80" class="m-4 rounded-circle" alt="..." />
                <h5 class="fw-bold">{{ $testimoni->nama }}</h5>
                <p class="card-text fw-light mt-3">{{ $testimoni->komentar }}</p>
              </div>
            </div>
          </div>
@endforeach
        </div>
      </div>
    </section>
    <section class="galeri text-center" id="galeri">
      <div class="row text-center">
        <div class="col">
          <h2 class="mb-5 fw-bold">GALERI</h2>
        </div>
      </div>
      <div id="mainCarousel" class="carousel w-10/12 max-w-xl mx-auto mt-3">
        <div class="carousel_slide grid grid-cols-2 gap-5">
      @foreach ($galeris as $galeri)
          <a href="{{ asset('storage/' . $galeri->foto) }}" class="my-5" data-fancybox="gallery">
            <img src="{{ asset('storage/' . $galeri->foto) }}" style="max-width: 250px" />
          </a>
          @endforeach
        </div>
      </div>
    </section>

@endsection
