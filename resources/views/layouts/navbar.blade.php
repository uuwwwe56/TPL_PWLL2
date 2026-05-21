<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    
    <!-- Kiri (Brand) -->
    <a class="navbar-brand" href="#">UI</a>

    <!-- Toggle (Mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNavAltMarkup">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Kanan (Menu) -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
          <a class="nav-link active" href="{{ route('dosen') }}">Dosen</a>
        <a class="nav-link active" href="{{ route('mhs') }}">Mahasiswa</a>
        <a class="nav-link active" href="{{ route('matkul') }}">Matkul</a>
        <a class="nav-link active" href="{{ route('jadwal') }}">Jadwal</a>
        <a class="nav-link active" href="{{ route('krs') }}">Krs</a>
      </div>
    </div>

  </div>
</nav>