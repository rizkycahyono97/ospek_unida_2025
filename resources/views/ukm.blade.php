@extends('layouts.navbar')

@section('content')
    {{-- section 1 --}}
    <section class="barang-section-1" id="barang-section-1">
        {{-- header --}}
        <div class="barang-header justify-content-center text-center">
            <h2>Kegiatan & Organisasi Mahasiswa</h2>

            {{-- pilihan --}}
            <div class="btn-group mt-3" role="group">
                <button type="button" class="btn btn-transparent active" onclick="showBarang('mahasiswa')"
                    id="btn-mahasiswa">Mahasiswa</button>
                <button type="button" class="btn btn-transparent" onclick="showBarang('mahasiswi')"
                    id="btn-mahasiswi">Mahasiswi</button>
            </div>
        </div>


        {{-- barang mahasiswa --}}
        <div class="barang-container my-5 m-5" id="barang-mahasiswa">
            <div class="row g-3">

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/kemeja-kuliah-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title  p-3">Kemeja Kuliah</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/kemeja-putih-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2 ">
                            <h5 class="barang-card-title p-3">Kemeja Putih</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/kaos-putih-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Kaos Putih</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/kemeja-angkatan-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Kemeja Angkatan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/baju-koko-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Baju Koko</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/sarung-2.png') }}" class="card-img-top img-fluid rounded-4"
                            alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sarung</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/jaket-2.png') }}" class="card-img-top img-fluid rounded-4"
                            alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Jaket</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/celana-formal-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Celana Formal</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/celana-olahraga-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Celana Olahraga</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/alquran-2.png') }}" class="card-img-top img-fluid rounded-4"
                            alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Al-Qur'an</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pulpen-2.png') }}" class="card-img-top img-fluid rounded-4"
                            alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Pulpen</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/peci-hitam-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Peci Hitam</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/buku-tulis-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Buku Tulis</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/helm-2.png') }}" class="card-img-top img-fluid rounded-4"
                            alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Helm</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/kaos-kaki-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Kaos Kaki</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/sepatu-olahraga-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sepatu Olahraga</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/sendal-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sandal</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pantofel-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Pantofel</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- barang mahasiswi --}}
        <div class="barang-container my-5 m-5 d-none" id="barang-mahasiswi">
            <div class="row g-3">

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pantofel.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title  p-3">Pantofel putri</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pantofel.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2 ">
                            <h5 class="barang-card-title p-3">Pantofel</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pantofel.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Pantofel</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/pantofel.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Pantofel</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
