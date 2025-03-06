@extends('layouts.layout')

@section('content')
    {{-- section 1 --}}
    <section class="outfit-section-1" id="outfit-section-1">
        <div class="container">
            {{-- header --}}
            <div class="outfit-header justify-content-center text-center">
                <h2>Outfit Harian UNIDA</h2>

                {{-- pilihan --}}
                <div class="btn-group mt-3" role="group">
                    <button type="button" class="btn btn-transparent active" onclick="showoutfit('mahasiswa')"
                        id="btn-mahasiswa">Mahasiswa</button>
                    <button type="button" class="btn btn-transparent" onclick="showoutfit('mahasiswi')"
                        id="btn-mahasiswi">Mahasiswi</button>
                </div>
            </div>


            {{-- outfit mahasiswa --}}
            <div class="outfit-container my-5 m-5" id="outfit-mahasiswa">
                <div class="row g-3">

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/formal-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Kuliah</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/korsa-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body  ">
                                <p class="outfit-card-title">Outfit Korsa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/sholat-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Sholat</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/kasual-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Kasual</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/sport-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Olahraga</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/almamater-l.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Almamater</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- outfit mahasiswi --}}
            <div class="outfit-container my-5 m-5 d-none" id="outfit-mahasiswi">
                <div class="row g-3">

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/formal-f.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Kuliah</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/cream-f.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body  ">
                                <p class="outfit-card-title">Seragam Krem</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/tosca-f.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Seragam Tosca</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/sholat-f.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Sholat</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/sport-f.png') }}" class="card-img-top img-fluid rounded-4"
                                alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Outfit Olahraga</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="outfit-card">
                            <img src="{{ asset('assets/outfit/almamater-f.png') }}"
                                class="card-img-top img-fluid rounded-4" alt="Dummy Image">
                            <div class="card-body ">
                                <p class="outfit-card-title">Almamater</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
