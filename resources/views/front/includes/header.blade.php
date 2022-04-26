<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- <h1 class="logo"><a href="index.html">Multi</a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/" class="logo"><img src="/img/logo.png" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#">HOME</a></li>
        <li><a class="nav-link scrollto" href="#">PROFIL</a></li>
        <li><a class="nav-link scrollto" href="#">PUBLIKASI</a></li>
        <li><a class="nav-link scrollto " href="#">POTENSI</a></li>
        <li><a class="nav-link scrollto" href="#">STATISTIK</a></li>
        <li class="dropdown"><a href="#"><span>KATEGORI</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @foreach ($kategori as $row)
              <li><a href="#">{{ $row->nama_kategori }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#">DOWNLOAD</a></li>
        <li><a class="getstarted scrollto" href="#">KONTAK</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>