@extends('layouts.navbar')

@section('content')
{{-- section 1 --}}
<div class="home-section-1 d-flex flex-column justify-content-center align-items-center vh-100">
  <!-- Bagian Tengah (Tulisan + Logo) -->
  <div class="d-flex align-items-center justify-content-center">
    <!-- Tulisan OSPEK -->
    <h1 id="text-kiri" class="me-4 text-uppercase fw-bold" style="font-size: 10rem;">OSPEK</h1>

    <!-- Gambar -->
    <div class="logo-ospek align-self-center">
      <img id="logo-ospek" src="{{ asset('assets/home/logo_2.png') }}" alt="" 
            class="img-fluid" style="width: 200px; height: auto;">
    </div>

    <!-- Tulisan 2025 -->
    <h1 id="text-kanan" class="ms-4 text-uppercase fw-bold" style="font-size: 10rem;">2 0 2 5</h1>
  </div>
  <!-- Wave SVG (di bawah elemen lainnya) -->
  <svg class="wave-svg" width="100%" height="50%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="intro">
    <path id="wave" d="" fill="#1E453E"/>
  </svg>
</div>
{{-- end section 1 --}}

{{-- section 2 --}}

{{-- end section 2 --}}
@endsection
