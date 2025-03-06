@extends('layouts.layout')

@section('content')
    {{-- section 1 --}}
    <section class="barang-section-1" id="barang-section-1">
        <div class="container">
            {{-- header --}}
            <div class="barang-header justify-content-center text-center">
                <h2>Apa saja barang yang harus dibawa ?</h2>

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
                <div class="row g-3 justify-content-around">

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
                            <img src="{{ asset('assets/barang/pria/sarung-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title p-3">Sarung</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/pria/jaket-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title p-3">Jaket</h5>
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
                            <img src="{{ asset('assets/barang/pria/alquran-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title p-3">Al-Qur'an</h5>
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
                            <img src="{{ asset('assets/barang/pria/pulpen-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
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
                            <img src="{{ asset('assets/barang/pria/helm-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
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

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/pria/materais.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Materai</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/pria/pasfoto.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title p-3">Pas Foto 3x4 (5 lembar)</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/pria/pasfoto.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Pas Foto 5x6 (5 lembar)</h5>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            {{-- barang mahasiswi --}}
            <div class="barang-container my-5 m-5 d-none" id="barang-mahasiswi">
                <div class="row g-3 justify-content-around">
                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/mukena-putih.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Mukena Putih</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/alquran.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Al-Quran Terjemahan</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/almatsurat.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Al - Ma'tsurat</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/sajadah.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Sajadah</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/formal.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Sepatu Kuliah</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/sport.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Sepatu Olah Raga</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/sandal.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Sandal</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/pantopel.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Pantofel putri</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/pria/kaos-kaki-2.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Kaos Kaki</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/legging.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Celana Legging</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/short-skirt.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Dalaman Rok</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/skirt.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Rok Hitam</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/white-veil.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Kerudung Putih minimal 2 buah</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/darkveil.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Kerudung Hitam / Biru</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/watch.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Arloji</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/tunik.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Tunik</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/diary.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Buku Agenda Resmi</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/botol.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Botol Minum</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/plates.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Peralatan Makan</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/payung.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Payung Lipat</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/wakaf.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Buku Ilmiah (untuk wakaf)</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/personal.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Pas Foto 3x4 (5 lembar)</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/personal.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Pas Foto 5x6 (5 lembar)</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="barang-card">
                            <img src="{{ asset('assets/barang/wanita/materais.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body text-center mt-2">
                                <h5 class="barang-card-title  p-3">Materai</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
