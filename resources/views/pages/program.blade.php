@extends('layouts.default')
@section('container')
<section class="program" id="program">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center fw-bold">Program Kami</h2>
        </div>
      </div>
    @foreach($programs as $program)
      <div class="row mt-5">
        <div class="col text-center">
          <img src="{{ asset('storage/' . $program->foto) }}" class="rounded-5" width="350" alt="" />
        </div>
        <div class="col my-auto">
          <div class="container">
            <h4 class="fw-semibold">{{ $program->judul }}</h4>
            <p class="pt-3">{!! $program->deskripsi !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
@endsection