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
@include('partials.navbar')
@yield('container')

<section class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="{{asset('../assets/assets/img/logobimbelarya.png')}}" width="100" alt="" />
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
    <script src="https://kit.fontawesome.com/2ac6987f85.js" crossorigin="anonymous"></script>
  </body>
  </html>
