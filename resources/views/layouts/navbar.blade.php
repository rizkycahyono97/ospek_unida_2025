<nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
    <div class="container">

        <!-- Button Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-center w-100 rounded-pill text-light gap-5 fs-6 ">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('jurusan') }}">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('timeline') }}">Timeline</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('pembayaran') }}">Pembayaran DU</a>
                </li>
                <!-- Logo -->
                <a class="navbar-brand mx-3" href="{{ route('index') }}">
                    <img src="{{ asset('assets/navbar/icon-logo.png') }}" alt="Logo" style="width: 24px; height: auto;">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('contact') }}">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('pusatinformasi') }}">Pusat Informasi</a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>


