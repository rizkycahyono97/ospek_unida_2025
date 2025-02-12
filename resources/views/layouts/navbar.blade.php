<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- Locomotive.js --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
  {{-- Custom Css --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pusatinformasi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Yellowtail&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/navbar/icon-logo.png') }}" alt="Logo" style="width: 24px; height: auto;">
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
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jurusan') }}">Jurusan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('timeline') }}">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pembayaran') }}">Pembayaran DU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Kontak Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pusatinformasi') }}">Pusat Informasi</a>
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
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
  {{-- Locomotove.js --}}
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  {{-- Custom Script --}}
  <script src={{ asset('js/home.js') }}></script>
  <script src={{ asset('js/contact.js') }}></script>
  <script src={{ asset('js/jurusan.js') }}></script>
  <script src={{ asset('js/pembayaran.js') }}></script>
  <script src={{ asset('js/pusatinformasi.js') }}></script>
</body>

</html>