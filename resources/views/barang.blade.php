@extends('layouts.layout')

@section('content')
    {{-- section 1 --}}
    <section class="barang-section-1" id="barang-section-1">
        {{-- header --}}
        <div class="barang-header justify-content-center text-center">
            <h1>Apa saja barang yang harus dibawa ?</h1>

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
                        <img src="{{ asset('assets/barang/wanita/pantofel.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title  p-3">Pantofel putri</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/sepatu-olahraga.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2 ">
                            <h5 class="barang-card-title p-3">Sepatu Olahraga</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/sepatu-resmi.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sepatu Kuliah</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/kaos-kaki.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Kaos Kaki</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/sendal.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sandal</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/payung.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Payung</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/jam-tangan.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Jam Tangan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/peralatan-makan.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Peralatan Makan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/botol-minum.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Botol Minum</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/tunik-hijau.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Tunik Hijau</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/rok-hitam.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Rok Hitam</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/kerudung-hitam.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Kerudung Hitam / Biru</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/mukena-putih.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Mukena Putih</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/sajadah.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Sajadah</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/pria/alquran-2.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Al-Qur'an</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/tashbih.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Tashbih</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/almatsurat.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Al-Ma'tsurat</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/daleman-rok.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Dalaman Rok Hitam</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="barang-card">
                        <img src="{{ asset('assets/barang/wanita/legging.png') }}"
                            class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                        <div class="card-body text-center mt-2">
                            <h5 class="barang-card-title p-3">Celana Legging</h5>
                        </div>
                    </div>
                </div>

            </div>

            {{-- others --}}
            <div class="mt-5">
                <h3>Barang Lainnya yang Wajib Dibawa</h3>
                <div class="barang-wanita-text">
                    <ul>
                        <li>Baju Angkatan</li>
                        <li>Daleman Kerudung</li>
                        <li>Agenda Resmi</li>
                        <li>Buku Baacaan Ilmiah</li>
                        <li>Pas Foto 3x4 (5 lembar)</li>
                        <li>Pas Foto 5x6 (5 lembar)</li>
                        <li>Materai</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
@endsection
