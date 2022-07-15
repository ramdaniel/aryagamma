<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <link rel="stylesheet" href=" {{ asset('../assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <title>Arya Gamma Academy</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('../assets/assets/img/logobimbelarya.png')}}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-transparent pt-3 pb-3">
      <div class="container">
        <a class="navbar-brand" href="#hero">
          <img src="{{ asset('../assets/assets/img/logobimbelarya.png')}}" width="60" alt="" />
          <span class="companyname">Arya Gamma Academy</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto gap-3">
            <a class="nav-link active" aria-current="page" href="#hero">Home</a>
            <a class="nav-link" href="#program">Profil</a>
            <a class="nav-link" href="#program">Program Pembelajaran</a>
            <a class="nav-link" href="#galeri">Galeri</a>
            <a class="nav-link" href="#testimoni">Testimoni</a>
            <a class="nav-link" href="#">Artikel</a>
            <a class="nav-link" href="#">Kontak</a>
          </div>
        </div>
      </div>
    </nav>

    <section class="hero mt-5" id="hero">
      <div class="container">
        <div class="row pt-5 d-flex flex-row">
          <div class="col-md-6">
            <h1 class="mt-4 mb-4">Bimbel Persiapan Kedinasan, AKPOL dan AKMIL</h1>
            <p class="lh-lg">Bimbel dengan metode pembelajaran terbaik serta mentor terlatih dan professional.</p>

            <div class="button-hero mt-5">
              <a href="" class="btn-hero py-3 px-5 me-3 rounded-5 text-dark fw-bold">Daftar Sekarang</a>
            </div>
          </div>
          <!-- <div class="col-md-6">
            <div class="card rounded-5 m-auto">
              <img src="assets/img/keyboard1.png" width="300px" class="m-auto" alt="" />
            </div>
          </div> -->
          <img src="assets/img/kedinasan.png" class="m-auto" alt="" />
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

    <section class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="assets/img/logobimbelarya.png" width="100" alt="" />
            <p class="fw-bold text-dark mt-4">Bimbel dengan metode pembelajaran terbaik serta mentor terlatih dan professional</p>
          </div>
          <div class="col"></div>
          <div class="col-md-2">
            <h5 class="mb-3">Company</h5>
            <a href=""><span>About Us</span></a>
            <a href=""><span>Term of Use</span></a>
            <a href=""><span>Privacy & Policy</span></a>
          </div>
          <div class="col-md-2">
            <h5 class="mb-3">Support</h5>
            <a href=""><span>Refund Policy</span></a>
            <a href=""><span>Unlock Rewards</span></a>
          </div>
          <div class="col-md-2">
            <h5 class="mb-3">Connect</h5>
            <a href=""><span>agm@academy.id</span></a>
            <a href=""><span>@agmacademy.id</span></a>
            <a href=""><span>0852632820</span></a>
          </div>
        </div>
      </div>
    </section>

    <script>
      // Initialise Carousel
      const mainCarousel = new Carousel(document.querySelector('#mainCarousel'), {
        infinite: false,
        Navigation: false,
      });

      // Initialise Fancybox
      Fancybox.bind('[data-fancybox="gallery"]', {
        Carousel: {
          on: {
            change: (carousel, to) => {
              // Sync Carousel slide
              // ===
              const $el = Fancybox.getInstance().getSlide().$trigger.closest('.carousel__slide');

              const slide = mainCarousel.slides.find((slide) => {
                return slide.$el === $el;
              });

              mainCarousel.slideTo(slide.index, {
                friction: 0,
              });
            },
          },
        },
      });
    </script>

    <script type="module">
      import { Fancybox } from 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.esm.js';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
