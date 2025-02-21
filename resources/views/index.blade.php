@extends('layouts.navbar')

@section('content')
{{-- locomotive scroll --}}

  {{-- section 1 --}}
  <section class="home-section-1 d-flex flex-column justify-content-center align-items-center vh-100" id="home-section-1" data-scroll-container>
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
        <h2 class="d-flex justify-content-center">Pengenalan</h2>
        <h1 class="d-flex justify-content-center text-animation" data-speed="0.5">OSPEK SYAAHEEN 2025</h1>
        <div class="col-md-8 col-lg-6 mx-auto mt-5">
            <p class="text-center fs-5">
                Ospek <span class="fw-bold">SYAAHEEN</span> adalah Orientasi mahasiswa baru dikenal juga dengan istilah Orientasi Studi dan pengenalan Kampus atau OSPEK. Kegiatan ini bertujuan untuk mengenal dan memahami lingkungan kampus sebagai suatu lingkungan akademis serta memahami mekanisme yang berlaku didalamnya.
            </p>
        </div>
    </div>
  </section>
  {{-- end section 2 --}}

  
  {{-- section 3 --}}
  <section class="home-section-3" id="home-section-3">
    <svg class="wave-svg-2" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="intro-2">
      <path id="wave-2" d="" fill="#122b26"/>
    </svg>  

    <div>
      <h2 class="d-flex justify-content-center">Filosofi Kata</h2>
      <h1 class="d-flex justify-content-center">SYAAHEEN</h1>
      <div class="col-sm-10 col-md-8 col-lg-10 mx-auto mt-5">
        <p class="text-center fs-5">
          Syaaheen (شَاهِيْنٌ) yang berarti burung elang dalam Bahasa Arab. Nama ini melambangkan sifat elang yang memiliki pandangan tajam, strategi matang, dan kemampuan beradaptasi dengan alam. Syaaheen diharapkan menjadi simbol mahasiswa tangguh yang berdedikasi, mengedepankan ketekunan dan kegigihan dalam akademik. 
        </p>

        <p class="text-center fs-5">
          Ketika dunia mulai hancur, dekadensi moral yang terus merajalela, sehingga memicu rusaknya nilai-nilai kehidupan, kebudayaan global menggulung segala yang ada, peradaban mulai kehilangan arah. Manusia tak lagi berpegang pada prinsip-prinsip dasar kemanusiaan; keadilan, kejujuran, dan empati tergerus oleh keserakahan dan egoisme. Nilai-nilai tradisional yang pernah menjadi fondasi komunitas dan budaya perlahan terkikis, digantikan oleh individualisme ekstrem dan materialisme yang mendominasi. Dalam kekacauan ini, harapan akan masa depan tampak memudar, sementara tatanan sosial yang rapuh berada di ambang kehancuran total.
        </p>
    </div>
    </div>
  </section>
  {{-- end section 3 --}}

  {{-- section 4 --}}
  <section class="home-section-4" id="home-section-4">

    {{-- batas --}}
    <div class="custom-shape-divider-top-1739805712">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
      </svg>
    </div>

    <div class="logo-scroll-container">
      <section class="logo-section d-flex align-items-center panel">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar di kiri -->
                <div class="col-md-4 text-center scroll-img">
                    <img src="{{ asset('assets/home/logo-ospek-2025.png') }}" alt="logo ospek" class="img-fluid">
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
    

      <section class="logo-section text-dark d-flex align-items-center panel">
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
    

      <section class="logo-section text-dark d-flex align-items-center panel">
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

      <section class="logo-section text-dark d-flex align-items-center panel">
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

      <section class="logo-section text-dark d-flex align-items-center panel">
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

      <section class="logo-section text-dark d-flex align-items-center panel">
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
  {{-- end section 4 --}}

  {{-- section 5 --}}
  <section class="home-section-5 justify-content-center align-items-center" id="home-section-5">

    {{-- unida --}}
    <div class="text-container text-center container">
      <h1 class="mb-4">UNIVERSITAS <br> DARUSSALAM GONTOR</h1>
      <div class="mt-5">
        <img src="{{ asset('assets/home/unida-logo.png') }}" alt="Universitas Darussalam Gontor" class="img-fluid pt-5">
      </div>
      <p class="mt-4 fs-4">
        <span class="text-primary fw-bold">UNIDA GONTOR (Universitas Darussalam Gontor)</span> merupakan perguruan tinggi waqaf yang berada di bawah naungan Pondok Modern Darussalam Gontor. Oleh sebab itu, dalam melaksanakan Tri Dharmanya, UNIDA Gontor mempertahankan visi, misi, dan jiwa pesantren.
      </p>
      <a href="https://unida.gontor.ac.id" class="btn btn-primary mt-3 d-inline-flex align-items-center">
        Kunjungi Website UNIDA GONTOR
        <span class="material-icons ms-2">open_in_new</span>
      </a>
    </div>

    {{-- pmb --}}
    <div class="text-container text-center container">
      <h1 class="mb-4">PENERIMAAN <br> MAHASISWA BARU</h1>
      <div class="mt-5">
        <img src="{{ asset('assets/home/pmb-logo-2.png') }}" alt="pmb" class="img-fluid pt-5">
      </div>
      <p class="mt-4 fs-4">
        <span class="text-primary fw-bold">"Panitia Penerimaan Mahasiswa Baru" atau disingkat "PMB".</span>
        Mereka adalah tim di perguruan tinggi yang menangani proses penerimaan siswa baru. Mereka menilai aplikasi, mengatur ujian masuk (jika diperlukan), dan membuat keputusan tentang penerimaan siswa baru. Selain itu, PMB juga bertanggung jawab atas pendataan mahasiswa baru yang diterima untuk keperluan administratif dan akademis.
      </p>
      <a href="https://unida.gontor.ac.id/admission/" class="btn btn-primary mt-3 d-inline-flex align-items-center">
        Kunjungi Website PMB
        <span class="material-icons ms-2">open_in_new</span>
      </a>
    </div>

    {{-- barang lain --}}
    <div class="text-center container">
      <h3>Hal Lain <br> Yang Perlu Diketahui</h3>
      <div class="row">

        {{-- card 1 --}}
        <div class="col-md-3 col-sm-6 mb-3">
          <div class="card">
            <div class="card wallet">
              <div class="overlay"></div>
                <div class="circle">
                  <div class="card-content">
                    <img src="{{ asset('assets/home/barang-2.png') }}" alt="barang bawaan">
                  </div>
                </div>
              <p>Barang</p>
            </div>          
          </div>
        </div>

        {{-- card 1 --}}
        <div class="col-md-3 col-sm-6 mb-3">
          <div class="card">
            <div class="card wallet">
              <div class="overlay"></div>
                <div class="circle">
                  <div class="card-content">
                    <img src="{{ asset('assets/home/timeline-2.png') }}" alt="barang bawaan">
                  </div>
                </div>
              <p>Timeline</p>
            </div>          
          </div>
        </div>

        {{-- card 1 --}}
        <div class="col-md-3 col-sm-6 mb-3">
          <div class="card">
            <div class="card wallet">
              <div class="overlay"></div>
                <div class="circle">
                  <div class="card-content">
                    <img src="{{ asset('assets/home/baju.png') }}" alt="baju">
                  </div>
            
                </div>
              <p>Attribute</p>
            </div>          
          </div>
        </div>

        {{-- card 1 --}}
        <div class="col-md-3 col-sm-6 mb-3">
          <div class="card">
            <div class="card wallet">
              <div class="overlay"></div>
                <div class="circle">
                  <div class="card-content">
                    <img src="{{ asset('assets/home/lainya.png') }}" alt="lainya">
                  </div>
            
                </div>
              <p>Lainya</p>
            </div>          
          </div>
        </div>

      </div>

    </div>
  </section>


@endsection
