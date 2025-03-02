@extends('layouts.layout')

@section('content')
    {{-- locomotive scroll --}}
    <div data-scroll-container>

        {{-- section 1 --}}
        <section class="kontak-section">

            <div class="container">
                <!-- Content here -->
                <div class="kontak-banner">
                    <div class="kontak-header">
                        <h1>Kontak Kami </h1>
                    </div>
                    <div class="kontak-column">
                        <div class="kontak-form">
                            <form class="row g-3">
                                <h3>Kirim Pesan</h3>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                                    <input type="email" class="form-control" id="inputnama">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Status</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Pilih ...</option>
                                        <option>Calon Mahasiswa Baru</option>
                                        <option>Wali Calon Mahasiswa Baru</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Alamat Email</label>
                                    <input type="text" class="form-control" id="inputemail" placeholder="">
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress2" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="inputnohp" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Isi Pesan</label>
                                    <textarea class="form-control" id="isi-pesan" rows="12"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="form-control">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <div class="kontak-info">
                            <h3>Info Kontak</h3>
                            <p>Jl. Raya Siman, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur
                                <span class="number">63471</span>
                            </p>
                            <p>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=pmb@unida.gontor.ac.id&su=Pendaftaran Mahasiswa Baru&body=Halo PMB,%0A%0ASaya ingin bertanya tentang pendaftaran.%0A%0ATerima kasih."
                                    target="_blank" rel="noopener noreferrer">
                                    Kirim Email ke PMB
                                </a>
                                <span class="email-pmb"> [ pmb@unida.gontor.ac.id ]</span>
                            </p>

                            <p>
                                <a href="https://wa.me/6282139703726" target="_blank" rel="noopener noreferrer">
                                    Chat via WhatsApp
                                </a>
                                <span class="number"> [ +62 821 3970 3726 ]</span>
                            </p>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31615.594490520576!2d111.4898432!3d-7.900364799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e790aa79efd972b%3A0xf09ed064954d29b2!2sUniversitas%20Darussalam%20Gontor!5e0!3m2!1sid!2sid!4v1739514764591!5m2!1sid!2sid"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- end section 2 --}}
    </div>
@endsection