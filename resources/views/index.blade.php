@extends('layouts.layout')

@section('content')

  {{-- section 1 --}}
  <section class="home-section-1 d-flex justify-content-center align-items-center vh-100 position-relative overflow-hidden w-100 min-vh-100" id="home-section-1">
    
    <!-- Sayap Kiri -->
    <div class="sayap-kiri position-absolute d-flex align-items-center" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1500">
        <img src="{{ asset('assets/home/sayap-kiri.png') }}" alt="sayap kiri">
    </div>

    <!-- Bagian Tengah (Tulisan + Logo) -->
    <div class="tulisan d-flex align-items-center justify-content-center text-center">
      <h1 id="text-kiri" class="me-4 text-uppercase fw-bold">OSPEK</h1>

      <img id="logo-ospek" src="{{ asset('assets/home/logo_2.png') }}" alt="Logo OSPEK" class="img-fluid">

      <h1 id="text-kanan" class="text-tahun ms-4 text-uppercase fw-bold">2 0 2 5</h1>
    </div>

    <!-- Sayap Kanan -->
    <div class="sayap-kanan d-flex position-absolute align-items-center" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="1500">
        <img src="{{ asset('assets/home/sayap-kanan.png') }}" alt="sayap kanan">
    </div>

  </section>
  {{-- end section 1 --}}

  {{-- section 2 --}}
  <section class="home-section-2 d-flex flex-column justify-content-center align-items-center text-center pb-5 position-relative w-100 min-vh-100 " id="home-section-2">

    {{-- pengenalan-ospek --}}
    <div class="pengenalan-ospek d-flex flex-column align-items-center text-center">
      <div class="home-section-2-judul mt-5">
        <h1 class="fw-bold">Pengenalan <br> Ospek SYAAHEEN 2025</h1>
      </div>
      <div class="home-section-2-text col-md-8 col-lg-6 mt-3">
        <p class="fs-5">Ospek SYAAHEEN adalah Orientasi mahasiswa baru dikenal juga dengan istilah Orientasi Studi dan pengenalan Kampus atau OSPEK. Kegiatan ini bertujuan untuk mengenal dan memahami lingkungan kampus sebagai suatu lingkungan akademis serta memahami mekanisme yang berlaku didalamnya.</p>
      </div>
    </div>

    {{-- filosofi kata --}}
    <div class="filosofi-kata d-flex flex-column align-items-center text-center">
      <div class="home-section-2-judul mt-5"> 
        <h1 class="fw-bold">Filosofi Kata <br> SYAAHEEN</h1>
      </div>
      <div class="home-section-2-text col-md-8 col-lg-6 mt-3">
        <p class="fs-5">Syaaheen (شَاهِيْنٌ) yang berarti burung elang dalam Bahasa Arab. Nama ini melambangkan sifat elang yang memiliki pandangan tajam, strategi matang, dan kemampuan beradaptasi dengan alam. Syaaheen diharapkan menjadi simbol mahasiswa tangguh yang berdedikasi, mengedepankan ketekunan dan kegigihan dalam akademik.
        </p>
        <p class="fs-5">
          Ketika dunia mulai hancur, dekadensi moral yang terus merajalela, sehingga memicu rusaknya nilai-nilai kehidupan, kebudayaan global menggulung segala yang ada, peradaban mulai kehilangan arah. Manusia tak lagi berpegang pada prinsip-prinsip dasar kemanusiaan; keadilan, kejujuran, dan empati tergerus oleh keserakahan dan egoisme. Nilai-nilai tradisional yang pernah menjadi fondasi komunitas dan budaya perlahan terkikis, digantikan oleh individualisme ekstrem dan materialisme yang mendominasi. Dalam kekacauan ini, harapan akan masa depan tampak memudar, sementara tatanan sosial yang rapuh berada di ambang kehancuran total.
        </p>
      </div>
    </div>

  </section>
  {{-- section 2 end --}}

  {{-- section 3 --}}
  <section class="home-section-3" id="home-section-3">

    {{-- batas --}}
    <div class="custom-shape-divider-top-1739805712">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>

    <div class="logo-scroll-container d-flex">
      <section class="logo-section justify-content-center d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-4 text-center scroll-img">
                    <img src="{{ asset('assets/home/logo-ospek-2025.png') }}" alt="logo ospek" class="img-fluid img-fluid-ospek">
                </div>
                <!-- Teks di kanan -->
                <div class="col-md-8 scroll-text">
                    <h1>REVEAL THE</h1>
                    <h1>FUTURE OF STYLE</h1>
                    <p>SYAAHEEN LOGO PHILOSOPHY</p>
                </div>
            </div>
        </div>
      </section>
    

      <section class="logo-section justify-content-center text-dark d-flex align-items-center panel">
        <div class="container">
          <div class="row align-items-center">
              <!-- Gambar di kiri -->
              <div class="col-md-6 text-center position-relative">
                  <div class="logo-container d-flex flex-column align-items-center">
                      <img src="{{ asset('assets/home/logo-sayap.png') }}" alt="Logo 2" class="logo" class="logo tilt-effect" data-tilt data-tilt-max="70" data-tilt-speed="50" data-tilt-glare="false">
                      <img src="{{ asset('assets/home/tatakan.png') }}" alt="tatakan" class="tatakan">
                  </div>
              </div>
              <!-- Teks di kanan -->
              <div class="col-md-6 logo-text">
                  <h1>Enam Rukun Iman</h1>
                  <p>Rukun iman mengajarkan landasan keimanan yang menjadi pondasi utama dalam pembentukan karakter mahasiswa. Sebagai inti dari kepercayaan Islam, Rukun Iman menanamkan nilai-nilai keyakinan, kesadaran spiritual, tanggung jawab, dan penerimaan terhadap takdir.</p>
                  <p>Harapannya dapat menciptakan kegiatan yang dapat mengarahkan mahasiswa untuk memahami pentingnya keikhlasan, disiplin, dan kebersamaan, sekaligus memotivasi mereka untuk menjunjung tinggi etika, mengembangkan ilmu pengetahuan, dan menghadapi tantangan dengan visi misinya.</p>
              </div>
          </div>
        </div>
      </section>
    

      <section class="logo-section justify-content-center text-dark d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-6 text-center position-relative">
                    <div class="logo-container d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/home/logo-pangkal-2.png') }}" alt="Logo 2" class="logo" class="logo tilt-effect" data-tilt data-tilt-max="70" data-tilt-speed="50" data-tilt-glare="false">
                        <img src="{{ asset('assets/home/tatakan.png') }}" alt="tatakan" class="tatakan">
                    </div>
                </div>
                <!-- Teks di kanan -->
                <div class="col-md-6 logo-text">
                    <h1>Empat Pangkal Sayap</h1>
                    <p>Melambangkan 4 motto PMDG yang berbunyi: berbudi tinggi, berbadan sehat, berpengetahuan luas, dan berpikiran bebas, menekankan bahwa keseimbangan antara akhlak, kesehatan, ilmu, dan kebebasan berpikir adalah kunci untuk menggapai kehidupan yang sukses dan bermakna, seperti burung yang dapat terbang tinggi dengan kedua sayapnya yang kuat dan seimbang.</p>
                </div>
            </div>
        </div>
      </section>

      <section class="logo-section justify-content-center text-dark d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-6 text-center position-relative">
                    <div class="logo-container d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/home/logo-pena.png') }}" alt="Logo 2" class="logo" class="logo tilt-effect" data-tilt data-tilt-max="70" data-tilt-speed="50" data-tilt-glare="false">
                        <img src="{{ asset('assets/home/tatakan.png') }}" alt="tatakan" class="tatakan">
                    </div>
                </div>
                <!-- Teks di kanan -->
                <div class="col-md-6 logo-text">
                    <h1>Pena Bulu Yang Berbentuk Kobaran Api</h1>
                    <p>Pena Bulu berbentuk kobaran api dan Inisial “S”, melambangkan singkatan dari SYAAHEEN dan semangat yang membara, kekuatan intelektual, dan inspirasi yang tak pernah padam. Api mencerminkan energi, pencerahan, dan transformasi, sedangkan pena adalah simbol pengetahuan, tulisan, dan perjuangan melalui ilmu.</p>
                    <p>
                      Nama "Syaaheen", yang berarti elang atau burung yang tangguh, merepresentasikan visi yang tajam, keberanian, dan kemampuan untuk mencapai ketinggian tertinggi. Dikaitkan dengan pena berbentuk kobaran api melambangkan semangat elang yang gigih, di mana setiap tulisan dan gagasan yang dihasilkan mampu menembus batas, menyulut perubahan, dan menerangi jalan bagi orang lain.
                    </p>
                </div>
            </div>
        </div>
      </section>

      <section class="logo-section justify-content-center text-dark d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-6 text-center position-relative">
                    <div class="logo-container d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/home/logo-menara.png') }}" alt="Logo 2" class="logo" class="logo tilt-effect" data-tilt data-tilt-max="70" data-tilt-speed="50" data-tilt-glare="false">
                        <img src="{{ asset('assets/home/tatakan.png') }}" alt="tatakan" class="tatakan">
                    </div>
                </div>
                <!-- Teks di kanan -->
                <div class="col-md-6 logo-text">
                    <h1>Menara Gontor</h1>
                    <p>Menara Gontor melambangkan cita-cita tinggi, wawasan luas, dan keteguhan prinsip yang menjadi nilai dasar Pondok Modern Darussalam Gontor. Ketinggiannya menggambarkan visi besar untuk mencetak generasi yang berpikir global tanpa meninggalkan akar Islam. Keteguhannya mencerminkan konsistensi dalam menjalankan prinsip, sebagaimana pesan K.H. Imam Zarkasyi: “Gontor berdiri karena cita-cita, hidup karena perjuangan, dan kekal karena keikhlasan.” Juga dapat menjadi suatu symbol kebesaran PMDG.</p>
                </div>
            </div>
        </div>
      </section>

      <section class="logo-section justify-content-center text-dark d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-6 text-center position-relative">
                    <div class="logo-container d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/home/logo-menara.png') }}" alt="Logo 2" class="logo" class="logo tilt-effect" data-tilt data-tilt-max="70" data-tilt-speed="50" data-tilt-glare="false">
                        <img src="{{ asset('assets/home/tatakan.png') }}" alt="tatakan" class="tatakan">
                    </div>
                </div>
                <!-- Teks di kanan -->
                <div class="col-md-6 logo-text">
                    <h1>Mencetak Generasi Solutif,</h1> <br>
                    <h1>Membangun ide-ide Inovatif,</h1> <br>
                    <h1>Mencapai Kemajuan Progresi.</h1>
                </div>
            </div>
        </div>
      </section>
    </div>    

    <div class="custom-shape-divider-bottom-1739863208">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
  </section>
  {{-- end section 3 --}}

  {{-- section 4 --}}
  <section class="home-section-4 justify-content-center align-items-center pb-5" id="home-section-4">

    <div class="container text-center py-3">
      <!-- UNIDA -->
      <div class="text-container" data-aos="zoom-in">
        <h1 class="fw-bold">UNIVERSITAS <br> DARUSSALAM GONTOR</h1>
        <img src="{{ asset('assets/home/unida-logo.png') }}" alt="Universitas Darussalam Gontor" class="img-fluid pt-2">
        <p class="mt-3">
          <span class="text-primary fw-bold">UNIDA GONTOR</span> merupakan perguruan tinggi waqaf yang berada di bawah naungan Pondok Modern Darussalam Gontor. Oleh sebab itu, dalam melaksanakan Tri Dharmanya, UNIDA Gontor mempertahankan visi, misi, dan jiwa pesantren.
        </p>
        <a href="https://unida.gontor.ac.id" class="mt-3">
          <button class="cta mt-3">
            <span>Kunjungi Website UNIDA GONTOR</span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
          </button>        
        </a>
      </div>
    
      <!-- PMB -->
      <div class="text-container mt-4">
        <h1 class="fw-bold" data-aos-once="false">PENERIMAAN <br> MAHASISWA BARU</h1>
        <img src="{{ asset('assets/home/pmb-logo-2.png') }}" alt="pmb" class="img-fluid pt-2">
        <p class="mt-3">
          <span class="text-primary fw-bold">"Panitia Penerimaan Mahasiswa Baru"</span> atau "PMB" adalah tim yang menangani proses penerimaan siswa baru. Mereka menilai aplikasi, mengatur ujian masuk, dan mendata mahasiswa baru untuk keperluan administratif dan akademis.
        </p>
        <a href="https://unida.gontor.ac.id/admission/">
          <button class="cta mt-3">
            <span>Kunjungi Website pmb</span>
            <svg width="15px" height="10px" viewBox="0 0 13 10">
              <path d="M1,5 L11,5"></path>
              <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
          </button>        
        </a>
      </div>
    </div>
  </section>

@endsection
