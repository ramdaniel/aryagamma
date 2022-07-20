@extends('layouts.default')
@section('container')

<section class="artikel text-center" id="artikel">
    <div class="row text-center">
      <div class="col">
        <h2 class="mb-5 fw-bold">Artikel</h2>
      </div>
    </div>
    <div id="mainCarousel" class="carousel w-10/12 max-w-xl mx-auto mt-3">
      <div class="carousel_slide grid grid-cols-2 gap-5">
    @foreach ($artikels as $artikel)
        <a href="{{ asset('storage/' . $artikel->foto) }}" class="my-5" data-fancybox="gallery">
          <img src="{{ asset('storage/' . $artikel->foto) }}" style="max-width: 400px" />
        </a>
        @endforeach
      </div>
    </div>
  </section>

@endsection