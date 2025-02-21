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
                        <h1>Timeline Acara</h1>
                        <h5>NB : Klik pada menu untuk menampilkan detail lebih lanjut</h5>
                    </div>
                    <div class="info-cards">
                        <div class="menu-cards-1">
                            <div class="info-card">
                                <input type="radio" name="slide" id="c1">
                                <label for="c1" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">01</div>
                                            <div class="lineup">
                                                <h4>Yudisium Siswa Akhir KMI</h4>
                                                <h4>Selasa | 11 Maret 2025 / 11 April 1446</h4>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Mau tau lebih lanjut tentang UNIDA?</p>
                                            <a href="#" class="link-entry">Pergi Ke Laman WEB</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c2">
                                <label for="c2" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">02</div>
                                            <h4>Kapan dan di mana OSPEK akan dilaksanakan?</h4>
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
                                            <div class="icon">03</div>
                                            <h4>Bagaimana cara mendaftar dan mendapatkan jadwal OSPEK?</h4>
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
                                            <div class="icon">04</div>
                                            <h4>Apakah OSPEK dilakukan secara online atau offline?</h4>
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
                                            <div class="icon">05</div>
                                            <h4>Apa saja yang perlu dipersiapkan sebelum OSPEK?</h4>
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
                                            <div class="icon">06</div>
                                            <h4>Apakah kehadiran dalam OSPEK wajib?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau aktif tapi bingung ikut apa pas di kampus?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="info-card">
                                <input type="radio" name="slide" id="c7">
                                <label for="c7" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">07</div>
                                            <h4>Apa konsekuensi jika tidak mengikuti OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mau tau rentetan kegiatan & acara selama ospek?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c8">
                                <label for="c8" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">08</div>
                                            <h4>Apakah ada dispensasi bagi yang tidak bisa hadir?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Penasaran dengan kegiatan seputar kampus?</p>
                                            <a href="#" class="link-entry">Cek Galeri</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c9">
                                <label for="c9" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">09</div>
                                            <h4>Bagaimana jika ada jadwal bentrok dengan kegiatan lain?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Penasaran dengan para penggerak Ospek Syaaheen?</p>
                                            <a href="#" class="link-entry">Cek Susunan Kepanitiaan</a>
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
                                            <h4>Apakah OSPEK memiliki dress code tertentu?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Cari tautan-tautan penting terkait ospek tahun ini?</p>
                                            <a href="#" class="link-entry">Cek Link Tree</a>
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
                                            <h4>Apa saja kegiatan yang akan dilakukan selama OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Pertanyaan yang sering diajukan? </p>
                                            <a href="#" class="link-entry">Cek FAQ</a>
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
                                            <h4>Apakah panitia menyediakan konsumsi selama OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Informasi lain terkait kegiatan ospek?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c13">
                                <label for="c13" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">13</div>
                                            <h4>Apakah ada tugas yang harus dikerjakan selama OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Informasi lain terkait kegiatan ospek?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c14">
                                <label for="c14" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">14</div>
                                            <h4>Apakah ada media sosial resmi OSPEK yang bisa diikuti?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Informasi lain terkait kegiatan ospek?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="info-card">
                                <input type="radio" name="slide" id="c15">
                                <label for="c15" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">15</div>
                                            <h4>Bagaimana cara menghubungi panitia jika ada pertanyaan lebih lanjut?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Mencari Informasi lain terkait kegiatan ospek?</p>
                                            <a href="#" class="link-entry">Cari tahu lebih lanjut</a>
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