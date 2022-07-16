<div class="sidebar">
  <div class="scrollbar-inner sidebar-wrapper">

    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="index.html">
          <i class="fa fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/home*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="
          fas fa-home-user"></i>
          <p>Edit Home</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="
          fas fa-image"></i>
          <p>Gallery</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/profil*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-clipboard-user"></i>
          <p>Profil</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('dashboard/program*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-book"></i>
          <p>Program Pembelajaran</p>
        </a>
      </li>
      <li class="nav-item{{ Request::is('dashboard/pendaftar*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-pen-to-square"></i>
          <p>Pendaftar</p>
        </a>
      </li>
      <li class="nav-item{{ Request::is('dashboard/testimoni*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-thumbs-up"></i>
          <p>Testimoni</p>
        </a>
      </li>
      <li class="nav-item{{ Request::is('dashboard/artikel*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-newspaper"></i>
          <p>Artikel</p>
        </a>
      </li>
      <li class="nav-item{{ Request::is('dashboard/lihat*') ? 'active' : '' }}">
        <a href="components.html">
          <i class="fa-solid fa-eye"></i>
          <p>Lihat Website</p>
        </a>
      </li>
    </ul>
    <li class="nav-item update-pro">
      <button  data-toggle="modal" data-target="#modalUpdate">
        <i class="fas fa-arrow-right-from-bracket"></i>
        <p>Logout</p>
      </button>
    </li>
  </div>
</div>