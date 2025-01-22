<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- Custom Css --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="width: 50px; height: auto;">
      </a>
  
      <!-- Button Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#jurusan">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#timeline">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pembayaran">Pembayaran DU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pusat-informasi">Pusat Informasi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  

  <!-- Tempat untuk Konten -->
  @yield('content')


  {{-- script --}}
  <!-- GSAP Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  {{-- Custom Script --}}
  <script src={{ asset('js/home.js') }}></script>
</body>
</html>
  
