<nav class="navbar navbar-expand-lg nav-custom sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#">
      <img src="{{ asset('img/Vg.png') }}" width="100">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('dashboard') }}">Home</a>
        </li>

        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('blog') }}">Blog</a>
        </li>

        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('promo') }}">Promo</a>
        </li>

        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('produk') }}">Produk</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('buku') }}">Buku</a>
        </li>

        <li class="nav-item px-2">
          <a class="nav-link custom-link" href="{{ url('kontak') }}">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>