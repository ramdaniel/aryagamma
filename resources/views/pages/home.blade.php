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
          <div class="col-md-4">
            <div class="card border-light rounded-3" style="width: 18rem">
              <div class="card-body">
                <img src="assets/img/org1.jpg" width="80" class="m-4 rounded-circle" alt="..." />
                <h5 class="fw-bold">Maman Abdurahman</h5>
                <p class="card-text fw-light mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-light rounded-3" style="width: 18rem">
              <div class="card-body">
                <img src="assets/img/org2.jpg" width="80" class="m-4 rounded-circle" alt="..." />
                <h5 class="fw-bold">Jajang Jamaluding</h5>
                <p class="card-text fw-light mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-light rounded-3" style="width: 18rem">
              <div class="card-body">
                <img src="assets/img/org3.jpg" width="80" class="m-4 rounded-circle" alt="..." />
                <h5 class="fw-bold">Ahmad Dhani</h5>
                <p class="card-text fw-light mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed</p>
              </div>
            </div>
          </div>
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
          <a href="https://www.indonesiacollege.co.id/wp-content/uploads/2021/03/Taruna-AKPOL.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://www.indonesiacollege.co.id/wp-content/uploads/2021/03/Taruna-AKPOL.jpg" width="200" />
          </a>
          <a href="https://www.indonesiacollege.co.id/wp-content/uploads/2019/11/AKPOL-Akademi-Kepolisian-Jurusan-Program-Studi-Pendaftaran-Biaya-Foto-Seleksi-Tahapan-Tes-810x543-min.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://www.indonesiacollege.co.id/wp-content/uploads/2019/11/AKPOL-Akademi-Kepolisian-Jurusan-Program-Studi-Pendaftaran-Biaya-Foto-Seleksi-Tahapan-Tes-810x543-min.jpg" width="200" />
          </a>
          <a href="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2021/08/e583de38376898ffecaf2b84799a5855.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2021/08/e583de38376898ffecaf2b84799a5855.jpg" width="200" />
          </a>
          <a href="https://patriotmuda.id/wp-content/uploads/2020/07/226e1592-858f-4c4a-8499-842a2a35808b.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://patriotmuda.id/wp-content/uploads/2020/07/226e1592-858f-4c4a-8499-842a2a35808b.jpg" width="200" />
          </a>
          <a href="https://www.indonesiacollege.co.id/wp-content/uploads/2021/03/Taruna-AKPOL.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://www.indonesiacollege.co.id/wp-content/uploads/2021/03/Taruna-AKPOL.jpg" width="200" />
          </a>
          <a href="https://www.indonesiacollege.co.id/wp-content/uploads/2019/11/AKPOL-Akademi-Kepolisian-Jurusan-Program-Studi-Pendaftaran-Biaya-Foto-Seleksi-Tahapan-Tes-810x543-min.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://www.indonesiacollege.co.id/wp-content/uploads/2019/11/AKPOL-Akademi-Kepolisian-Jurusan-Program-Studi-Pendaftaran-Biaya-Foto-Seleksi-Tahapan-Tes-810x543-min.jpg" width="200" />
          </a>
          <a href="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2021/08/e583de38376898ffecaf2b84799a5855.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://disk.mediaindonesia.com/thumbs/1800x1200/news/2021/08/e583de38376898ffecaf2b84799a5855.jpg" width="200" />
          </a>
          <a href="https://patriotmuda.id/wp-content/uploads/2020/07/226e1592-858f-4c4a-8499-842a2a35808b.jpg" class="my-5" data-fancybox="gallery">
            <img src="https://patriotmuda.id/wp-content/uploads/2020/07/226e1592-858f-4c4a-8499-842a2a35808b.jpg" width="200" />
          </a>
        </div>
      </div>
    </section>

@endsection
