@extends('layouts.layout')

@section('content')
    {{-- section 1 --}}
    <section class="ukm-section-1" id="ukm-section-1">
        <div class="container">
            {{-- header --}}
            <div class="ukm-header justify-content-center text-center">
                <h2>Kegiatan & Organisasi</h2>

                {{-- pilihan --}}
                <div class="btn-group mt-3" role="group">
                    <button type="button" class="btn btn-transparent active" onclick="showukm('mahasiswa')"
                        id="btn-mahasiswa">Mahasiswa</button>
                    <button type="button" class="btn btn-transparent" onclick="showukm('mahasiswi')"
                        id="btn-mahasiswi">Mahasiswi</button>
                </div>
            </div>

            {{-- ukm mahasiswa --}}
            <div class="ukm-container my-5 m-5" id="ukm-mahasiswa">
                <div class="row g-3 justify-content-around">

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/archery.png') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Archery</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/basket.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body  ">
                                <p class="ukm-card-title">UKM Basket</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/taekwondo.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Taekwondo</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/bola.png') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Bola</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/choir1.png') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Choir</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/futsal.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Futsal</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/dimensiband.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Dimensi Band</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/faraby.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Al-Faraby</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/ilustrasi.png') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Tim Ilustrasi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/khot.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Markaz Khot</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/ksei.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM KSEI</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/luqmanulhakim.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Luqmanul Hakim</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/menw.png') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Resimen Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-m/pb.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Badminton</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ukm mahasiswi --}}
            <div class="ukm-container my-5 m-5 d-none" id="ukm-mahasiswi">
                <div class="row g-3 justify-content-around">

                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/basketball.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Basket</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/pb.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Badminton</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/archery.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Archery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/debat.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Debat (Al-Hikmah)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/design.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Design Grafis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/photography.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Fotografi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/hadraht.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Hadrah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/dance.jpg') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Tari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/mc.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM MCC</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/khot.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Khot</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/hastakarya.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Hastakarya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/tatabusana.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Tatabusana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/makeup.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Tata Rias</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/masak.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Tataboga</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/volley.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Voli</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ukm-card">
                            <img src="{{ asset('assets/ukm-f/senam.JPG') }}" class="card-img-top img-fluid "
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="ukm-card-title">UKM Aerobic</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
