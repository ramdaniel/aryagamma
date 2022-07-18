
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
           
    <h1 class="h2">Tambahkan Artikel</h1>
  </div><div class="table-responsive col-lg-8 justify-content-center align-items-center">
    <a class="btn btn-info mb-3" href="/dashboard/artikel/create">Tambahkan Artikel Baru</a>
      <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
            <tbody>
                <div class="d-flex align-items-center">

                    @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $artikel->foto) }}" class="img-fluid" style="max-width: 150px"></td>
                        <td><form action="/dashboard/artikel/{{ $artikel->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Kamu Yakin Menghapus Foto Ini?')"><i class="fa-solid fa-trash" style="font-size: 30px"></i></button>
                              </form></td>
                        
                    </tr>
                    @endforeach
                </div>
  @endsection