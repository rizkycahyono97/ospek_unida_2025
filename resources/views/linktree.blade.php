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
                        <h1>Pusat Link & Akses Cepat</h1>
                        <h5>NB : Klik link pada menu untuk mengunjungi halaman</h5>
                    </div>
                    <div class="info-cards">
                        <div class="menu-cards-1">
                            <div class="info-card">
                                <input type="radio" name="slide" id="c1">
                                <label for="c1" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">1</div>
                                            <h4>Profil Lengkap UNIDA</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau tau lebih lanjut tentang UNIDA?</p>
                                            <a href="https://unida.gontor.ac.id/" target="_blank" class="link-entry">Pergi
                                                Ke Laman WEB</a>
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
                                            <h4>Perlengkapan yang Harus Dibawa</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau masuk UNIDA tapi bingung harus bawa apa?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c3">
                                <label for="c3" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">3</div>
                                            <h4>Seragam & Outfit UNIDA</h4>
                                        </div>
                                        <div class="description">
                                            <p>Bingung baju kesehariannya gimana?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c4">
                                <label for="c4" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">4</div>
                                            <h4>Informasi Pembayaran</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari informasi lengkap terkait Pembayaran?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c5">
                                <label for="c5" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">5</div>
                                            <h4>Kegiatan & Organisasi Mahasiswa</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau aktif tapi bingung ikut apa pas di kampus?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c6">
                                <label for="c6" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">6</div>
                                            <h4>Kegiatan & Organisasi Mahasiswi</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau aktif tapi bingung ikut apa pas di kampus?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="menu-cards-2">
                            <div class="info-card">
                                <input type="radio" name="slide" id="c7">
                                <label for="c7" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">7</div>
                                            <h4>Jadwal Acara & Kegiatan</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau tau rentetan kegiatan & acara selama ospek?</p>
                                            <a href="{{ route('timeline') }}" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c8">
                                <label for="c8" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">8</div>
                                            <h4>Dokumentasi & Galeri</h4>
                                        </div>
                                        <div class="description">
                                            <p>Penasaran dengan kegiatan seputar kampus?</p>
                                            <a href="{{ route('galeri') }}" class="link-entry">Cek Galeri</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c9">
                                <label for="c9" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">9</div>
                                            <h4>Susunan Kepanitiaan</h4>
                                        </div>
                                        <div class="description">
                                            <p>Penasaran dengan para penggerak Ospek Syaaheen?</p>
                                            <a href="{{ route('panitia') }}" class="link-entry">Lihat Susunan
                                                Kepanitiaan</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c10">
                                <label for="c10" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">10</div>
                                            <h4>Pusat Link & Akses Cepat</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari link penting terkait ospek tahun ini?</p>
                                            <a href="{{ route('linktree') }}" class="link-entry">Cek Link Tree</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c11">
                                <label for="c11" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">11</div>
                                            <h4>FAQ (Pertanyaan Umum)</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Pertanyaan yang sering diajukan? </p>
                                            <a href="{{ route('faq') }}" class="link-entry">Cek FAQ</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c12">
                                <label for="c12" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">12</div>
                                            <h4>Info & Pengumuman</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Informasi lain terkait kegiatan ospek?</p>
                                            <a href="{{ route('pengumuman') }}" class="link-entry">Cari tahu lebih
                                                lanjut</a>
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
