<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSPEK SYAAHEEN 2025</title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('assets/navbar/icon-logo.png') }}">
    {{-- font awasome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Locomotive.js --}}
    @if (Request::is('/'))
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    @endif
    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}?v={{ time() }}">
    {{-- CSS for each page --}}
    @if (Request::is('/'))
        <link rel="stylesheet" href="{{ asset('css/home.css') }}?v={{ time() }}">
    @elseif (Request::is('barang'))
        <link rel="stylesheet" href="{{ asset('css/barang.css') }}?v={{ time() }}">
    @elseif (Request::is('contact'))
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}?v={{ time() }}">
    @elseif (Request::is('jurusan'))
        <link rel="stylesheet" href="{{ asset('css/jurusan.css') }}?v={{ time() }}">
    @elseif (Request::is('pembayaran'))
        <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}?v={{ time() }}">
    @elseif (Request::is('pusatinformasi'))
        <link rel="stylesheet" href="{{ asset('css/pusatinformasi.css') }}?v={{ time() }}">
    @elseif (Request::is('galeri'))
        <link rel="stylesheet" href="{{ asset('css/galeri.css') }}?v={{ time() }}">
    @elseif (Request::is('timeline'))
        <link rel="stylesheet" href="{{ asset('css/timeline.css') }}?v={{ time() }}">
    @elseif (Request::is('faq'))
        <link rel="stylesheet" href="{{ asset('css/faq.css') }}?v={{ time() }}">
    @elseif (Request::is('panitia'))
        <link rel="stylesheet" href="{{ asset('css/panitia.css') }}?v={{ time() }}">
    @elseif (Request::is('pengumuman'))
        <link rel="stylesheet" href="{{ asset('css/pengumuman.css') }}?v={{ time() }}">
    @elseif (Request::is('attribute'))
        <link rel="stylesheet" href="{{ asset('css/attribute.css') }}?v={{ time() }}">
    @elseif (Request::is('ukm'))
        <link rel="stylesheet" href="{{ asset('css/ukm.css') }}?v={{ time() }}">
    @endif

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Yellowtail&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- navbar --}}
    @include('layouts.navbar')

    <!-- Tempat untuk Konten -->
    @yield('content')

    {{-- footer --}}
    @include('layouts.footer')

    {{-- script --}}
    <!-- GSAP Script -->
    @if (Request::is('/'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
        {{-- Locomotive.js --}}
        <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
        <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js"
            crossorigin="anonymous"></script>
        <script nomodule
            src="https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll"
            crossorigin="anonymous"></script>
        {{-- tilt.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    @endif
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- aos --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Custom Script --}}
    @if (Request::is('/'))
        <script src={{ asset(path: 'js/home.js') }}?v={{ time() }}></script>
    @elseif (Request::is('barang'))
        <script src="{{ asset('js/barang.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('contact'))
        <script src="{{ asset('js/contact.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('panitia'))
        <script src="{{ asset('js/panitia.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('attribute'))
        <script src="{{ asset('js/attribute.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('jurusan'))
        <script src="{{ asset('js/jurusan.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('pembayaran'))
        <script src="{{ asset('js/pembayaran.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('pusatinformasi'))
        <script src="{{ asset('js/pusatinformasi.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('faq'))
        <script src="{{ asset('js/faq.js') }}?v={{ time() }}"></script>
    @elseif (Request::is('ukm'))
        <script src="{{ asset('js/ukm.js') }}?v={{ time() }}"></script>
    @endif
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>
