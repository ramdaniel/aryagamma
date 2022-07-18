@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
 
      <h4 class="page-title">Dashboard</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="card card-stats card-warning">
            <div class="card-body ">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="fas fa-image"></i>
                  </div>
                </div>
                <div class="col-7 d-flex align-items-center">
                  <div class="numbers">
                    <p class="card-category">Gallery</p>
                     <span class="count">{{ $galeri }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats card-success">
            <div class="card-body ">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="fas fa-thumbs-up"></i>
                  </div>
                </div>
                <div class="col-7 d-flex align-items-center">
                  <div class="numbers">
                    <p class="card-category">Testimoni</p>
                    <h4 class="card-title">3</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-stats card-danger">
            <div class="card-body">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
                <div class="col-7 d-flex align-items-center">
                  <div class="numbers">
                    <p class="card-category">Pendaftar</p>
                    <h4 class="card-title">1303</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection