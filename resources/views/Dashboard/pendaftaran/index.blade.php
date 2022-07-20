
@extends('layouts.dashboard')
@section('container')
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
    <h1 class="h2">Pendaftaran</h1>
  </div>
  @if(session()->has('succes'))
  <div class="alert alert-primary col-lg-8" role="alert">
    {{ session('succes') }}
  </div>
  @endif
      <div class="table-responsive col-lg-8 justify-content-center align-items-center">
          <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">Pilihan Program</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody>
                    <div class="d-flex align-items-center">

                        @foreach ($pendaftarans as $pendaftaran)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/' . $pendaftaran->foto) }}" class="img-fluid" style="max-width: 150px"></td>
                            <td><strong>{{ $pendaftaran->nama }}</strong></td>
                            <td>{{ $pendaftaran->no_hp }}</td>
                            <td>{{ $pendaftaran->program }}</td>
                            <td><a class="badge btn-info" href="/dashboard/pendaftaran/{{ $pendaftaran->id }}"><i class="fas fa-eye" style="font-size: 20px"></i></a>  
                               </td>
                            
                        </tr>
                        @endforeach
                    </div>
                </tbody>
                </thead>
            </table>
        </div>


@endsection