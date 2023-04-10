<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">SPK-DEMO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          {{-- <a class="nav-link" href="/alternatif">Alternatif</a>
          <a class="nav-link" href="/pertanyaan-perbandingan">Pertanyaan Perbandingan</a> --}}
          @auth
          <a class="nav-link" href="/kriteria">Kriteria</a>
          <a class="nav-link" href="/bobot-relatif/hitung">Bobot Relatif</a>
          <a class="nav-link" href="/perbandingan">Perbandingan</a>
          <a class="nav-link" href="/vektor-s">Vektor S</a>
          <a class="nav-link" href="/vektor-v">Vektor V</a>
          <a class="nav-link" href="/profile">Profile</a>
          {{-- @if ($bobot_kriteria && $vektor_s && $vektor_v)
          <div class="d-none">
            <a class="nav-link" href="/kriteria">Kriteria</a>
            <a class="nav-link" href="/bobot-relatif/hitung">Bobot Relatif</a>
            <a class="nav-link" href="/perbandingan">Perbandingan</a>
            <a class="nav-link" href="/vektor-s">Vektor S</a>
            <a class="nav-link" href="/vektor-v">Vektor V</a>
            <a class="nav-link" href="/profile">Profile</a>
          </div>
          @else
            <form action="/logout" method="post">
              @endif --}}
              <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-primary border-0">Logout <span data-feather="log-out"></span></button>
          </form>
            @else
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/daftar-akun">Daftar Akun</a>
          @endauth
        </div>
      </div>
    </div>
</nav>