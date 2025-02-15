<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- icon --}}
  <link rel="icon" href="{{ asset('assets/navbar/icon-logo.png') }}">
  {{-- bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- Locomotive.js --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
  {{-- Custom Css --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/pusatinformasi.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/timeline.css') }}?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}?v={{ time() }}">
  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144274538-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-144274538-1');
  </script>
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
  <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js"
    crossorigin="anonymous"></script>
  <script nomodule
    src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll"
    crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  {{-- Jquery--}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- Custom Script --}}
  <script src={{ asset('js/home.js') }}?v={{ time() }}></script>
  <script src={{ asset('js/contact.js') }}?v={{ time() }}></script>
  <script src={{ asset('js/jurusan.js') }}?v={{ time() }}></script>
  <script src={{ asset('js/pembayaran.js') }}?v={{ time() }}></script>
  <script src={{ asset('js/pusatinformasi.js') }}?v={{ time() }}></script>
  <script src={{ asset('js/home.js') }}?v={{ time() }}></script>
</body>

</html>