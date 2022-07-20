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
          <a class="nav-link {{ request ()->segment(1) == '' ? 'active' : '' }}"  href="/">Home</a>
          <a class="nav-link {{ request ()->segment(1) == 'about' ? 'active' : '' }}"  href="/about">About</a>
          <a class="nav-link {{ request ()->segment(1) == 'program-pembelajaran' ? 'active' : '' }}" href="/program-pembelajaran">Program Pembelajaran</a>
          <a class="nav-link " href="/#galeri">Galeri</a>
          <a class="nav-link " href="/#testimoni">Testimoni</a>
          <a class="nav-link {{ request ()->segment(1) == 'artikel' ? 'active' : '' }}" href="/artikel">Artikel</a>
          <a class="btn btn-warning rounded-3 px-4" href="/pendaftaran" target="_blank" >Daftar</a>
        </div>
      </div>
    </div>
  </nav>
