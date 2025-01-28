@extends('layouts.navbar')

@section('content')
{{-- locomotive scroll --}}
<div data-scroll-container>

  {{-- section 1 --}}
  <section class="home-section-1 d-flex flex-column justify-content-center align-items-center vh-100" id="home-section-1">
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
  <section class="home-section-2">

    <!-- Wave SVG -->
    <svg class="wave-svg" width="100%" height="50%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="intro">
      <path id="wave" d="" fill="#1E453E"/>
    </svg>  

    {{-- Content --}}
    <div class="content" id="home-section-2-content">
      <h1>home section 2</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas alias sit obcaecati mollitia dignissimos, sapiente id consequatur voluptas perferendis consectetur, asperiores saepe doloribus delectus ea exercitationem! Accusamus delectus maxime nam?</p>
    </div>
  </section>
  {{-- end section 2 --}}

</div>
@endsection
