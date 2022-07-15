@extends('layouts.default')
@section('container')
<section class="program" id="program">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center fw-bold">Program Kami</h2>
        </div>
      </div>
      <div class="row" style="margin-top: 100px">
        <div class="col text-center">
          <img src="assets/img/reguler.jpg" class="rounded-5" width="350" alt="" />
        </div>
        <div class="col my-auto">
          <div class="container">
            <h4 class="fw-semibold">REGULER</h4>
            <p class="pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, deleniti reprehenderit? Ex quos, doloremque a nihil, voluptas ipsa cumque corrupti mollitia quo vitae distinctio soluta.</p>
            <button class="btn btn-sm mt-3 p-2 text-dark fw-semibold bg-warning">Selengkapnya</button>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <img src="assets/img/intensif.jpg" class="rounded-5" width="350" alt="" />
        </div>
        <div class="col my-auto">
          <div class="container">
            <h4 class="fw-semibold">INTENSIF</h4>
            <p class="pt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, deleniti reprehenderit? Ex quos, doloremque a nihil, voluptas ipsa cumque corrupti mollitia quo vitae distinctio soluta.</p>
            <button class="btn btn-sm mt-3 p-2 text-dark fw-semibold bg-warning">Selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection