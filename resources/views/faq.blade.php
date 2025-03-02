@extends('layouts.layout')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="info-section">
            <div class="container">
                <!-- Content here -->
                <div class="info-banner">
                    <div class="info-header">
                        <h1>Frequently Asked Question (FAQ) </h1>
                        <h5>NB : Klik link pada menu untuk menampilkan jawaban permasalahan</h5>
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
                            <div class="info-card">
                                <input type="radio" name="slide" id="c3">
                                <label for="c3" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">3</div>
                                            <h4>Bagaimana cara mendaftar dan mendapatkan jadwal OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus enim in sit
                                                nesciunt velit dolor, eum rerum quia vitae odit culpa impedit porro. A
                                                repudiandae quia earum quos fugiat voluptas.</p>
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
                                            <h4>Apakah OSPEK dilakukan secara online atau offline?</h4>
                                        </div>
                                        <div class="description">
                                            <p>OSPEK dilaksanakan secara offline di kampus UNIDA Gontor, sesuai dengan
                                                lokasi yang telah ditetapkan oleh panitia. Seluruh peserta diwajibkan hadir
                                                secara langsung untuk mengikuti rangkaian kegiatan yang telah disiapkan.</p>
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
                                            <h4>Apa saja yang perlu dipersiapkan sebelum OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Sebelum Ospek para peserta Harus menyiapkan beberapa berkas-berkas serta
                                                peralatan yang harus di bawa ketika ospek nanti yang telah di tentukan oleh
                                                panitia</p>
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
                                            <h4>Apakah kehadiran dalam OSPEK wajib?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Ya, kehadiran dalam OSPEK wajib karena merupakan bagian penting dalam
                                                mengenal lingkungan kampus, sistem perkuliahan, serta membangun relasi
                                                dengan dosen dan sesama mahasiswa.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div class="info-card">
                                <input type="radio" name="slide" id="c7">
                                <label for="c7" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">7</div>
                                            <h4>Apa konsekuensi jika tidak mengikuti OSPEK?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Konsekuensi dalam kehadiran Ospek,berpengaruh pada kelulusan ospek,jika
                                                peserta belum dinyatakan lulus,maka peserta harus mengulang Ospek di Tahun
                                                Depan</p>
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
                                            <h4>Apakah ada dispensasi bagi yang tidak bisa hadir?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Ya, dispensasi diberikan bagi yang berhalangan hadir, seperti karena sakit
                                                atau keperluan syar'i yang tidak dapat diwakilkan, dengan syarat melapor dan
                                                memberikan bukti yang valid.</p>
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
                                            <h4>Bagaimana jika ada jadwal bentrok dengan kegiatan lain?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Jika ada jadwal yang bentrok, peserta dapat segera mengonfirmasi kepada
                                                panitia OSPEK agar mendapatkan arahan lebih lanjut mengenai solusi atau
                                                penyesuaian yang memungkinkan.</p>
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
                                            <p>Ya, OSPEK memiliki dress code tertentu yang telah ditetapkan oleh panitia.
                                                Ketentuan ini biasanya diumumkan melalui brosur serta disampaikan langsung
                                                oleh panitia untuk memastikan semua peserta mematuhinya.</p>
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
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas perferendis
                                                quo maxime recusandae. Perferendis quo neque voluptatum, dolores magni
                                                eaque, minima molestias animi odio laudantium aut vel quaerat, fuga cumque.
                                            </p>
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
                                            <p>Ya, panitia menyediakan konsumsi selama OSPEK, termasuk bazaar OSPEK yang
                                                tersedia bagi peserta. Selain itu, untuk makan utama, peserta diarahkan
                                                untuk menggunakan fasilitas dapur masing-masing sesuai dengan ketentuan yang
                                                telah ditetapkan.</p>
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
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus enim in sit
                                                nesciunt velit dolor, eum rerum quia vitae odit culpa impedit porro. A
                                                repudiandae quia earum quos fugiat voluptas.</p>
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
                                            <p>Ya, untuk mendapatkan informasi terbaru seputar OSPEK, panitia telah
                                                menyediakan media sosial resmi, seperti akun Instagram @ospek.2025 dan kanal
                                                YouTube OspekSyaheen2025. </p>
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
                                            <h4>Bagaimana cara menghubungi panitia ?</h4>
                                        </div>
                                        <div class="description">
                                            <p>Peserta dapat menghubungi panitia OSPEK melalui beberapa cara, seperti
                                                menghubungi langsung ketua panitia, mengontak panitia yang bertugas, atau
                                                mengirim pesan ke akun Instagram resmi @ospek.2025. Panitia siap membantu
                                                menjawab pertanyaan dan memberikan informasi yang dibutuhkan.</p>
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
