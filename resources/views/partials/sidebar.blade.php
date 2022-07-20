<div class="sidebar">
  <div class="scrollbar-inner sidebar-wrapper">

    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard">
          <i class="fa fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/home*') ? 'active' : '' }}">
        <a href="/dashboard/home/1/edit">
          <i class="
          fas fa-home-user"></i>
          <p>Edit Home</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
        <a href="/dashboard/galeri">
          <i class="
          fas fa-image"></i>
          <p>Gallery</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/about*') ? 'active' : '' }}">
        <a href="/dashboard/about/1/edit">
          <i class="fa-solid fa-clipboard-user"></i>
          <p>About</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/program*') ? 'active' : '' }}">
        <a href="/dashboard/program">
          <i class="fa-solid fa-book"></i>
          <p>Program Pembelajaran</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/pendaftaran*') ? 'active' : '' }}">
        <a href="/dashboard/pendaftaran">
          <i class="fa-solid fa-pen-to-square"></i>
          <p>Pendaftaran</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/testimoni*') ? 'active' : '' }}">
        <a href="/dashboard/testimoni">
          <i class="fa-solid fa-thumbs-up"></i>
          <p>Testimoni</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/artikel*') ? 'active' : '' }}">
        <a href="/dashboard/artikel">
          <i class="fa-solid fa-newspaper"></i>
          <p>Artikel</p>
        </a>
      </li>
      <li class="nav-item{{ Request::is('dashboard/lihat*') ? 'active' : '' }}">
        <a href="/">
          <i class="fa-solid fa-eye"></i>
          <p>Lihat Website</p>
        </a>
      </li>
    </ul>
    <li class="nav-item update-pro">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 bg-dark border-0"><span data-feather="log-out"></span> Logout</button>
      </form>
    </li>
  </div>
</div>