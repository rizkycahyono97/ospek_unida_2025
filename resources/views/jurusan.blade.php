@extends('layouts.navbar')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="fakultas-section">

            <div class="container">
                <!-- Content here -->
                <div class="fakultas-banner">
                    <div class="fakultas-header">
                        <h1>Fakultas </h1>
                        <h2>Universitas Darussalam</h2>
                    </div>
                    <div class="slider" style="--quantity: 8">
                        <div class="item" style="--position: 1">
                            <h4>Fakultas Sains & Teknologi
                                <!-- <img src="{{ asset('assets/home/logo_2.png') }}" alt=""></h4> -->
                                <p>Mengintegrasikan inovasi ilmiah dengan nilai Islam, mencetak ahli teknologi yang cerdas,
                                    dan siap
                                    memberi dampak positif bagi masyarakat</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 2">
                            <h4>Fakultas Ushuluddin <p>Mencetak pemikir teologis yang mendalam, berakhlak mulia, serta
                                    berkemampuan untuk memperkuat pondasi keimanan dan menjaga keharmonisan
                                    umat nilai-nilai Islam</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 3">
                            <h4>Fakultas Ekonomi & Manajemen <p>Mencetak pemimpin bisnis yang cerdas, visioner dan
                                    berintegritas
                                    dengan memadukan ilmu ekonomi & manajemen dengan nilai Islam</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 4">
                            <h4>Fakultas Humaniora <p>Memadukan ilmu humaniora dengan nilai Islam, mencetak pemikir kritis
                                    dan berakhlak mulia yang mampu memahami dan
                                    membangun peradaban</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 5">
                            <h4>Fakultas Tarbiyah <p>Mengintegrasikan ilmu pendidikan dengan nilai Islam, mencetak pendidik
                                    yang
                                    berkualitas, berakhlak mulia, dan mampu membimbing generasi masa depan</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 6">
                            <h4>Fakultas Syariah <p>
                                    Memadukan ilmu hukum syariah dengan nilai Islam, mencetak ahli hukum yang adil,
                                    berintegritas, dan mampu menegakkan keadilan dalam masyarakat
                                </p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 7">
                            <h4>Fakultas Kesehatan <p>Membentuk tenaga kesehatan profesional dan berakhlak mulia berasaskan
                                    nilai Islam, serta memberikan pelayanan
                                    terbaik dengan menjunjung tinggi etika dan moral</p>
                            </h4>
                        </div>
                        <div class="item" style="--position: 8">
                            <h4>Fakultas Kedokteran <p>Mencetak dokter yang tidak hanya kompeten dalam bidang medis, tetapi
                                    juga berakhlak mulia, peduli terhadap pasien, dan
                                    mampu mengedepankan prinsip moral dalam setiap tindakan</p>
                            </h4>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- end section 2 --}}

        <section class="prodi-section">
            <div class="container">
                <div class="prodi-banner">
                    <div class="prodi-header">
                        <h1>Program Studi </h1>
                        <h2>Universitas Darussalam</h2>
                    </div>
                    <div class="content-prodi">
                        <div class="prodi-cards">
                            <div class="prodi-card">
                                <h3 class="number">01.</h3>
                                <h3>Fakultas Tarbiyah</h3>
                                <br>
                                <br>
                                <p>Pendidikan Agama Islam</p>
                                <p>Pendidikan Bahasa Arab</p>
                                <p>Tadris Bahasa Inggris</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">02.</h3>
                                <h3>Fakultas Syariah</h3>
                                <br>
                                <br>
                                <p>Perbandingan Madzab</p>
                                <p>Hukum Ekonomi Syariah</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">03.</h3>
                                <h3>Fakultas Humaniora</h3>
                                <br>
                                <br>
                                <p>Hubungan Internasional</p>
                                <p>Ilmu Komunikasi</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">04.</h3>
                                <h3>Fakultas Ekonomi & Manajemen</h3>
                                <br>
                                <p>Ekonomi Islam</p>
                                <p>Manajemen</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">05.</h3>
                                <h3>Fakultas Ushuluddin</h3>
                                <br>
                                <br>
                                <p>Studi Agama-Agama</p>
                                <p>Aqidah & Filsafat Islam</p>
                                <p>Ilmu Al-Quran & Tafsir</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">06.</h3>
                                <h3>Fakultas Sains & Teknologi</h3>
                                <br>
                                <p>Teknik Informatika</p>
                                <p>Teknologi Industri Pertanian</p>
                                <p>Agroteknologi</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">07.</h3>
                                <h3>Fakultas Kesehatan</h3>
                                <br>
                                <br>
                                <p>Farmasi</p>
                                <p>Ilmu Gizi</p>
                                <p>Kesehatan & Keselamatan Kerja</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">08.</h3>
                                <h3>Fakultas Kedokteran</h3>
                                <br>
                                <br>
                                <p>Kedokteran Program Sarjana</p>
                                <p>Pendidikan Profesi Dokter</p>
                            </div>
                            <div class="prodi-card">
                                <h3 class="number">09.</h3>
                                <h3>Coming Soon</h3>
                                <br>
                                <br>
                                <p>...</p>
                            </div>
                        </div>
                        <div class="prodi-cards-2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection