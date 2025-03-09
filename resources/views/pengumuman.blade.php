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
                        <h1>Info & Pengumuman</h1>
                        <h5>NB : Klik link pada menu untuk menampilkan informasi</h5>
                    </div>
                    <div class="info-cards">
                        <div class="menu-cards-1">
                            <div class="info-card">
                                <input type="radio" name="slide" id="c1">
                                <label for="c1" class="label">
                                    <div class="row">
                                        <div class="label-header">
                                            <div class="icon">1</div>
                                            <h4>Pengumuman terkait pembayan du mahasiswa</h4>
                                        </div>
                                        <div id="maklumat">
                                            <div class="maklumat-card">
                                                <img src="{{ asset('assets/pembayaran/maklumat-w.png') }}" alt="">
                                            </div>
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
