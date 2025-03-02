@extends('layouts.navbar')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="info-section">
            <div class="container">
                <!-- Content here -->
                <div class="info-banner">
                    <div class="info-header">
                        <h1>Info & Pengumuman</h1>
                        <h5>NB : Klik link pada menu untuk menampilkan informasi</h5>
                    </div>
                    <div class="info-cards">
                        <div class="menu-cards-1">
                            <div class="info-card">
                                <input type="radio" name="slide" id="c1">
                                <label for="c1" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">1</div>
                                            <h4>Apa itu OSPEK dan mengapa wajib diikuti?</h4>
                                        </div>
                                        <div class="description">
                                            <p>OSPEK (Orientasi Studi dan Pengenalan Kampus) adalah kegiatan pengenalan
                                                lingkungan kampus bagi mahasiswa baru. OSPEK wajib diikuti karena membantu
                                                mahasiswa beradaptasi dengan sistem perkuliahan, mengenal fasilitas, serta
                                                memahami budaya dan etika akademik di kampus.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c2">
                                <label for="c2" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">2</div>
                                            <h4>Kapan dan di mana OSPEK akan dilaksanakan?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Ospek akan dilaksanakan rentetan acara ospek akan dilaksanakan mulai dari
                                                tanggal 10 syawwal sampai dengan 21 syawwal yang bertempatan dikampus
                                                masing-masing </p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- end section 2 --}}
    </div>
@endsection
