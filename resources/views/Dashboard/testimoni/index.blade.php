
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Daftar Testimoni</h1>
        </div><div class="table-responsive col-lg-8 justify-content-center align-items-center">
    <a class="btn btn-info mb-3" href="/dashboard/testimoni/create">Tambahkan Testimoni Baru</a>
      <table class="table table-striped table-lg">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Komentar</th>
                <th scope="col">Action</th>
            </tr>
            <tbody>
                <div class="d-flex align-items-center">

                    @foreach ($testimonis as $testimoni)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $testimoni->foto) }}" class="img-fluid" style="max-width: 150px"></td>
                        <td>{{ $testimoni->nama }}</td>
                        <td>{{ $testimoni->komentar }}</td>
                        <td>
                          <a class="badge btn-info" href="/dashboard/testimoni/{{ $testimoni->id }}/edit"><i class="fa-solid fa-pencil" style="font-size: 15px"></i></a>
                          <form action="/dashboard/testimoni/{{ $testimoni->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Kamu Yakin Menghapus Testimoni ini?')"><i class="fa-solid fa-trash" style="font-size: 15px"></i></button>
                              </form>
                              
                            </td>
                        
                    </tr>
                    @endforeach
                </div>
  @endsection