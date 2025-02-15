@extends('layouts.navbar')

@section('content')
{{-- locomotive scroll --}}

  {{-- section 1 --}}
  <section class="home-section-1 d-flex flex-column justify-content-center align-items-center vh-100" id="home-section-1" data-scroll-container>
    <!-- Bagian Tengah (Tulisan + Logo) -->
    <div class="tulisan d-flex align-items-center justify-content-center">
      <!-- Tulisan OSPEK -->
      <h1 id="text-kiri" class="me-4 text-uppercase fw-bold">OSPEK</h1>

      <!-- Gambar -->
      <img id="logo-ospek" src="{{ asset('assets/home/logo_2.png') }}" alt="" 
              class="img-fluid">

      <!-- Tulisan 2025 -->
      <h1 id="text-kanan" class="ms-4 text-uppercase fw-bold">2 0 2 5</h1>
    </div>
  </section>
  {{-- end section 1 --}}

  {{-- section 2 --}}
  <section class="home-section-2" data-scroll-container>
    <!-- Wave SVG -->
    <svg class="wave-svg" width="100%" height="50%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="intro">
        <path id="wave" d="" fill="#1E453E"/>
    </svg>  

    {{-- Content --}}
    <div class="content" id="home-section-2-content">
        <h2 class="d-flex justify-content-center">Pengenalan</h2>
        <h1 class="d-flex justify-content-center text-animation" data-speed="0.5">OSPEK SYAAHEEN 2025</h1>
        <div class="col-md-8 col-lg-6 mx-auto mt-5">
            <p class="text-center fs-5">
                Ospek <span class="fw-bold">SYAAHEEN</span> adalah Orientasi mahasiswa baru dikenal juga dengan istilah Orientasi Studi dan pengenalan Kampus atau OSPEK. Kegiatan ini bertujuan untuk mengenal dan memahami lingkungan kampus sebagai suatu lingkungan akademis serta memahami mekanisme yang berlaku didalamnya.
            </p>
        </div>
    </div>
  </section>
  {{-- end section 2 --}}
  
  {{-- section 3 --}}
  <section class="home-section-3" id="home-section-3" data-scroll-container>
    <svg class="wave-svg-2" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="intro-2">
      <path id="wave-2" d="" fill="#317F80"/>
    </svg>  
    
    <div>
      <h2 class="d-flex justify-content-center">Filosofi Kata</h2>
      <h1 class="d-flex justify-content-center">SYAAHEEN</h1>
      <div class="col-sm-10 col-md-8 col-lg-10 mx-auto mt-5">
        <p class="text-center fs-5">
          Syaaheen (شَاهِيْنٌ) yang berarti burung elang dalam Bahasa Arab. Nama ini melambangkan sifat elang yang memiliki pandangan tajam, strategi matang, dan kemampuan beradaptasi dengan alam. Syaaheen diharapkan menjadi simbol mahasiswa tangguh yang berdedikasi, mengedepankan ketekunan dan kegigihan dalam akademik. 
        </p>

        <p class="text-center fs-5">
          Ketika dunia mulai hancur, dekadensi moral yang terus merajalela, sehingga memicu rusaknya nilai-nilai kehidupan, kebudayaan global menggulung segala yang ada, peradaban mulai kehilangan arah. Manusia tak lagi berpegang pada prinsip-prinsip dasar kemanusiaan; keadilan, kejujuran, dan empati tergerus oleh keserakahan dan egoisme. Nilai-nilai tradisional yang pernah menjadi fondasi komunitas dan budaya perlahan terkikis, digantikan oleh individualisme ekstrem dan materialisme yang mendominasi. Dalam kekacauan ini, harapan akan masa depan tampak memudar, sementara tatanan sosial yang rapuh berada di ambang kehancuran total.
        </p>
    </div>
    </div>
  </section>
  {{-- end section 3 --}}

@endsection
