<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
    <div class="container justify-content-center">

        <!-- Tombol Toggle untuk Mobile -->
        <button class="navbar-toggler mb-4" id="mobileSidebarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Utama (Desktop) -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-center w-100 rounded-pill text-light gap-5 fs-6 ">
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('jurusan') }}">Jurusan</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('timeline') }}">Timeline</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('pembayaran') }}">Pembayaran DU</a></li>
                <!-- Logo -->
                <a class="navbar-brand mx-3" href="{{ route('index') }}">
                    <img src="{{ asset('assets/navbar/white-logo.png') }}" alt="Logo" style="width: 24px; height: auto;">
                </a>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('faq') }}">FAQ</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('contact.form') }}">Kontak Kami</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="{{ route('pusatinformasi') }}">Pusat Informasi</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Overlay untuk efek gelap -->
<div id="overlay" class="overlay"></div>

<!-- Sidebar Menu (Mobile) -->
<div id="mobileNavMenu" class="mobile-sidebar">

    <!-- Logo dan tombol tutup -->
    <div class="sidebar-header mb-5 pb-2 border-bottom d-flex justify-content-between align-items-center">
        <a href="{{ route('index') }}">
            <img src="{{ asset('assets/navbar/BESIDE MAIN EFFECT.png') }}" alt="Logo" class="sidebar-logo" style="height: 80px; width: auto">
        </a>
        <button id="closeSidebar" class="close-btn ps-5">&times;</button>
    </div>


    <div class="">
        <ul class="">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('jurusan') }}">Jurusan</a></li>
            <li><a href="{{ route('timeline') }}">Timeline</a></li>
            <li><a href="{{ route('pembayaran') }}">Pembayaran DU</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('contact.form') }}">Kontak Kami</a></li>
            <li><a href="{{ route('pusatinformasi') }}">Pusat Informasi</a></li>
        </ul>
    </div>
</div>
